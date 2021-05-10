<?php

namespace App\Models\Management;

use App\Models\Model;
use App\Models\Ocorrencia\Ocorrencia;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Veiculo extends Model
{
	use \Balping\HashSlug\HasHashSlug, LogsActivity, CausesActivity;
	protected $fillable = [
		'marcamodelo',
		'placa',
		'chassi',
	];

	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected static $logFillable 		= true;
	protected static $logOnlyDirty 		= true;
	protected static $submitEmptyLogs 	= false;
	protected static $logName 			= 'management';

	public static function byUpdateOrCreate($dataVeiculo)
	{
		$veiculo = self::updateOrCreate(
			['chassi' => $dataVeiculo['chassi']],
			['placa' =>  $dataVeiculo['placa']]
		);

		if(isset($dataVeiculo['marcamodelo']) && !empty($dataVeiculo['marcamodelo']))
		{
			$veiculo->marcamodelo =  $dataVeiculo['marcamodelo'];
			$veiculo->save();
		}

		return $veiculo;
	}
	
	public function ocorrencias()
	{
		return $this->belongsToMany(Ocorrencia::class, 'ocorrencia_veiculos', 'veiculo_id', 'ocorrencia_id');
	}
}
