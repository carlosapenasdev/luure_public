<?php

namespace App\Models\Gestao\Estatistica;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class NaturezaEstatistica extends Model
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

    public static function mp()
    {
    	return self::where('id', 1)->first();
    }
    
    public static function mba()
    {
    	return self::where('id', 2)->first();
    }
    
    public static function mpMba()
    {
    	$return = self::where('id', 11)->first();
    	return !is_null($return) ? $return : self::mba();
    }
    
    public static function triadeMp()
    {
    	return collect([self::mp(), self::mba(), self::mpMba()]);
    }
}
