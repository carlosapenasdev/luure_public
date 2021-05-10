@if(config('app.env') !== 'production')
@php

$corBarra 	= 'red';
$localLuure 		= config('app.env');

if(!is_null(auth()->user()))
{
	$localLuure .= ': '.auth()->user()->agencia->nome;

	if(auth()->user()->agencia->isSubsecao() && !auth()->user()->agencia->isContraIn())
	$corBarra = 'blue';

	elseif(auth()->user()->agencia->isAri())
	$corBarra = 'teal';

	elseif(auth()->user()->agencia->isAli())
	$corBarra = 'lime';

	elseif(auth()->user()->agencia->isContraIn())
	$corBarra = 'brown';
}
@endphp
<div class="barra-testes {{$corBarra}} darken-3 center pt-1">
	<span class="white-text strong">{{$localLuure}}</span>
</div>
@endif