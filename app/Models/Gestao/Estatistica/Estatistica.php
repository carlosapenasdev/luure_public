<?php

namespace App\Models\Gestao\Estatistica;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

use App\Models\Gestao\Estatistica\AcaoEstatistica;
use App\Models\Gestao\Estatistica\NaturezaEstatistica;
use App\Models\Gestao\Estatistica\OrigemEstatistica;
use Illuminate\Support\Collection;
use App\Models\Operacao\Operacao;
use Illuminate\Http\Request;

use App\Models\Individuo\Individuo;
use App\Models\Individuo\EstatisticaIndividuo;
use \Fico7489\Laravel\Pivot\Traits\PivotEventTrait;
use App\Models\Gestao\Agencia\Agencia;

class Estatistica extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity, \Fico7489\Laravel\Pivot\Traits\PivotEventTrait;

	protected $fillable = [
		'agencia_id',
		'acao_estatistica_id',
		'natureza_estatistica_id',
		'origem_estatistica_id',
		'data',
		'operacao_id',
		'documentacao',
		'numero_boletim',
		'pessoas_detidas',
		'maconha',
		'maconha_planta',
		'crack',
		'cocaina',
		'lsd',
		'ecstasy',
		'revolver',
		'pistola',
		'garrucha',
		'espingarda',
		'carabina',
		'municoes',
		'dinheiro',
		
		'veiculo_fr',
		'veiculo_transito',
		'veiculo_ocorrencia',
		'celulares',
		'balancas',
		'outros',
	];

	protected $dates = [
		'data',
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'management';

	protected static function booted()
	{
		static::addGlobalScope(new \App\Scopes\AgenciaScope);
	}

	public function getMaconhaAttribute($value)
	{
		return float3FromBd($value);
	}

	public function getCrackAttribute($value)
	{
		return float3FromBd($value);
	}

	public function getCocainaAttribute($value)
	{
		return float3FromBd($value);
	}

	public function getdinheiroAttribute($value)
	{
		return floatFromBd($value);
	}

	public function acao_estatistica()
	{
		return $this->belongsTo(AcaoEstatistica::class);
	}

	public function natureza_estatistica()
	{
		return $this->belongsTo(NaturezaEstatistica::class);
	}

	public function origem_estatistica()
	{
		return $this->belongsTo(OrigemEstatistica::class);
	}

	public function agencia()
	{
		return $this->belongsTo(Agencia::class);
	}

	public function operacao()
	{
		return $this->belongsTo(Operacao::class);
	}

	public function presos()
	{
		return $this->belongsToMany(Individuo::class, 'estatistica_individuo', 'estatistica_id', 'individuo_id')->using(EstatisticaIndividuo::class);
	}

	public static function totaisApreensao(Request $request = null)
	{
		if(is_null($request))
		{
			$request = new Request();
			
			$request->merge([
				'periodo_de' => '01/01/'.date('Y')
			]);
		}

		$estatisticas = self::buscar($request);

		$retorno = new Collection();

		$retorno->put('pessoas_detidas', $estatisticas->sum('pessoas_detidas'));
		$retorno->put('pessoas_detidas', $estatisticas->sum('pessoas_detidas'));
		$retorno->put('maconha_planta', $estatisticas->sum('maconha_planta'));
		$retorno->put('revolver', $estatisticas->sum('revolver'));
		$retorno->put('pistola', $estatisticas->sum('pistola'));
		$retorno->put('garrucha', $estatisticas->sum('garrucha'));
		$retorno->put('espingarda', $estatisticas->sum('espingarda'));
		$retorno->put('carabina', $estatisticas->sum('carabina'));
		$retorno->put('municoes', $estatisticas->sum('municoes'));
		$retorno->put('lsd', $estatisticas->sum('lsd'));
		$retorno->put('ecstasy', $estatisticas->sum('ecstasy'));
		
		$retorno->put('veiculo_fr', $estatisticas->sum('veiculo_fr'));
		$retorno->put('veiculo_transito', $estatisticas->sum('veiculo_transito'));
		$retorno->put('veiculo_ocorrencia', $estatisticas->sum('veiculo_ocorrencia'));

		$retorno->put('celulares', $estatisticas->sum('celulares'));
		$retorno->put('balancas', $estatisticas->sum('balancas'));


		$maconha 	= 0;
		$crack 		= 0;
		$cocaina 	= 0;
		$dinheiro 	= 0;

		foreach ($estatisticas as $estatistica)
		{
			$maconha 	+= floatToBd($estatistica->maconha);
			$crack 		+= floatToBd($estatistica->crack);
			$cocaina 	+= floatToBd($estatistica->cocaina);
			$dinheiro 	+= floatToBd($estatistica->dinheiro);
		}

		$retorno->put('maconha', float3FromBd($maconha));
		$retorno->put('crack', float3FromBd($crack));
		$retorno->put('cocaina', float3FromBd($cocaina));
		$retorno->put('dinheiro', 'R$ '.floatFromBd($dinheiro));
		
		$retorno->put('mp', count($estatisticas->where('natureza_estatistica_id', NaturezaEstatistica::mp()->id)));
		$retorno->put('mba', count($estatisticas->where('natureza_estatistica_id', NaturezaEstatistica::mba()->id)));
		$retorno->put('mpMba', count($estatisticas->where('natureza_estatistica_id', NaturezaEstatistica::mpMba()->id)));

		return $retorno;
	}

	public static function anos()
	{
		$anos  = self::orderBy('data', 'desc')->pluck('data')->map(function ($data)
		{
			return $data->format('Y');
		})->unique();

		if(!$anos->contains(date('Y')))
			$anos->prepend(date('Y'));
		
		return $anos->count() == 0 ? collect([date('Y')]) : $anos;
	}

	public static function buscar($request)
	{
		$busca 	= self::whereNotNull('id');
		
		if($request->has('periodo_de') && !empty($request->periodo_de))
			$busca = $busca->where('data', '>=', getCarbonDate($request->periodo_de)->startOfDay());

		if($request->has('periodo_ate') && !empty($request->periodo_ate))
			$busca = $busca->where('data', '<=', getCarbonDate($request->periodo_ate)->endOfDay());

		if($request->has('acao_estatistica_id'))
			$busca 		= $busca->where('acao_estatistica_id', $request->acao_estatistica_id);

		if($request->has('natureza_estatistica_id'))
			$busca 		= $busca->where('natureza_estatistica_id', $request->natureza_estatistica_id);

		if($request->has('origem_estatistica_id'))
			$busca 		= $busca->where('origem_estatistica_id', $request->origem_estatistica_id);

		if($request->has('operacao_id') && !is_null($request->operacao_id))
			$busca 		= $busca->where('operacao_id', $request->operacao_id);

		$busca 		= $busca->get();

		return $busca;
	}

	public function isOwner()
	{
		return $this->agencia_id == auth()->user()->agencia_id;
	}
}
