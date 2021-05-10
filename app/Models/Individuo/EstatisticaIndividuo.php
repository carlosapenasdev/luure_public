<?php

namespace App\Models\Individuo;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EstatisticaIndividuo extends Pivot
{
	public static function boot()
	{
		parent::boot();

		static::created(function ($item)
		{
			$individuo 								= $item->individuo;
			$data['comentario']['lang'] 			= 'controller/individuo.is_preso_estatistica';
			$data['comentario']['estatistica_id'] 	= $item->estatistica_id;

			$comentario 							= $individuo->comentar($data);

		});

		static::deleted(function ($item)
		{
			$individuo 								= $item->individuo;
			$data['comentario']['lang'] 			= 'controller/individuo.is_not_preso_estatistica';
			$data['comentario']['estatistica_id'] 	= $item->estatistica_id;

			$comentario 							= $individuo->comentar($data);

		});

	}

	public function individuo() {
		return $this->belongsTo(Individuo::class);
	}
}
