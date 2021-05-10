<?php

namespace App\Models\Protocolo;

use App\Models\Model;
use App\Models\Protocolo\Protocolo;
use App\Models\Operacao\Operacao;
use App\Models\Management\DocumentoTipo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use File;
use App\Models\Gestao\Efetivo\User;
use App\Models\Gestao\Agencia\Agencia;

class Documento extends Model
{
	use \Balping\HashSlug\HasHashSlug;
	protected $fillable = [
		'agencia_id',
		'user_id',
		'numero',
		'documento_tipo_id',
		'arquivo',
	];

	protected static function booted()
	{
		static::addGlobalScope(new \App\Scopes\AgenciaScope);
	}

	public function agencia()
	{
		return $this->belongsTo(Agencia::class);
	}

	public function documentoTipo()
	{
		return $this->belongsTo(DocumentoTipo::class);
	}

	public function protocolo()
	{
		return $this->belongsToMany(Protocolo::class);
	}

	public function operacao()
	{
		return $this->belongsToMany(Operacao::class);
	}

	public static function deletarArquivo(Documento $documento)
	{
		if(File::exists(public_path($documento->arquivo)))
			File::delete(public_path($documento->arquivo));
	}

	public static function buscar($request)
	{
		$busca 	= self::whereNotNull('documento_tipo_id');

		if($request->has('so_produzidos'))
		{
			$produzidos = DocumentoTipo::tiposProduzido(false)->pluck('id');
			$busca 		= $busca->whereIn('documento_tipo_id', $produzidos);
		}

		if($request->has('documento_tipo_id') && !empty($request->documento_tipo_id))
			$busca 		= $busca->where('documento_tipo_id', $request->documento_tipo_id);

		if($request->has('periodo_de') && !empty($request->periodo_de))
			$busca 		= $busca->where('created_at', '>=', getCarbonDate($request->periodo_de)->startOfDay());

		if($request->has('periodo_ate') && !empty($request->periodo_ate))
			$busca 		= $busca->where('created_at', '<=', getCarbonDate($request->periodo_ate)->endOfDay());

		$busca 			= $busca->get();

		return $busca;
	}

	public function canEdit()
	{
		$regraRole 	= auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto');
		$regraAutor = (auth()->user()->id == $this->user_id);

		return  ($regraRole || $regraAutor);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public static function getDocumentoParaClone($slug)
	{
		return self::withoutGlobalScope(\App\Scopes\AgenciaScope::class)
		->find(self::decodeSlug($slug));
	}

	public function canElo()
	{
		if(auth()->user()->hasRole('elo'))
		{
			$produzidosELoPodeVer = DocumentoTipo::produzidosELoPodeVer()->map(function ($doc) {
				return $doc->id;
			})->toArray();

			$entradaELoPodeVer = DocumentoTipo::tiposEntrada();

			if($this->documentoTipo->isTipoProduzido() && $this->user_id == auth()->user()->id)
				return true;
			
			elseif($this->documentoTipo->isTipoProduzido() && in_array($this->documentoTipo->id, $produzidosELoPodeVer))
				return true;

			elseif($this->documentoTipo->isTipoEntrada() && $this->user_id == auth()->user()->id)
				return true;

			return false;
		}
		else
			return true;
	}
}
