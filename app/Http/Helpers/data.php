<?php
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;

function formatar_data($data)
{
	$data = getCarbonDate($data);
	return $data->format(Lang::get('data.formato_data'));
}

function formatar_data_tempo($data)
{
	$data = getCarbonDate($data);
	return $data->format(Lang::get('data.formato_data_tempo'));
}

function getCarbonDate($data)
{
	if(is_object($data))
		return $data;

	if(count(explode('/', $data)) > 1)
		return Carbon::createFromFormat(Lang::get('data.formato_data'), $data);
	
	if(hasHora($data))
		$data .= ' 00:00:00';
	return Carbon::createFromFormat('Y-m-d H:i:s', $data);
}

function diaSemana($date)
{
	return is_object($date) ? Lang::get('data.dia_'.$date->dayOfWeek) : '';
}

function hasHora($data)
{
	return (count(explode(':', $data)) == 1);
}

function isDate($string)
{
	return strtotime($string) !== false;
}

function stringIsDate($string, $subHours = false)
{
	if(isDate($string))
	{
		$data = Carbon::parse($string);
		
		if($subHours)
		{
			$gmt = date('T');
			
			if($gmt < 0)
			{
				$data = $data->addHour($gmt);
			}
			else
			{
				$data = $data->subHour($gmt);
			}
		}

		if(hasHora($data))
			return formatar_data($data);
		else
			return formatar_data_tempo($data);
	}
	else
		return $string;
}

function getMeses($buscaMes = null)
{
	$period = CarbonPeriod::create(date('Y').'-01-01', '1 month', date('Y').'-12-31');

	$meses = new Collection();

	
	foreach ($period as $dt)
	{
		$mes = $dt->format("m");

		$meses->put($mes, Lang::get('common.mes_'.$mes));
		
		if(!is_null($buscaMes) && $buscaMes == $mes)
			return Lang::get('common.mes_'.$mes);
	}

	return $meses;
}

function getByDataHora($data, $hora)
{
	$relogio 	= explode(':', $hora);
	$datahora 	= getCarbonDate($data)->startOfDay();

	$datahora->addHours($relogio[0]);
	$datahora->addMinutes($relogio[1]);

	return  $datahora;
}


function getFileNameProtocolo($protocolo)
{
	return str_pad($protocolo->id , 4 , '0' , STR_PAD_LEFT).'_'.date('Y-m-d_H-i-s-U');
}