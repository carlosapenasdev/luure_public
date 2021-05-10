<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as LaraModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\CanSaveQuietly;

class Model extends LaraModel
{
	use SoftDeletes, CanSaveQuietly;
	
	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	protected $appends = ['criado_em', 'alterado_em'];

    public function getCriadoEmAttribute()
    {
        return $this->created_at->format('d/m/Y H:i:s');
    }

    public function getAlteradoEmAttribute()
    {
        return $this->updated_at->format('d/m/Y H:i:s');
    }
}