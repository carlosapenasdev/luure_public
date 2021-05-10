<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Protocolo\Protocolo;
use App\Models\Gestao\Efetivo\User;

class Comentario extends Model
{
	use \Balping\HashSlug\HasHashSlug;
	public const IS_USER 	= 0;
	public const IS_SISTEMA = 1;

	protected $fillable = [
		'agencia_id',
		'user_id',
		'tipo',
		'descricao',
	];

	public function protocolo()
	{
		return $this->belongsToMany(Protocolo::class);
	}

	public function individuo()
	{
		return $this->belongsTo(Individuo::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
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
