<?php

namespace App\Models\Gestao\Unidade;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class UnidadeRegular extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'unidade_regular_id',
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
}
