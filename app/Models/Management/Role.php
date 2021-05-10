<?php

namespace App\Models\Management;

use App\Models\Model;
use App\Models\Protocolo\Estagio;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
use App\Models\Gestao\Efetivo\User;

class Role extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'name',
		'slug',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'management';


	public static function root()
	{
		return self::getBySlug('root');
	}

	public static function sysadmin()
	{
		return self::getBySlug('sysadmin');
	}

	public static function chefeSubsecao()
	{
		return self::getBySlug('chefe-subsecao');
	}

	public static function chefeRegional()
	{
		return self::getBySlug('chefe-regional');
	}

	public static function chefeLocal()
	{
		return self::getBySlug('chefe-local');
	}

	public static function chefe()
	{
		$chefe = self::chefeLocal();

		if(is_null($chefe)) $chefe = self::chefeRegional();
		if(is_null($chefe)) $chefe = self::chefeSubsecao();
		if(is_null($chefe)) $chefe = self::getBySlug('chefe');
		
		return $chefe;
	}

	public static function adjunto()
	{
		return self::getBySlug('adjunto');
	}

	public static function administrativo()
	{
		return self::getBySlug('administrativo');
	}

	public static function analista()
	{
		return self::getBySlug("analista");
	}

	public static function analistaLocal()
	{
		return self::getBySlug('analista-local');
	}

	public static function analistaRegional()
	{
		return self::getBySlug('analista-regional');
	}

	public static function analistaSubsecao()
	{
		return self::getBySlug('analista-subsecao');
	}

	public static function elo()
	{
		return self::getBySlug('elo');
	}

	protected static function getBySlug($slug)
	{
		return self::where('slug', $slug)->first();
	}

	public function permissions()
	{
		return $this->belongsToMany(Permission::class,'roles_permissions');
	}

	public function estagios()
	{
		return $this->belongsToMany(Estagio::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class,'users_roles');
	}
}