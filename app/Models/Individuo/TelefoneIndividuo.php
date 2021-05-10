<?php

namespace App\Models\Individuo;

use App\Models\Model;
use App\Models\Individuo\Individuo;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class TelefoneIndividuo extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;

	protected $fillable = [
		'individuo_id'
		,'telefone'
		,'observacao'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'individuo';

	public function individuo()
	{
		return $this->belongsTo(Individuo::class);
	}
}
