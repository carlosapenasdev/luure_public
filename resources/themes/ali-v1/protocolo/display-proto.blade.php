<div class="width-80 left">
	<a href="{{route('protocolo.show', $proto->slug())}}" class="width-100 left">
		<span class="width-100 left link-pmpr">#{{$proto->id}} - {{$proto->assunto_principal}}</span>
		
		@if(!is_null($proto->agenciaOrigem))
		<span class="task-cat chip-agencia-protocolo"">{{$proto->agenciaOrigem->nome}}</span>
		@endif

		<span class="task-cat light-blue darken-4">{{$proto->thematic->motif}}</span>
		@if($proto->hasAnalista())
		<span class="task-cat {{$proto->getCorVencimento()}} darken-4">{{$proto->diasParaVencerInverso()}} - {{$proto->prazo_final_formatado}} {{diaSemana($proto->getPrazoFinal())}}</span>
		@endif
	</a>
</div>