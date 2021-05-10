<?php

namespace App\Models\Management;

use App\Models\Model;
use App\Models\Management\DocumentoNumero;
use Lang;
use Carbon\Carbon;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class DocumentoTipo extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'nome',
		'changeable',
		'tipo',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'management';


	private const IS_CHANGEABLE = 1;
	private const TIPO_ENTRADA = 0;
	private const TIPO_PRODUZIDO = 1;

	protected $appends = ['tipo_string'];

	public function getTipoStringAttribute()
	{
		return $this->tipo == 0 ? Lang::get('controller/documentotipo.tipo_0') : Lang::get('controller/documentotipo.tipo_1');
	}

	public function isTipoEntrada()
	{
		return $this->tipo == self::TIPO_ENTRADA;
	}

	public function isTipoProduzido()
	{
		return $this->tipo == self::TIPO_PRODUZIDO;
	}

	public static function entradaELoPodeVer()
	{
		$ordemBuscaID 		= self::ordemBusca();
		$relatorioBuscaID 	= self::relatorioBusca();
		$parteID 			= self::parte();

		return collect([$ordemBuscaID, $relatorioBuscaID, $parteID]);
	}

	public static function produzidosELoPodeVer()
	{
		$ordemBuscaID 		= self::ordemBusca();
		$relatorioBuscaID 	= self::relatorioBusca();
		$parteID 			= self::parte();

		return collect([$ordemBuscaID, $relatorioBuscaID, $parteID]);
	}

	public static function tiposEntrada()
	{
		return self::all()->where('tipo', self::TIPO_ENTRADA)->where('changeable', self::IS_CHANGEABLE);
	}

	public static function tiposProduzido($onlyChangeable = true)
	{
		$return = self::all()->where('tipo', self::TIPO_PRODUZIDO);
		
		if($onlyChangeable)
			$return = $return->where('changeable', self::IS_CHANGEABLE);
		
		return $return;
	}

	public static function tiposProduzidoElo()
	{
		$tipos = self::tiposProduzido(false)->filter(function($tipoDocumento)
		{
			if(in_array($tipoDocumento->id, [self::relatorioBusca()->id, self::parte()->id]))
				return $tipoDocumento;
		});

		return $tipos;
	}

	public function isChangeable()
	{
		return $this->changeable == self::IS_CHANGEABLE;
	}

	public static function ordemBusca()
	{
		return self::findOrFail(1);
	}

	public static function parte($hasDocumentoEntrada = false)
	{
		if($hasDocumentoEntrada)
			$id = 3;
		else
			$id = 24;

		return self::findOrFail($id);
	}

	public static function relatorioBusca()
	{
		return self::findOrFail(2);
	}

	public function documentoNumeros()
	{
		return $this->hasMany(DocumentoNumero::class);
	}

	public function ultimoNumero()
	{
		$numero = $this->documentoNumeros->where('ano', Carbon::now()->year)->last();

		if(is_null($numero))
		{
			$numero 					= new DocumentoNumero();
			$numero->documento_tipo_id 	= $this->id;
			$numero->numero 			= 0;
			$numero->ano 				= Carbon::now()->year;
		}
		
		return $numero;
	}

}
