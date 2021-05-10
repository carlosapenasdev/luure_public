<?php

namespace App\Models\Protocolo;

use App\Models\Model;
use App\Models\Management\Role;
use App\Models\Protocolo\Protocolo;
#use App\Models\Protocolo\StatusEstagio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Estagio extends Model
{
	use \Balping\HashSlug\HasHashSlug;
	protected $fillable = [
		'nome',
		'slug',
		'ordem',
		'interativo',
	];

	public const INTERATIVO_SIM 	= 0;
	public const INTERATIVO_NAO 	= 1;

	public static function administrativo()
	{
		return self::getBySlug('administrativo');
	}

	public static function chefia()
	{
		return self::getBySlug('chefia');
	}

	public static function analista()
	{
		return self::getBySlug('analista');
	}

	public static function elo()
	{
		return self::getBySlug('elo');
	}

	public static function finalizado()
	{
		return self::getBySlug('finalizado');
	}

	public function isAdministrativo()
	{
		return self::administrativo()->slug == $this->slug;
	}

	public function isChefia()
	{
		return self::chefia()->slug == $this->slug;
	}

	public function isAnalista()
	{
		return self::analista()->slug == $this->slug;
	}

	public function isElo()
	{
		return self::elo()->slug == $this->slug;
	}

	public function isFinalizado()
	{
		return self::finalizado()->slug == $this->slug;
	}

	public static function estagiosInterativos()
	{
		return self::where('interativo', self::INTERATIVO_SIM)->orderBy('ordem', 'asc')->get();
	}

	public static function estagiosOperacao()
	{
		return self::where('slug', self::analista()->slug)
		->orWhere('slug', self::elo()->slug)
		->orderBy('ordem', 'asc')->get();
	}

	public function getEstagioAnterior()
	{
		return self::where('ordem', ($this->ordem-1))->first();
	}

	public function getEstagioProximo()
	{
		return self::where('ordem', ($this->ordem+1))->first();
	}

	protected static function getBySlug($slug)
	{
		return self::where('slug', $slug)->first();
	}


	/*RELACIONAMENTOS*/

	public function protocolos()
	{
		return $this->hasMany(Protocolo::class);
	}

	public function roles()
	{
		return $this->belongsToMany(Role::class);
	}

	public function users()
	{
		$roles = $this->roles;
		$users = new Collection();
		
		foreach ($roles as $role)
		{
			$users = $users->concat($role->users);
		}

		return $users;
	}
}
