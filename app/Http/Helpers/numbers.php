<?php

function floatToBd($number)
{
	$number = str_replace('.', '', $number);
	$number = str_replace(',', '.', $number);

	return $number;
}

function float3FromBd($number)
{
	$number = number_format($number, 3, ',', '.');

	return $number;
}

function floatFromBd($number)
{
	$number = number_format($number, 2, ',', '.');

	return $number;
}