<?php

namespace App\Models\Individuo;

use App\Models\Model;
use App\Models\Individuo\Individuo;
use App\Models\Management\Estado;
use App\Models\Management\Cidade;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class EnderecoIndividuo extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;

	protected $fillable = [
		'individuo_id'
		,'estado_id'
		,'cidade_id'
		,'rua'
		,'numero'
		,'bairro'
		,'observacao'
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'individuo';

	public function individuo()
	{
		return $this->belongsTo(Individuo::class);
	}

	public function estado()
	{
		return $this->belongsTo(Estado::class);
	}

	public function cidade()
	{
		return $this->belongsTo(Cidade::class);
	}

}
