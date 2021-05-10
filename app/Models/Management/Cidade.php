<?php

namespace App\Models\Management;

use App\Models\Model;
use App\Models\Ocorrencia\Ocorrencia;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Cidade extends Model
{
	use SoftDeletes, \Balping\HashSlug\HasHashSlug/*, LogsActivity, CausesActivity*/;

	public const DEFAULT = 'ponta grossa';

	protected $fillable = [
		'nome',
		'estado_id',
		'codigoIbge',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	 protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

	public static function getByEstado($estado_id)
	{
		return self::where('estado_id', $estado_id)->orderBy('nome')->get();
	}

	public static function getByCodigoIbge($codigo)
	{
		return self::where('codigoIbge', $codigo)->first();
	}

	public static function getDefault()
	{
		return self::whereNome(self::DEFAULT)->orderBy('nome')->first();
	}

	public function ocorrencias()
	{
		return $this->hasMany(Ocorrencia::class);
	}
}
