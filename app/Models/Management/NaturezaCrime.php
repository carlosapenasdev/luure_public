<?php

namespace App\Models\Management;

use App\Models\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use App\Models\Individuo\Individuo;
use App\Models\Ocorrencia\Ocorrencia;

class NaturezaCrime extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'name',
		'codigo',
		'destaque',
		'sesp',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

    protected static $logFillable 		= true;
    protected static $logOnlyDirty 		= true;
    protected static $submitEmptyLogs 	= false;
    protected static $logName 			= 'management';

	protected $appends = ['codigo_name'];

    public function getCodigoNameAttribute()
    {
        return $this->codigo.' | '.$this->name;
    }

    public static function getByCodigo($codigo)
    {
    	return self::where('codigo', $codigo)->first();
    }

    public function isSesp()
    {
    	return $this->sesp == 1;
    }

    public static function listar()
    {
    	return self::orderBy('destaque', 'desc')->orderBy('name', 'asc')->get();
    }

	public function individuos()
	{	
		return $this->belongsToMany(Individuo::class);
	}

	public function ocorrencias()
	{	
		return $this->belongsToMany(Ocorrencia::class);
	}


}
