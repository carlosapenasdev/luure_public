<?php

namespace App\Models\Protocolo;

use App\Models\Model;
use App\Models\Management\Thematic;
use App\Models\Management\Origin;
use App\Models\Gestao\Efetivo\User;
use App\Models\Management\DocumentoTipo;
use Illuminate\Support\Collection;

use App\Models\Protocolo\Documento;
use App\Models\Protocolo\Estagio;
use App\Models\Protocolo\ComentarioProtocolo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Individuo\Individuo;
use App\Models\Individuo\IndividuoProtocolo;
use App\Models\Gestao\Agencia\Agencia;
use App\Models\Gestao\Canal\Canal;
use App\Models\Protocolo\ContraInteligencia;
use Lang;

class Protocolo extends Model
{
	use \Balping\HashSlug\HasHashSlug;
	public static $status = [
		'inChefia' 			=> 0,
		'inAnalista' 		=> 1,
		'inElo' 			=> 2,
		'inAdministrativo' 	=> 3,
		'inFinalizado'		=> 4,
	];
	public static $statusString = [
		0 => 'inChefia',
		1 => 'inAnalista',
		2 => 'inElo',
		3 => 'inAdministrativo',
		4 => 'inFinalizado',
	];

	protected $fillable = [
		'agencia_id',
		'agencia_origem_id',
		'canal_id',
		#ADJUNTO
		'origin_id',
		'thematic_id',
		'user_cadastro_id',
		'assunto_principal',

		#CHEFE
		'user_analista_id',
		'data_atribuiu_analista',
		'necessidades_especificas',
		'documento_tipo_ser_produzido_id',
		'dias_prazo_protocolo',

		#ANALISTA
		'data_recebeu_analista',
		'user_elo_id',
		'data_atribuiu_elo',
		'elabora_ob',
		'dias_prazo_elo',
		#numero_documento_produzido_id',

		#ELO
		'data_recebeu_elo',
		'data_elo_encerrou',

		#FINALIZAR
		'conclusao_elo',
		'conclusao_analista',
		'conclusao_chefe',
		'conclusao_adm',

		'prazo_final',
		'status',
		'estagio_id',
		
		'visivel',
	];

	protected $dates = [
		'prazo_final'
		,'data_atribuiu_analista'
		,'data_recebeu_analista'
		,'data_atribuiu_elo'
		,'data_recebeu_elo'
		,'data_elo_encerrou'
		,'data_adm_encerrou'
	];

	protected $appends = ['prazo_final_formatado'];

	protected static function booted()
	{
		static::addGlobalScope(new \App\Scopes\AgenciaScope);
	}

	public function getPrazoFinalFormatadoAttribute()
	{
		$prazo =  $this->getPrazoFinal();
		return is_int($prazo) ? $prazo : $prazo->format('d/m/Y'); 
	}

	public static function inAdministrativo()
	{
		return self::where('status', self::$status['inAdministrativo'])->get();
	}

	public static function inChefia()
	{
		return self::where('status', self::$status['inChefia'])->get();
	}

	public static function inAnalista()
	{
		return self::where('status', self::$status['inAnalista'])->get();
	}

	public static function inFinalizado()
	{
		return self::where('status', self::$status['inFinalizado'])->get();
	}

	public static function inElo()
	{
		return self::where('status', self::$status['inElo'])->get();
	}

	public function ordemBusca()
	{
		return $this->documentos()->where('documento_tipo_id', DocumentoTipo::ordemBusca()->id)->first();
	}

	public function relatorioBusca()
	{
		return $this->documentos()->where('documento_tipo_id', DocumentoTipo::relatorioBusca()->id)->first();
	}

	public function relatorioAnalista()
	{
		return $this->documentos()->where('documento_tipo_id', $this->documento_tipo_ser_produzido_id)->first();
	}

	public function documento()
	{
		return $this->documentos()->first();
	}

	public function enviarAnalista()
	{
		$hoje 							= Carbon::now();
		#{todo-remover}
		$this->status 					= self::$status['inAnalista'];
		$this->estagio_id 				= Estagio::analista()->id;

		$this->data_atribuiu_analista 	= $hoje;
		$this->data_recebeu_analista 	= $hoje;

		$prazo_final 					= $hoje->addDays($this->dias_prazo_protocolo);
		$this->prazo_final 				= $prazo_final->toDateString();

		$this->save();
	}

