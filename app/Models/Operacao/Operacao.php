<?php

namespace App\Models\Operacao;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use App\Models\Protocolo\Estagio;
use App\Models\Management\Cidade;
use App\Models\Gestao\Efetivo\User;
use Illuminate\Support\Collection;
use App\Models\Protocolo\Documento;
use App\Models\Individuo\Individuo;
use App\Models\Individuo\IndividuoOperacao;
use App\Models\Ocorrencia\Ocorrencia;
use Carbon\Carbon;
use \Fico7489\Laravel\Pivot\Traits\PivotEventTrait;

class Operacao extends Model
{
	use SoftDeletes, \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity, \Fico7489\Laravel\Pivot\Traits\PivotEventTrait;

	public const STATUS_ATIVA 		= 0;
	public const STATUS_FINALIZADA 	= 1;

	protected $fillable = [
		'user_cadastro_id',
		'nome',
		'cidade_id',
		'vara',
		'juiz',
		'promotor',
		'data_inicio',
		'data_termino',
		'resumo',
		'status',
	];

	protected $dates = [
		'data_inicio',
		'data_termino'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'operacao';

	protected $appends = ['perfil', 'id_nome'];

	public function getIdNomeAttribute()
	{
		$nome = '#'.$this->id.' '.$this->nome;
		
		return $nome;
	}
	
	public function canEdit()
	{
		return auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local') && $this->isAtiva();
	}

	public function isAtiva()
	{
		return $this->status == self::STATUS_ATIVA;
	}

	public static function ativas()
	{
		return self::where('status', self::STATUS_ATIVA)->get();
	}

	public static function finalizadas()
	{
		return self::where('status', self::STATUS_FINALIZADA)->get();
	}

	public static function buscar($request)
	{
		if($request->has('incluir_finalizados'))
			$busca = self::where('status', '<=', self::STATUS_FINALIZADA);

		elseif($request->has('so_finalizados'))
			$busca 	= self::where('status', '=', self::STATUS_FINALIZADA);

		else
			$busca 	= self::where('status', '=', self::STATUS_ATIVA);

		if($request->has('keyword') && !empty($request->keyword))
		{
			$busca 	= $busca->where(function($query) use ($request)
			{
				if($request->has('resumo'))
					$query = $query->orWhere('resumo', 'LIKE', '%'.$request->keyword.'%');

				if($request->has('nome'))
					$query = $query->orWhere('nome', 'LIKE', '%'.$request->keyword.'%');
			});
		}
		
		if($request->has('periodo_de') && !empty($request->periodo_de))
			$busca = $busca->where('data_inicio', '>=', getCarbonDate($request->periodo_de)->startOfDay());

		if($request->has('incluir_finalizados') && $request->has('periodo_ate') && !empty($request->periodo_ate))
		{
			$busca 	= $busca->where(function($query) use ($request)
			{
				$query = $query->whereNull('data_termino');
				$query = $query->orWhere('data_termino', '<=', getCarbonDate($request->periodo_ate)->endOfDay());
			});
			
		}

		if($request->has('cidade_id'))
			$busca 		= $busca->where('cidade_id', $request->cidade_id);

		if($request->has('juiz') && !empty($request->juiz))
			$busca 		= $busca->where('juiz', 'LIKE', '%'.$request->juiz.'%');

		if($request->has('promotor') && !empty($request->promotor))
			$busca 		= $busca->where('promotor', 'LIKE', '%'.$request->promotor.'%');
		
		$busca 		= $busca->get();
		
		return $busca;
	}

	public function terminar()
	{
		$this->status 		= self::STATUS_FINALIZADA;
		$this->data_termino = Carbon::now();
		$this->save();
	}

	public function reabrir()
	{
		$this->status 		= self::STATUS_ATIVA;
		$this->data_termino = null;
		$this->save();
	}

	/* RELACIONAMENTOS */
	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function user_cadastro()
	{
		return $this->belongsTo(User::class, 'user_cadastro_id', 'id');
	}

	public function missoes()
	{
		return $this->hasMany(MissaoOperacao::class);
	}

	public function documentos()
	{
		return $this->belongsToMany(Documento::class, 'documento_operacao', 'operacao_id', 'documento_id');
	}

	public function alvos()
	{
		return $this->belongsToMany(Individuo::class, 'individuo_operacao', 'operacao_id', 'individuo_id')->using(IndividuoOperacao::class);
	}

	public function ocorrencias()
	{
		return $this->hasMany(Ocorrencia::class);
	}

	public function missoesPorEstagio()
	{
		$estagios 			= Estagio::estagiosOperacao();
		
		foreach ($estagios as $key => $estagio)
		{
			$estagio->missoes = $this->missoes()->where('estagio_id', $estagio->id)->get();
		}

		return $estagios;
	}

	public function missoesFinalizadas()
	{
		return $this->missoes()->where('estagio_id', Estagio::finalizado()->id)->get();
	}
	/* FIM RELACIONAMENTOS */
}
