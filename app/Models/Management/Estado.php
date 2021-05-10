<?php

namespace App\Models\Management;

use App\Models\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

use App\Models\Management\Cidade;

class Estado extends Model
{
	use SoftDeletes, \Balping\HashSlug\HasHashSlug/*, LogsActivity, CausesActivity*/;

	public const DEFAULT = 'paraná';

	protected $fillable = [
		'uf',
		'nome',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	public static function getByUf($uf = 'pr')
	{
		return self::where('uf', strtoupper($uf))->get();
	}

	public static function getDefault()
	{
		return self::whereNome(self::DEFAULT)->first();
	}

	public function cidades()
	{
		return $this->hasMany(Cidade::class)->orderBy('nome');
	}
}
