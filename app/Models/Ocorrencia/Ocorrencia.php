<?php

namespace App\Models\Ocorrencia;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

use App\Models\Management\Veiculo;
use App\Models\Management\NaturezaCrime;
use App\Models\Individuo\Individuo;
use App\Models\Individuo\IndividuoOcorrencia;
use App\Models\Operacao\Operacao;
use App\Models\Management\Ambiente;
use App\Models\Management\Cidade;
use \Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use Lang;

class Ocorrencia extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity, SpatialTrait, \Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
	protected $fillable = [
		'agencia_id',
		'bou',
		'operacao_id',
		'ambiente_id',
		'cidade_id',
		'bairro',
		'rua',
		'numero',
		'confianca_geo',
		'datahora',
		'descritivo',
	];

	protected $spatialFields = [
		'geolocalizacao'
	];

	protected $dates = [
		'datahora',
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'ocorrencia';

	protected $appends = ['data', 'hora'];

	protected static function booted()
    {
        static::addGlobalScope(new \App\Scopes\AgenciaScope);
    }

	public function getDataAttribute()
	{
		return $this->datahora->format(Lang::get('data.formato_data'));
	}

	public function getHoraAttribute()
	{
		return $this->datahora->format(Lang::get('data.formato_tempo'));
	}

	public function getLongitude()
	{
		return !empty($this->geolocalizacao) ? $this->geolocalizacao->getLng() : '';
	}

	public function getLatitude()
	{
		return !empty($this->geolocalizacao) ? $this->geolocalizacao->getLat() : '';
	}

	public static function buscar($request)
	{

		$busca 	= self::where('bou', '<>', '');

		if($request->has('periodo_de') && !empty($request->periodo_de))
			$busca = $busca->where('datahora', '>=', getCarbonDate($request->periodo_de)->startOfDay());

		if($request->has('periodo_ate') && !empty($request->periodo_ate))
			$busca = $busca->where('datahora', '<=', getCarbonDate($request->periodo_ate)->endOfDay());

		if($request->has('operacao_id') && !empty($request->operacao_id))
			$busca 		= $busca->where('operacao_id', $request->operacao_id);

		if($request->has('ambiente_id') && !empty($request->ambiente_id))
			$busca 		= $busca->where('ambiente_id', $request->ambiente_id);

		if($request->has('cidade_id') && !empty($request->cidade_id))
			$busca 		= $busca->where('cidade_id', $request->cidade_id);

		if($request->has('keyword') && !empty($request->keyword))
			$busca 		= $busca->where('descritivo', 'LIKE', '%'.$request->keyword.'%');

		if($request->has('bou') && !empty($request->bou))
			$busca 		= $busca->where('bou', $request->bou);

		if($request->has('natureza') && !empty($request->natureza))
		{
			$busca 		= $busca->whereHas('crimes', function ($query) use ($request) {
				$query->whereIn('id', [$request->natureza]);
			});
		}

		if($request->has('individuo') && !empty($request->individuo))
		{
			$busca 		= $busca->whereHas('presos', function ($query) use ($request) {
				$query->whereIn('id', [$request->individuo]);
			});
		}

		if($request->has('marcamodelo') && !empty($request->marcamodelo) || $request->has('placa') && !empty($request->placa) || $request->has('chassi') && !empty($request->chassi))
		{
			$veiculos 		= Veiculo::whereNotNull('placa')
			->where(function($query) use ($request)
			{
				if($request->has('marcamodelo') && !empty($request->marcamodelo))
					$query = $query->where('marcamodelo', 'LIKE', '%'.$request->marcamodelo.'%');
				
				if($request->has('placa') && !empty($request->placa))
					$query = $query->where('placa', 'LIKE', '%'.$request->placa.'%');
				
				if($request->has('chassi') && !empty($request->chassi))
					$query = $query->where('chassi', 'LIKE', '%'.$request->chassi.'%');
			})->get();

			if($veiculos->count() > 0)
			{
				$veiculos 	= $veiculos->plucK('id', 'id')->toArray();
				
			}
			
			$busca 		= $busca->whereHas('veiculos', function ($query) use ($veiculos) {
				$query->whereIn('id', $veiculos);
			});
		}

		$busca 		= $busca->get();
		
		return $busca;
	}

	public function ambiente()
	{
		return $this->belongsTo(Ambiente::class);
	}

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

	public function operacao()
	{
		return $this->belongsTo(Operacao::class);
	}

	public function veiculos()
	{
		return $this->belongsToMany(Veiculo::class, 'ocorrencia_veiculos', 'ocorrencia_id', 'veiculo_id');
	}

	public function crimes()
	{	
		return $this->belongsToMany(NaturezaCrime::class);
	}

	public function presos()
	{
		return $this->belongsToMany(Individuo::class, 'individuo_ocorrencia', 'ocorrencia_id', 'individuo_id')->using(IndividuoOcorrencia::class);
	}
}
