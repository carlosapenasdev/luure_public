<?php

namespace App\Models\Operacao;
use App\Models\Model;
use App\Models\Protocolo\Estagio;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use \Carbon\Carbon;

use App\Models\Protocolo\Documento;
use App\Models\Management\DocumentoTipo;
use App\Models\Gestao\Efetivo\User;
use App\Models\Comentario;
use Illuminate\Support\Collection;

class MissaoOperacao extends Model
{
	use SoftDeletes, \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'operacao';
	
	protected $fillable = [
		#ANALISTA
		'assunto_principal',
		'elabora_ob',
		'user_elo_id',
		'dias_prazo_elo',

		#ELO
		'data_recebeu_elo',
		'data_elo_encerrou',

		#SISTEMA
		'operacao_id',
		'user_cadastro_id',
		'user_analista_id',
		'data_atribuiu_elo',
		'prazo_final',
		'conclusao_elo',
		'conclusao_analista',
		'estagio_id',
		'data_adm_encerrou',
	];

	protected $dates = [
		'prazo_final'
		,'data_atribuiu_elo'
		,'data_recebeu_elo'
		,'data_elo_encerrou'
		,'data_adm_encerrou'
	];

	protected $appends = ['prazo_final_formatado'];

	/*STATUS*/

	public function isInAnalista()
	{
		return $this->estagio->isAnalista();
	}

	public function isInElo()
	{
		return $this->estagio->isElo();
	}

	/*END STATUS*/
	
	/*ACOES*/
	public function enviarElo()
	{
		$hoje 							= Carbon::now();
		$this->estagio_id 				= Estagio::elo()->id;
		$this->data_atribuiu_elo 		= $hoje;
		$this->data_recebeu_elo 		= $hoje;
		$this->data_elo_encerrou 		= null;
		$this->conclusao_elo 			= null;

		$this->definirPrazo();

		$this->save();
	}

	public function definirPrazo($prazo = null)
	{
		$hoje 							= Carbon::now();
		
		if(is_null($prazo))
			$prazo 						= $this->dias_prazo_elo;

		$this->prazo_final 				= $hoje->addDays($prazo);

		return $this->prazo_final;
	}

	public function conclusaoElo()
	{
		$hoje 							= Carbon::now();
		$this->estagio_id 				= Estagio::analista()->id;
		$this->data_elo_encerrou 		= $hoje;
		$this->conclusao_elo 			= 1;

		$this->save();
	}

	public function conclusaoAnalista()
	{
		$this->estagio_id 				= Estagio::finalizado()->id;
		$this->conclusao_analista 		= 1;
		$this->data_adm_encerrou 		= Carbon::now();

		$this->save();
	}
	/*END ACOES*/

	/*PERMISSOES*/

