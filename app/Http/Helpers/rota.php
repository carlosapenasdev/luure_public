<?php
use Illuminate\Support\Facades\Route;

function rotaTemParametro($caminho)
{
	$rota 	= Route::getRoutes()->getByName($caminho);
	dd($rota, Route::has($caminho));
	return $rota->parameters !== null;
}

function indexRota()
{
	$rotaAtual 	= request()->route()->action['as'];
	$index 		= explode('.', $rotaAtual);
	$index 		= array_shift($index);
	$index 		= $index.'.index';

	return $index;
}