<div class="row">
	@php
	$i = 1;
	@endphp
	@forelse($operacaos as $operacao)
	<div class="col s12 m4 l4">
		<ul class="collection with-header coluna-estagio">
			<li class="collection-item width-100 left">
				<a href="{{route('operacao.show', $operacao->slug())}}" class="width-80 left">
					<span class="width-100 left link-pmpr">
						#{{$operacao->id}} - {{$operacao->nome}}
					</span>
					
					<p class="black-text sm">
						{{Lang::get('controller/operacao.field_data_inicio')}}: {{formatar_data($operacao->data_inicio)}}
					</p>
					
					@if(!empty($operacao->data_termino))
					<p class="black-text sm">
						{{Lang::get('controller/operacao.field_data_termino')}}: {{formatar_data($operacao->data_termino)}}
					</p>
					@endif
					
					<span class="task-cat light-blue darken-4 mr-3">{{$operacao->cidade->nome}}</span>
				</a>
				<div>
					@if($operacao->isAtiva())
					<form action="{{ route('operacao.terminar', $operacao) }}" method="post">
						{{csrf_field()}}
						<button type="submit" class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-2 mr-1 action-operacao" data-position="top" data-tooltip="{{Lang::get('controller/operacao.finalizar')}}">
							<i class="material-icons">archive</i>
						</button>
					</form>
					@else
					<form action="{{ route('operacao.reabrir', $operacao) }}" method="post">
						{{csrf_field()}}
						<button type="submit" class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-2 mr-1 inverso action-operacao" data-position="top" data-tooltip="{{Lang::get('controller/operacao.reabrir')}}">
							<i class="material-icons">archive</i>
						</button>
					</form>
					@endif
				</div>
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
	@empty
	<h5>{{Lang::get('controller/protocolo.empty')}}</h5>
	@endforelse
</div>