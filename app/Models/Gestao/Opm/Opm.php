<?php

namespace App\Models\Gestao\Opm;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Opm extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'opm_id',
		'nome',
	];

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
		$superior = $this->opmSuperior;
		return (!is_null($superior) ? $superior->nome.' > ' : '').$this->nome;
	}

	public static function opmsChefia()
	{
		return self::whereNull('opm_id')->get();
	}

	public function opmSuperior()
	{
		return $this->belongsTo(Opm::class, 'opm_id');
	}
}
