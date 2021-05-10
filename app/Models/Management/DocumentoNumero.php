<?php

namespace App\Models\Management;

use App\Models\Model;
use App\Models\Protocolo\Documento;
use App\Models\Management\DocumentoTipo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Lang;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class DocumentoNumero extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'agencia_id',
		'documento_id',
		'documento_tipo_id',
		'numero',
		'ano',
	];

    protected static $logFillable 		= true;
    protected static $logOnlyDirty 		= true;
    protected static $submitEmptyLogs 	= false;
    protected static $logName 			= 'management';

	protected static function booted()
    {
        static::addGlobalScope(new \App\Scopes\AgenciaScope);
    }

	public function documentoTipo()
	{
		return $this->belongsTo(DocumentoTipo::class);
	}

	public function documento()
	{
		return $this->belongsToMany(Documento::class);
	}


}