	public function canEdit()
	{
		$user = auth()->user();

		if($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local'))
		{
			return ($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local') && !$this->hasAnalistaConcluiu() && !$this->hasEloConcluiu());
		}
	}

	public function canDespacharDevolver()
	{
		if($this->isInAnalista())
		{
			return (auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local'));
		}
		elseif($this->isInElo())
		{
			return ((auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local')) || (auth()->user()->hasRole('elo') && $this->souResposanvel()));
		}
	}

	public function hasAnalistaConcluiu()
	{
		return !is_null($this->conclusao_analista);
	}

	public function hasEloConcluiu()
	{
		return !is_null($this->data_elo_encerrou);
	}

	public function canCriar()
	{
		return ($this->isInElo() && auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local') || ($this->estagio->isAnalista() && !$this->hasEloConcluiu()));
	}

	public function canDespachoEloConcluir()
	{
		return ((auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local', 'elo') ) && $this->isInElo() && !$this->hasEloConcluiu());
	}

	public function canDespachoAnalistaConcluir()
	{
		return ((auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local')) && $this->isInAnalista() && $this->hasEloConcluiu() && !$this->hasAnalistaConcluiu());
	}

	/*END PERMISSOES*/

	/*GETTERS*/

	public function ordemBusca()
	{
		return $this->documentos()->where('documento_tipo_id', DocumentoTipo::ordemBusca()->id)->first();
	}

	public function relatorioBusca()
	{
		return $this->documentos()->where('documento_tipo_id', DocumentoTipo::relatorioBusca()->id)->first();
	}

	public function getCorVencimento()
	{
		if($this->prazoTerminando())
			$backItem = 'orange';

		elseif($this->prazoAtrasado())
			$backItem = 'red';

		elseif($this->prazoEmDia())
			$backItem = 'green';
		
		return $backItem;
	}
	public function diasParaVencer($hasElo = false)
	{
		$hoje 			= Carbon::now();

		if($this->hasAnalistaConcluiu())
			$hoje 			= $this->data_adm_encerrou;
		
		if(is_null($this->prazo_final))
		{
			$vencimento 	=  $hoje;
		}
		else
		{
			if((auth()->user()->hasRole('elo') && !is_null($this->data_recebeu_elo)) || $hasElo == true)
			{
				$vencimento =  $this->data_recebeu_elo->addDays($this->dias_prazo_elo);
			}
			else
				$vencimento =  $this->prazo_final;
		}
		
		if($hoje->gt($vencimento))
		{
			$vencimento 	= $vencimento->startOfDay();
			$hoje 			= $hoje->endOfDay();
		}
		else
		{
			$hoje 			= $hoje->startOfDay();
			$vencimento 	= $vencimento->endOfDay();
		}
		
		$diff 			= $vencimento->diffInDays($hoje,false);
		
		return $diff;
	}

	public function diasParaVencerInverso($hasElo = false)
	{
		return $this->diasParaVencer($hasElo) * -1;
	}

	public function getPrazoFinal()
	{
		if(is_null($this->prazo_final))
		{
			return 0;
		}
		else
		{
			$user 	= auth()->user();
			$prazo 	= $this->prazo_final;
			$hasElo = false;

			if($this->isInElo() && $this->souResposanvel())
				$hasElo = true;

			if(($user->hasRole('elo') || $hasElo) && !is_null($this->data_recebeu_elo))
			{
				$prazo =  $this->data_recebeu_elo->addDays($this->dias_prazo_elo);
			}

			return $prazo;
		}
	}

	public function souResposanvel()
	{
		if($this->isInAnalista())
			return $this->user_analista_id 	== auth()->user()->id;
		elseif($this->isInElo())
			return $this->user_elo_id 		== auth()->user()->id;

	}

	public function despacharQuem()
	{
		if($this->estagio->isElo())
		{
			return $this->estagio->getEstagioAnterior();
		}
		elseif($this->estagio->isAnalista() && $this->hasEloConcluiu())
		{
			return Estagio::finalizado();
		}
		elseif($this->estagio->isAnalista() && !$this->hasEloConcluiu())
		{
			return null;
		}

		return $this->estagio->getEstagioProximo();
	}

	public function devolverQuem()
	{
		if($this->estagio->isAnalista())
		{
			if(!$this->hasEloConcluiu())
				return null;
			elseif($this->hasEloConcluiu() && is_null($this->user_elo))
				return null;
			elseif($this->hasEloConcluiu())
			{
				return $this->estagio->getEstagioProximo();
			}
		}
		
		return $this->estagio->getEstagioAnterior();
	}

	public static function minhasMissoes()
	{
		$minhasMissoes 		= new Collection();
		$user 				= auth()->user();

		if($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto'))
		{
			$missaos 		= self::all()->whereIn('estagio_id', [Estagio::analista()->id]);
			$minhasMissoes 	= $minhasMissoes->concat($missaos);
		}

		$missaos 			= self::all()
		->where('user_analista_id', $user->id)
		->where('estagio_id', '=', Estagio::analista()->id);

		$minhasMissoes 		= $minhasMissoes->concat($missaos);
		
		$missaos 			= self::all()
		->where('user_elo_id', $user->id)
		->where('estagio_id', '=', Estagio::elo()->id);

		$minhasMissoes 		= $minhasMissoes->concat($missaos);

		return $minhasMissoes;
		
	}

	public static function minhasMissoesComElo()
	{
		$user 				= auth()->user();

		$minhasMissoes		= self::all()
		->where('user_analista_id', $user->id)
		->where('estagio_id', '=', Estagio::elo()->id);

		return $minhasMissoes;
	}

	public function getPrazoFinalFormatadoAttribute()
	{
		$prazo =  $this->getPrazoFinal();
		return is_int($prazo) ? $prazo : $prazo->format('d/m/Y'); 
	}
	/*END GETTERS*/
	
	/*METODOS PRIVADOS*/
	private function prazoTerminando()
	{
		$prazo = $this->diasParaVencer();
		return ($prazo == -1);
	}

	private function prazoAtrasado()
	{
		$prazo = $this->diasParaVencer();
		return ($prazo >= 0);
	}

	private function prazoEmDia()
	{
		$prazo = $this->diasParaVencer();
		return ($prazo <= -2);
	}
	/*END METODOS PRIVADOS*/

	/*RELACIONAMENTOS*/

	public function operacao()
	{
		return $this->belongsTo(Operacao::class);
	}

	public function documentos()
	{
		return $this->belongsToMany(Documento::class, 'documento_missao_operacao', 'missao_id', 'documento_id');
	}

	public function user_cadastro()
	{
		return $this->belongsTo(User::class, 'user_cadastro_id', 'id');
	}

	public function user_elo()
	{
		return $this->belongsTo(User::class, 'user_elo_id', 'id');
	}

	public function estagio()
	{
		return $this->belongsTo(Estagio::class);
	}

	public function historico()
	{
		return $this->activities()->orderBy('created_at', 'desc')->orderBy('id', 'desc')->get();
	}
	/*END RELACIONAMENTOS*/
}
