<?php

namespace App\Models\Gestao\Canal;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Canal extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'name',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'management';

	public const luure_id 				= 1;

	public static function luure()
	{
		return self::where('id', self::luure_id)->first();
	}

}
