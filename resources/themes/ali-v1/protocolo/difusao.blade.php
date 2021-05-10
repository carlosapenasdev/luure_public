<div class="row padding-1">
	<div class="col s10">
		<h5 class="">@lang('controller/protocolo.difusao')</h5>	
	</div>
</div>

<div class="row padding-1">
	@foreach($protocolo->difusao as $proto)

	@if($proto->isDifusaoEntregue())
	<a href="{{url($proto->contrainteligencia->documento->arquivo)}}" target="_blank" class="link-pmpr">
	@endif
		<div class="chip chip-difusao {{$proto->classeStatusContraInteligenciaDifusao()}} tooltipped" data-tooltip="{{$proto->tipDifusao()}}">

			{{$proto->agencia->nome}} <br />
			<span class="task-cat {{$proto->hasAnalista() ? $proto->getCorVencimento() : ''}} lighten-1 white-text ">
				@if($proto->hasAnalista())
				{{$proto->diasParaVencerInverso()}} - {{$proto->prazo_final_formatado}} {{diaSemana($proto->getPrazoFinal())}}
				@else
				<i class="material-icons dossier-icons dp48 red-text text-darken-4">visibility_off</i>
				@endif
			</span>
		</div>

		@if($protocolo->isDifusaoEntregue()) </a> @endif

		@endforeach
	</div>