	public function enviarElo()
	{
		$hoje 							= Carbon::now();

		#{todo-remover}
		$this->status 					= self::$status['inElo'];
		$this->estagio_id 				= Estagio::elo()->id;
		$this->data_atribuiu_elo 		= $hoje;
		$this->data_recebeu_elo 		= $hoje;
		$this->data_elo_encerrou 		= null;
		$this->conclusao_elo 			= null;

		$this->save();
	}

	public function conclusaoElo()
	{
		$hoje 							= Carbon::now();
		#{todo-remover}
		$this->status 					= self::$status['inAnalista'];
		$this->estagio_id 				= Estagio::analista()->id;
		$this->data_elo_encerrou 		= $hoje;
		$this->conclusao_elo 			= 1;

		$this->save();
	}

	public function conclusaoAnalista()
	{
		#{todo-remover}
		$this->status 					= self::$status['inChefia'];
		$this->estagio_id 				= Estagio::chefia()->id;
		$this->conclusao_analista 		= 1;

		$this->save();
	}

	public function conclusaoChefia()
	{
		#{todo-remover}
		$this->status 					= self::$status['inAdministrativo'];
		$this->estagio_id 				= Estagio::administrativo()->id;
		$this->conclusao_chefe 			= 1;

		$this->save();
	}

	public function conclusaoAdministrativo()
	{
		#{todo-remover}
		$this->status 					= self::$status['inFinalizado'];
		$this->estagio_id 				= Estagio::finalizado()->id;
		$this->conclusao_adm 			= 1;
		$this->data_adm_encerrou 		= Carbon::now();
		$this->visivel 					= 1;

		$this->save();
	}

	/*STATUS*/

	public function isInAdministrativo()
	{
		return $this->estagio->isAdministrativo();
	}

	public function isInChefia()
	{
		return $this->estagio->isChefia();
	}

	public function isInAnalista()
	{
		return $this->estagio->isAnalista();
	}

	public function isInElo()
	{
		return $this->estagio->isElo();
	}

	public function isInFinalizado()
	{
		return $this->estagio->isFinalizado();
	}
	/*STATUS FIM*/

	/*PERMISSOES*/

	public function hasAnalista()
	{
		return !is_null($this->data_atribuiu_analista);
	}

	public function hasElo()
	{
		return !is_null($this->data_atribuiu_elo);
	}

	public function hasEloConcluiu()
	{
		return !is_null($this->data_elo_encerrou);
	}

	public function hasAnalistaConcluiu()
	{
		return !is_null($this->conclusao_analista);
	}

	public function hasChefeConcluiu()
	{
		return !is_null($this->conclusao_chefe);
	}

	public function hasAdministrativoConcluiu()
	{
		return !is_null($this->conclusao_adm);
	}

