<?php

namespace App\Models\Individuo;

use App\Models\Model;
use App\Models\Individuo\Individuo;
use App\Models\Management\PadraoDesenho;
use App\Models\Management\RegiaoCorpo;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class TatuagemIndividuo extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;

	protected $fillable = [
		'individuo_id'
		,'padrao_desenho_id'
		,'regiao_corpo_id'
		,'detalhamento'
		,'tatuagem'
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

	public function padraoDesenho()
	{
		return $this->belongsTo(PadraoDesenho::class);
	}

	public function regiaoCorpo()
	{
		return $this->belongsTo(RegiaoCorpo::class);
	}

    public function getArquivo()
    {
    	return !is_null($this->tatuagem) ? $this->tatuagem : '/upload/empty.jpg';
    }
}
