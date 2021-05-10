<?php

namespace App\Models\Management;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Protocolo\Protocolo;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Thematic extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'motif',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

    protected static $logFillable 		= true;
    protected static $logOnlyDirty 		= true;
    protected static $submitEmptyLogs 	= false;
    protected static $logName 			= 'management';    

	public function protocolos()
	{
		return $this->hasMany(Protocolo::class);
	}


}
