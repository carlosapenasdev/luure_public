<?php

namespace App\Models\Management;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Permission extends Model
{	
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;

    protected static $logFillable 		= true;
    protected static $logOnlyDirty 		= true;
    protected static $submitEmptyLogs 	= false;
    protected static $logName 			= 'management';

	public function roles()
	{
		return $this->belongsToMany(Role::class,'roles_permissions');
	}
}