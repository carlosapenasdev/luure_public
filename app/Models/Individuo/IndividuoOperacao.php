<?php

namespace App\Models\Individuo;

use Illuminate\Database\Eloquent\Relations\Pivot;

class IndividuoOperacao extends Pivot
{
	public static function boot()
	{
		parent::boot();

		$events = ['retrieved', 'updating', 'updated'];

		foreach($events as $event) {
			static::$event(function ($item) use ($event)
			{
				dd($event, $item);
			});
		}

		static::created(function ($item)
		{
			$individuo 							= $item->individuo;
			$data['comentario']['lang'] 		= 'controller/individuo.is_alvo_operacao';
			$data['comentario']['operacao_id'] 	= $item->operacao_id;

			$comentario 						= $individuo->comentar($data);

		});

		static::deleted(function ($item)
		{
			$individuo 							= $item->individuo;
			$data['comentario']['lang'] 		= 'controller/individuo.is_not_alvo_operacao';
			$data['comentario']['operacao_id'] 	= $item->operacao_id;

			$comentario 						= $individuo->comentar($data);

		});

	}

	public function individuo() {
		return $this->belongsTo(Individuo::class);
	}
}
