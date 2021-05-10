<?php

namespace App\Models\Individuo;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IndividuoOcorrencia extends Pivot
{
	public static function boot()
	{
		parent::boot();

		static::created(function ($item)
		{
			$individuo 								= $item->individuo;
			
			if(!is_null($individuo))
			{
				$data['comentario']['lang'] 			= 'controller/individuo.is_preso_ocorrencia';
				$data['comentario']['ocorrencia_id'] 	= $item->ocorrencia_id;

				$comentario 							= $individuo->comentar($data);
			}
		});

		static::deleted(function ($item)
		{
			$individuo 								= $item->individuo;
			
			if(!is_null($individuo))
			{
				$data['comentario']['lang'] 			= 'controller/individuo.is_not_preso_ocorrencia';
				$data['comentario']['ocorrencia_id'] 	= $item->ocorrencia_id;

				$comentario 							= $individuo->comentar($data);
			}

		});

	}

	public function individuo() {
		return $this->belongsTo(Individuo::class);
	}
}
