<?php

namespace App\Models\Protocolo;

use App\Models\Model;
use App\Models\Protocolo\Protocolo;
use App\Models\Gestao\Efetivo\User;
use App\Models\Comentario;
use App\Models\Protocolo\Documento;
use App\Models\Gestao\Agencia\Agencia;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class ContraInteligencia extends Model
{
	use SoftDeletes, \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;

	public const NAO_VALIDADO 	= 0;
	public const VALIDADO 		= 1;

	protected $fillable = [
		'agencia_de_id',
		'user_id',
		'agencia_para_id',
		'protocolo_id',
		'documento_id',
		'assunto_contra',
		'validado',
	];

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'protocolo';

	public static function abertos()
	{
		return self::where('validado', self::NAO_VALIDADO)
		->whereNotNull('documento_id')
		->get();
	}

	public static function abertosSemDestino()
	{
		return self::where('validado', self::NAO_VALIDADO)
		->whereNull('agencia_para_id')
		->whereNotNull('documento_id')
		->get();
	}

	public static function abertosComDestino()
	{
		return self::where('validado', self::NAO_VALIDADO)
		->whereNotNull('agencia_para_id')
		->whereNotNull('documento_id')
		->get();
	}
	
	public static function disparaProtocoloParaCI(Protocolo $protocolo, Documento $documento, $assunto)
	{
		self::create([
			'agencia_de_id' => $protocolo->agencia_id,
			'user_id' 		=> auth()->user()->id,
			'protocolo_id' 	=> $protocolo->id,
			'documento_id' 	=> $documento->id,
			'assunto_contra' => $assunto,
		]);
	}

	public static function retornoProcoloDeDifusao(Protocolo $protocolo, Documento $docRetorno)
	{
		if($protocolo->deDifusao())
		{
			$protoOrigem 		= $protocolo->difundidoDe();

			$contra 			= self::where('protocolo_id', $protocolo->id)
			->where('agencia_de_id', $protocolo->agencia_id)
			->where('agencia_para_id', $protoOrigem->agencia->id)
			->where('validado', self::NAO_VALIDADO)
			->first();

			if(!is_null($contra))
			{
				$contra->user_id			= auth()->user()->id;
				$contra->documento_id 		= $docRetorno->id;
				$contra->save();
			}
		}
	}

	public function isRespondido()
	{
		return !is_null($this->documento_id);
	}

	public function isValidado()
	{
		return $this->validado == self::VALIDADO;
	}

	public function getProtocoloBase()
	{
		if( $this->protocolo->deDifusao())
    		$protocolo = $this->protocolo->difundidoDe();
    	else
    		$protocolo = $this->protocolo;

    	return $protocolo;
	}

	public function agenciaDe()
	{
		return $this->belongsTo(Agencia::class, 'agencia_de_id')->withoutGlobalScopes();
	}

	public function agenciaPara()
	{
		return $this->belongsTo(Agencia::class, 'agencia_para_id')->withoutGlobalScopes();
	}

	public function protocolo()
	{
		return $this->belongsTo(Protocolo::class)->withoutGlobalScopes();
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function documento()
	{
		return $this->belongsTo(Documento::class)->withoutGlobalScopes();
	}
}
