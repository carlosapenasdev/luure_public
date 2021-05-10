<?php

namespace App\Models\Protocolo;

use App\Models\Model;
use App\Models\Protocolo\Protocolo;
use App\Models\Gestao\Efetivo\User;
use App\Models\Comentario;

class ComentarioProtocolo extends Model
{
	use \Balping\HashSlug\HasHashSlug;
	public const IS_USER 	= 0;
	public const IS_SISTEMA = 1;

	protected $fillable = [
		'comentario_id',
		'protocolo_id',
		'estagio_atual_id',
		'estagio_destino_id',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	public static function comentar($data)
	{
		$comentario = Comentario::create($data);
		$data['comentario_id'] = $comentario->id;

		return self::create($data);
	}

	public function comentario()
	{
		return $this->belongsTo(Comentario::class);
	}

	public function protocolo()
	{
		return $this->belongsTo(Protocolo::class);
	}

	public function estagio_atual()
	{
		return $this->belongsTo(Estagio::class, 'estagio_atual_id', 'id');
	}

	public function estagio_destino()
	{
		return $this->belongsTo(Estagio::class, 'estagio_destino_id', 'id');
	}
}
