<div id="modalArchive" class="modal bottom-sheet">

	<div class="modal-content">
		<h4>{{Lang::get('controller/operacao.finalizadas')}}</h4>
		
		<div class="row">
			@php
			$i = 1;
			@endphp
			@foreach($operacao->missoesFinalizadas() as $missaoop)
			<div class="col s12 m4 l4">
				<ul class="collection with-header coluna-estagio">
					<li class="collection-item width-100 left">
						@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
						<a href="{{route('operacao.missaoop.show', [$operacao, $missaoop])}}" class="width-80 left">
							@endrole
							<span class="width-100 left link-pmpr">#{{$missaoop->id}} - {{$missaoop->assunto_principal}}</span>
							{{--<span class="task-cat light-blue darken-4">ABERTO</span>--}}

							<span class="task-cat {{$missaoop->getCorVencimento()}} darken-4">{{$missaoop->diasParaVencerInverso()}} - {{$missaoop->prazo_final_formatado}} {{diaSemana($missaoop->getPrazoFinal())}}</span>
							@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
						</a>
						@endrole
					</li>
				</ul>
			</div>
			@php
			
			$i++;
			
			if($i == 4)
			{
			echo '</div><div class="row">';
				$i = 1;
			}
			@endphp
			@endforeach
		</div>
	</div>
</div>