	public function canEdit()
	{
		$user = auth()->user();
		
		if($this->isInAnalista())
		{
			if($user->hasRole('analista-subsecao') || $user->hasRole('analista-regional') || $user->hasRole('analista-local'))
				return !$this->hasAnalistaConcluiu() && $this->hasElo();
			else
				return ($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto') && !$this->hasAnalistaConcluiu());
		}
		else
		{
			return ($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto') && !$this->hasEloConcluiu() && !$this->isInFinalizado());
		}
	}

	public function canDespacharDevolver()
	{
		if($this->isInAdministrativo())
		{
			return (auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'administrativo'));
		}
		elseif($this->isInChefia())
		{
			return (auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto'));
		}
		elseif($this->isInAnalista())
		{
			return (auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local'));
		}
		elseif($this->isInElo())
		{
			return (auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'elo'));
		}
	}

	public function canView()
	{
		$retorno 	= false;
		$user 		= auth()->user();

		if($this->isInFinalizado())
			$retorno = true;
		
		elseif($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto'))
			$retorno = true;

		elseif($this->isInAnalista() && $user->isLevelAnalista())
			$retorno = true;

		elseif($this->isInElo() && $user->hasRole('elo'))
			$retorno = true;

		return $retorno;

	}

	public function canAnalistaEdit()
	{
		return (($this->isInAnalista() && $this->canEdit()) || ($this->isInElo() && $this->souResposanvel()) || ($this->isInAnalista() && $this->souResposanvel()));
	}

	public function canCriarMissao()
	{
		return ($this->isInChefia() && !$this->hasAnalistaConcluiu());
	}

	public function canDespachoChefeParaAnalista()
	{
		return ($this->isInAnalista() && (auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')));
	}

	public function canDespachoAnalistaParaElo()
	{
		return ($this->isInAnalista() && !$this->hasEloConcluiu());
	}

	public function canDespachoEloConcluir()
	{
		return ((auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'elo')) && $this->isInElo() && !$this->hasEloConcluiu());
	}

	public function canDespachoAnalistaConcluir()
	{
		return ((auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local')) && $this->isInAnalista() && $this->hasEloConcluiu() && !$this->hasAnalistaConcluiu());
	}

	public function canDespachoChefeConcluir()
	{
		return ($this->isInChefia() && $this->hasEloConcluiu() && $this->hasAnalistaConcluiu());
	}

	public function canDespachoAdministrativoConcluir()
	{
		return ($this->isInAdministrativo() && $this->hasEloConcluiu() && $this->hasAnalistaConcluiu() && $this->hasChefeConcluiu());
	}

	/*PERMISSOES FIM*/
	
	/*GETTERS*/

	public static function getProtocolosAbertos()
	{
		$protocolos = new Collection();
		
		foreach (self::$status as $status => $value)
		{
			if($value != self::$status['inFinalizado'])
				$protocolos->put($status, self::$status());
		}

		return $protocolos;
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

		if($this->hasAdministrativoConcluiu())
			$hoje 			= $this->data_adm_encerrou;
		
		if(is_null($hoje))
			$hoje 			= Carbon::now();
		
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

	public function despacharQuem()
	{
		if($this->estagio->isElo())
		{
			return $this->estagio->getEstagioAnterior();
		}
		elseif($this->estagio->isAnalista() && $this->hasEloConcluiu())
		{
			return $this->estagio->getEstagioAnterior();
		}
		elseif($this->estagio->isChefia() && $this->hasEloConcluiu() && $this->hasAnalistaConcluiu())
		{
			return Estagio::administrativo();
		}
		return $this->estagio->getEstagioProximo();
	}

	public function devolverQuem()
	{
		if($this->estagio->isAnalista())
		{
			if($this->hasEloConcluiu() && is_null($this->user_elo))
				return null;
			elseif($this->hasEloConcluiu())
			{
				return $this->estagio->getEstagioProximo();
			}
		}
		elseif($this->estagio->isChefia() && $this->hasAnalistaConcluiu())
		{
			return $this->estagio->getEstagioProximo();
		}
		elseif($this->estagio->isAdministrativo())
		{
			return Estagio::chefia();
		}

		return $this->estagio->getEstagioAnterior();
	}

	public function diasParaVencerInverso($hasElo = false)
	{
		return $this->diasParaVencer($hasElo) * -1;
	}

	public static function minhasMissoes()
	{
		$minhasMissoes 		= new Collection();
		$user 				= auth()->user();

		if($user->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local'))
		{
			$missaos 		= self::all()->whereIn('estagio_id', [Estagio::chefia()->id]);
			$minhasMissoes 	= $minhasMissoes->concat($missaos);
		}

		if($user->hasRole('root', 'adjunto'))
		{
			$missaos 		= self::all()->whereIn('estagio_id', [Estagio::chefia()->id, Estagio::administrativo()->id])
			->where('visivel', 1);
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

	public function getPrazoFinal()
	{
		if(is_null($this->prazo_final))
		{
			return 0;
		}
		else
		{
			$user = auth()->user();
			$prazo = $this->prazo_final;

			$hasElo = false;
			if(request()->is('paramim') && $this->isInElo() && $this->souResposanvel())
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
		return $this->user_analista->id == auth()->user()->id;
	}

	public static function totaisPorStatusVencimento(Request $request = null)
	{
		if(is_null($request))
			$protocolos 	= self::all();
		else
		{
			$request->merge([
				'incluir_finalizados' 		=> 1,
			]);
			
			$protocolos 	= self::buscar($request);
		}
		
		$finalizados 		= new Collection();
		$abertos 			= new Collection();
		$retorno 			= new Collection();
		
		$total 				= $protocolos->count();
		
		$atrasadoAberto 	= 0;
		$atrasadoFinalizado = 0;

		$emDiaAberto 		= 0;
		$emDiaFinalizado 	= 0;

		foreach ($protocolos as $key => $protocolo)
		{
			$emDia			= 0;
			$atrasado 		= 0;

			if($protocolo->prazoTerminando() || $protocolo->prazoEmDia())
				$emDia++;
			elseif($protocolo->prazoAtrasado())
				$atrasado++;
			
			if($protocolo->status == self::$status['inFinalizado'])
			{
				$emDiaFinalizado 	+= $emDia;
				$atrasadoFinalizado	+= $atrasado;
			}
			else
			{
				$emDiaAberto 		+= $emDia;
				$atrasadoAberto 	+= $atrasado;
			}

		}

		$finalizados->put('total', 		($atrasadoFinalizado + $emDiaFinalizado));
		$finalizados->put('atrasado', 	$atrasadoFinalizado);
		$finalizados->put('emDia', 		$emDiaFinalizado);

		$abertos->put('total', 			($atrasadoAberto + $emDiaAberto));
		$abertos->put('atrasado', 		$atrasadoAberto);
		$abertos->put('emDia', 			$emDiaAberto);

		$retorno->put('total'		, $total);
		$retorno->put('abertos'		, $abertos);
		$retorno->put('finalizados'	, $finalizados);
		
		return $retorno;
	}

	public static function totaisPorTematica(Request $request = null)
	{
		$tematicas 				= array();
		$thematics 				= Thematic::where('motif', '<>', '')->orderBy('motif', 'asc')->get();
		
		foreach ($thematics as $thematic)
		{
			if(is_null($request))
				$protocolos 	= $thematic->protocolos;
			else
			{
				$request->merge([
					'thematic_id' 			=> $thematic->id,
					'incluir_finalizados' 	=> 1,
				]);

				$protocolos 	= self::buscar($request);
			}
			
			$total 				= $protocolos->count();
			$atrasado 			= 0;
			$emDia 				= 0;

			foreach ($protocolos as $key => $protocolo)
			{
				if($protocolo->prazoTerminando() || $protocolo->prazoEmDia())
					$emDia++;
				elseif($protocolo->prazoAtrasado())
					$atrasado++;
			}

			$tematica 					= array();
			$tematica['tema'] 			= $thematic->motif;
			$tematica['total'] 			= $total;
			$tematica['atrasado'] 		= $atrasado;
			$tematica['emDia'] 			= $emDia;

			$tematicas[] 				= $tematica;
		}

		$tematicas = collect($tematicas)->reject(function($element) {
			return $element['total'] == 0;
		});

		return $tematicas->sortByDesc('total');
	}

	public static function totaisPorResponsaveis(Request $request = null)
	{
		$usuarios 					= array();
		$users 						= User::todosAtivos()->sortBy('antiguidade');

		foreach ($users as $user)
		{
			if(is_null($request))
				$protocolos 	= $user->protocolos_analista;
			else
			{
				$requestAnalista = clone $request;
				$requestAnalista->merge([
					'user_analista_id' 		=> $user->id,
					'incluir_finalizados' 	=> 1,
				]);

				$protocolos 	= self::buscar($requestAnalista);
			}


			$total 					= $protocolos->count();
			$atrasado 				= 0;
			$emDia 					= 0;

			foreach ($protocolos as $key => $protocolo)
			{
				if($protocolo->prazoTerminando() || $protocolo->prazoEmDia())
					$emDia++;
				elseif($protocolo->prazoAtrasado())
					$atrasado++;
			}

			$analista 				= array();
			$analista['name'] 		= $user->name;
			$analista['total'] 		= $total;
			$analista['atrasado'] 	= $atrasado;
			$analista['emDia'] 		= $emDia;


			if(is_null($request))
				$protocolos 			= $user->protocolos_elo;
			else
			{
				$requestElo = clone $request;
				$requestElo->merge([
					'user_elo_id' 			=> $user->id,
					'incluir_finalizados' 	=> 1,
				]);

				$protocolos 	= self::buscar($requestElo);
			}


			$total 					= $protocolos->count();
			$atrasado 				= 0;
			$emDia 					= 0;

			foreach ($protocolos as $key => $protocolo)
			{
				if($protocolo->prazoTerminando() || $protocolo->prazoEmDia())
					$emDia++;
				elseif($protocolo->prazoAtrasado())
					$atrasado++;
			}

			$elo 					= array();
			$elo['name'] 			= $user->name;
			$elo['total'] 			= $total;
			$elo['atrasado'] 		= $atrasado;
			$elo['emDia'] 			= $emDia;

			$usuarios['analista'][] = $analista;
			$usuarios['elo'][] 		= $elo;
		}

		$usuarios['analista'] = collect($usuarios['analista'])->reject(function($element) {
			return $element['total'] == 0;
		})->sortByDesc('total');

		$usuarios['elo'] = collect($usuarios['elo'])->sortByDesc('total');
		
		return collect($usuarios);
	}

	public static function buscar($request)
	{
		if($request->has('incluir_finalizados'))
			$estagio = Estagio::finalizado()->id;
		else
			$estagio = Estagio::administrativo()->id;

		$rangeBusca = auth()->user()->isLevelAnalista() ? '=' : '<=';



		$busca 	= self::where('estagio_id', $rangeBusca, $estagio)
		->where(function($query) use ($request)
		{
			if($request->has('assunto_principal'))
				$query = $query->orWhere('assunto_principal', 'LIKE', '%'.$request->keyword.'%');

			if($request->has('necessidades_especificas'))
				$query = $query->orWhere('necessidades_especificas', 'LIKE', '%'.$request->keyword.'%');	
			
		});

		if($request->has('incluir_ocultos') && !empty($request->incluir_ocultos))
			$busca = $busca->whereIn('visivel', [0,1]);
		else
			$busca = $busca->where('visivel', 1);

		if($request->has('id_protocolo') && !empty($request->id_protocolo))
			$busca = $busca->where('id', $request->id_protocolo);

		if($request->has('periodo_de') && !empty($request->periodo_de))
			$busca = $busca->where('created_at', '>=', getCarbonDate($request->periodo_de)->startOfDay());

		if($request->has('periodo_ate') && !empty($request->periodo_ate))
			$busca = $busca->where('created_at', '<=', getCarbonDate($request->periodo_ate)->endOfDay());

		if($request->has('thematic_id'))
			$busca 		= $busca->where('thematic_id', $request->thematic_id);

		if($request->has('user_analista_id'))
			$busca 		= $busca->where('user_analista_id', $request->user_analista_id);

		if($request->has('user_elo_id'))
			$busca 		= $busca->where('user_elo_id', $request->user_elo_id);

		$busca 			= $busca->get();
		
		if(($request->has('documento_tipo_origem_id') && !empty($request->documento_tipo_origem_id)) || ($request->has('documento_tipo_ser_produzido_id') && !empty($request->documento_tipo_ser_produzido_id)))
		{
			$busca 			= $busca->filter(function($protocolo) use ($request)
			{
				$documento = $protocolo->documentos->filter(function($documento) use ($request)
				{

					if(($documento->documento_tipo_id == $request->documento_tipo_origem_id) || ($documento->documento_tipo_id == $request->documento_tipo_ser_produzido_id))
					{
						return $documento;
					}
				});

				if($documento->count() > 0)
					return $protocolo;
			});
		}

		if($request->has('numero_origem') && !empty($request->numero_origem))
		{
			$docsEntrada = DocumentoTipo::tiposEntrada()->pluck('id')->toArray();

			$busca 			= $busca->filter(function($protocolo) use ($request, $docsEntrada)
			{
				$documento = $protocolo->documentos->filter(function($documento) use ($request, $docsEntrada)
				{
					if($documento->numero == $request->numero_origem && in_array($documento->documento_tipo_id, $docsEntrada))
					{
						return $documento;
					}
				});

				if($documento->count() > 0)
					return $protocolo;
			});
		}

		if($request->has('numero_produzido') && !empty($request->numero_produzido))
		{
			$docsProduzidos = DocumentoTipo::tiposProduzido(false)->pluck('id')->toArray();

			$busca 			= $busca->filter(function($protocolo) use ($request, $docsProduzidos)
			{
				$documento = $protocolo->documentos->filter(function($documento) use ($request, $docsProduzidos)
				{
					if($documento->numero == $request->numero_produzido && in_array($documento->documento_tipo_id, $docsProduzidos))
					{
						return $documento;
					}
				});

				if($documento->count() > 0)
					return $protocolo;
			});
		}

		if($request->has('individuo') && !empty($request->individuo))
		{
			$busca 		= $busca->filter(function($protocolo) use ($request)
			{
				$pessoas 			= $protocolo->pessoas;
				$individuosBuscados = $request->individuo;
				
				$individuo 			= $pessoas->filter(function($individuo) use ($request, &$individuosBuscados)
				{
					if(in_array($individuo->id, $request->individuo))
					{
						unset($individuosBuscados[ array_search($individuo->id, $request->individuo) ]);
						return $individuo;
					}
				});

				if(count($individuosBuscados) == 0)
					return $protocolo;
			});
		}
		
		return $busca;
	}

	public function isVisivel()
	{
		return $this->visivel == 1;
	}	

	public function isOwner()
	{
		return $this->agencia_id == auth()->user()->agencia_id;
	}

	public function showEnviarAgencias()
	{
		return $this->isInChefia() && $this->hasAnalistaConcluiu() && auth()->user()->hasRole('chefe-subsecao') && $this->agencia_id == auth()->user()->agencia_id && !$this->foiDifundido();
	}

	public function showModalDecisaoAnalista()
	{
		return $this->isInAnalista() && !$this->hasAnalistaConcluiu() && !$this->hasEloConcluiu();
	}

	public function isDifusaoEntregue()
	{
		$contra 	= $this->contraInteligencia;

		if(!is_null($contra))
			return $contra->isRespondido() && $contra->isValidado();
		
		else
			return true;

	}

	public function classeStatusContraInteligenciaDifusao()
	{
		$retorno	= '';
		$contra 	= $this->contraInteligencia;

		if(!is_null($contra))
		{
			if($contra->isRespondido() && !$contra->isValidado())
				$retorno = 'chip-difusao-contra';
			elseif($this->isDifusaoEntregue())
				$retorno = 'chip-difusao-entregue';
		}

		return $retorno;
	}

	public function tipDifusao()
	{
		$retorno 	= '';
		$contra 	= $this->contraInteligencia;

		if(!$this->hasAnalista())
			$retorno = Lang::get('controller/protocolo.difusao_sem_interacao');
		elseif($this->hasAnalista() && !$contra->isRespondido() && !$contra->isValidado())
			$retorno = Lang::get('controller/protocolo.difusao_com_interacao');
		elseif(!is_null($contra))
		{
			if($contra->isRespondido() && !$contra->isValidado())
				$retorno = Lang::get('controller/protocolo.difusao_aguardando_contra');

			elseif($contra->isRespondido() && $contra->isValidado())
				$retorno = Lang::get('controller/protocolo.difusao_contra_validou');

		}

		return $retorno;
	}

	public static function clonarParaOutraAgencia(Request $request, Protocolo $protocolo)
	{
		$criar 							= $request->all();

		$docOrigem						= Documento::getDocumentoParaClone($criar['documento-selecionado']);

		if($request->has('dias_prazo_protocolo'))
		{
			$hoje 						= Carbon::now();
			$prazo_final 				= $hoje->addDays($request->dias_prazo_protocolo);
			$criar['prazo_final'] 		= $prazo_final;
		}

		$criar['assunto_principal'] 	= $request->assunto;

		$criar['user_cadastro_id'] 		= auth()->user()->id;

		if(!$request->has('agencia_origem_id'))
		{
			$criar['agencia_origem_id'] 	= auth()->user()->agencia_id;
		}


		$criar['origin_id'] 			= $protocolo->origin_id;
		$criar['canal_id'] 				= Canal::luure_id;
		$criar['thematic_id'] 			= $protocolo->thematic_id;

		$criar['status'] 				= Protocolo::$status['inChefia'];
		$criar['estagio_id'] 			= Estagio::chefia()->id;

		$novo = null;
		foreach ($request->agencias as $agencia_id)
		{
			$criar['agencia_id'] 		= $agencia_id;
			$novo 						= Protocolo::create($criar);

			if($request->has('enviar_agencias'))
			{
				$protocolo->difusao()->attach($novo);

				ContraInteligencia::create([
					'assunto_contra' 	=> $request->assunto,
					'agencia_de_id' 	=> $agencia_id,
					'agencia_para_id' 	=> auth()->user()->agencia_id,
					'protocolo_id' 		=> $novo->id,
				]);
			}

			$documento = self::cloneDocumentoParaProtocolo($novo, $docOrigem);

			$novo->documentos()->attach($documento);

			copy($docOrigem->arquivo, public_path($documento->arquivo));
		}
	}

	private static function cloneDocumentoParaProtocolo(Protocolo $protocolo, Documento $docOrigem)
	{
		$ext 		= explode('.', $docOrigem->arquivo);
		$novoDoc 	= getFileNameProtocolo($protocolo).'.'.end($ext);

		$documento  = Documento::create([
			'agencia_id' 			=> $protocolo->agencia_id,
			'user_id'				=> auth()->user()->id,
			'numero'				=> $docOrigem->numero,
			'documento_tipo_id'		=> $docOrigem->documento_tipo_id,
			'arquivo'				=> 'storage/protocolo/'.$novoDoc,
		]);

		return $documento;
	}

	public function isBaixoCima()
	{
		return !is_null($this->agenciaOrigem) && $this->agenciaOrigem->id != auth()->user()->agencia->id;

	}


	/*GETTERS FIM*/
	
	/*METODOS PRIVADOS*/

	private function prazoTerminando()
	{
		$prazo = $this->diasParaVencer();
		return (($prazo == -1) || ($prazo == 0));
	}

	private function prazoAtrasado()
	{
		$prazo = $this->diasParaVencer();
		return ($prazo >= 1);
	}

	private function prazoEmDia()
	{
		$prazo = $this->diasParaVencer();
		return ($prazo <= -2);
	}

	/*METODOS PRIVADOS FIM*/

	/*RELACIONAMENTOS*/
	public function agencia()
	{
		return $this->belongsTo(Agencia::class);
	}

	public function agenciaOrigem()
	{
		return $this->belongsTo(Agencia::class, 'agencia_origem_id');
	}

	public function canal()
	{
		return $this->belongsTo(Canal::class);
	}
	public function origin()
	{
		return $this->belongsTo(Origin::class);
	}

	public function thematic()
	{
		return $this->belongsTo(Thematic::class);
	}

	public function user_cadastro()
	{
		return $this->belongsTo(User::class, 'user_cadastro_id', 'id');
	}

	public function user_analista()
	{
		return $this->belongsTo(User::class, 'user_analista_id', 'id');
	}

	public function user_elo()
	{
		return $this->belongsTo(User::class, 'user_elo_id', 'id');
	}

	public function documentoSerProduzido()
	{
		return $this->belongsTo(DocumentoTipo::class, 'documento_tipo_ser_produzido_id', 'id');
	}

	public function documentos()
	{	
		if(auth()->user()->hasRole('elo'))
		{
			$lista = DocumentoTipo::produzidosELoPodeVer()->map(function ($doc) {
				return $doc->id;
			})->toArray();


			$entrada = DocumentoTipo::tiposEntrada()->map(function ($doc) {
				return $doc->id;
			})->toArray();
			
			return $this->belongsToMany(Documento::class)->whereIn('documento_tipo_id', collect($lista)->merge($entrada));
		}
		else
		{
			return $this->belongsToMany(Documento::class);
		}
	}

	public function difusao()
	{
		return $this->belongsToMany(Protocolo::class, 'difusao_protocolo', 'protocolo_in_id','protocolo_out_id')->withoutGlobalScopes();
	}

	public function difundidoDe()
	{
		return $this->belongsToMany(Protocolo::class, 'difusao_protocolo','protocolo_out_id', 'protocolo_in_id')->withoutGlobalScopes()->first();
	}

	public function foiDifundido()
	{
		return ($this->difusao->count() > 0);
	}

	public function deDifusao()
	{
		return !is_null($this->difundidoDe());
	}

	public function estagio()
	{
		return $this->belongsTo(Estagio::class);
	}

	public function historicoMovimentacao($inverso = 'desc')
	{
		return $this->hasMany(ComentarioProtocolo::class)->orderBy('created_at', $inverso);
	}

	public function pessoas()
	{
		return $this->belongsToMany(Individuo::class, 'individuo_protocolo', 'protocolo_id', 'individuo_id')->using(IndividuoProtocolo::class);
	}

	public function contraInteligencia(){
		return $this->hasOne(ContraInteligencia::class, 'protocolo_id', 'id');
	}

	/*RELACIONAMENTOS FIM*/
}
