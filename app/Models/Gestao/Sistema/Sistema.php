<?php

namespace App\Models\Gestao\Sistema;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sistema extends Model
{
	use SoftDeletes, \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	
	protected $fillable = [
		'name',
		'banner',
		'link',
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
