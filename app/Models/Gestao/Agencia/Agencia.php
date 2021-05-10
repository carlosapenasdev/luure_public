<?php

namespace App\Models\Gestao\Agencia;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Agencia extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'vinculo_id',
		'usavel',
		'code',
		'nome',
	];

	public const CONTRAIN_CODE 	= 'contrainteligencia';

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'management';

	protected $appends 					= ['nome_completo'];

	public function getNomeCompletoAttribute()
	{
		$vinculada = $this->vinculada;
		return (!is_null($vinculada) ? $vinculada->nome.' > ' : '').$this->nome;
	}

	public static function usaveis()
	{
		return self::where('usavel', 1)->get();
	}

	public function vinculos()
	{
		return $this->hasMany(Agencia::class, 'vinculo_id', 'id');
	}

	public function vinculada()
	{
		return $this->belongsTo(Agencia::class, 'vinculo_id');
	}

	public function isSubsecao()
	{
		$vinculada = $this->vinculada;
		return (!is_null($vinculada) && ($vinculada->id == self::ci()->id));
	}

	public function isAri()
	{
		return is_null($this->vinculada);
	}

	public function isAli()
	{
		$vinculada = $this->vinculada;
		return (!is_null($vinculada) && ($vinculada->id != self::ci()->id));
	}
	
	public function isContraIn()
	{
		return $this->code == self::CONTRAIN_CODE;
	}

	public static function ci()
	{
		return self::where('code', 'ci')->first();
	}

	public static function contrain()
	{
		return self::where('code', self::CONTRAIN_CODE)->first();
	}

	public static function agenciasDistribuicao()
	{
		$agencias = self::where('usavel', '1')
		->where('id', '<>', auth()->user()->agencia_id)
		->where(function($query)
		{
			$query = $query->whereNull('vinculo_id');
			$query = $query->orWhere('vinculo_id', '<>', '1');
		})
		->orderby('vinculo_id', 'ASC')
		->orderby('nome', 'ASC')
		->get();

		return $agencias;
	}
}
