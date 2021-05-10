@extends('layouts/browse')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content" id="conteudo-paramim">
	<div class="row">
		<div class="col s6 m6 l6">
			<ul class="collection with-header coluna-estagio">
				<li class="collection-header grey darken-2">
					<h5 class="task-card-title mb-3 white-text">{{Lang::get('controller/contrainteligencia.definido')}}</h5>
				</li>
				@foreach($contrasComDestino as $contra)
				<li class="collection-item width-100 left">
					<div class="width-20 left center">
						<div class="chip chip-agencia-protocolo">{{$contra->agenciaDe->nome}}</div>
					</div>
					<a href="{{route('contrainteligencia.edit', $contra->slug())}}" class="width-60 left">
						<span class="width-100 left link-pmpr">#{{$contra->protocolo->difundidoDe()->id}} - {{$contra->assunto_contra}}</span>
						<span class="task-cat light-blue darken-4">{{$contra->protocolo->difundidoDe()->thematic->motif}}</span>
						<span class="task-cat {{$contra->protocolo->difundidoDe()->getCorVencimento()}} darken-4">{{$contra->protocolo->difundidoDe()->diasParaVencerInverso()}} - {{$contra->protocolo->difundidoDe()->prazo_final_formatado}} {{diaSemana($contra->protocolo->difundidoDe()->getPrazoFinal())}}</span>
					</a>
					<div class="width-20 left center">
						<div class="chip chip-agencia-protocolo">{{$contra->agenciaPara->nome}}</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>

		<div class="col s6 m6 l6">
			<ul class="collection with-header coluna-estagio">
				<li class="collection-header grey darken-2">
					<h5 class="task-card-title mb-3 white-text">{{Lang::get('controller/contrainteligencia.indefinido')}}</h5>
				</li>
				@foreach($contrasSemDestino as $contra)
				<li class="collection-item width-100 left">
					<div class="width-20 left center">
						<div class="chip chip-agencia-protocolo">{{$contra->agenciaDe->nome}}</div>
					</div>
					<a href="{{route('contrainteligencia.edit', $contra->slug())}}" class="width-60 left">
						<span class="width-100 left link-pmpr">#{{$contra->protocolo->id}} - {{$contra->assunto_contra}}</span>
						<span class="task-cat light-blue darken-4">{{$contra->protocolo->thematic->motif}}</span>
						<span class="task-cat {{$contra->protocolo->getCorVencimento()}} darken-4">{{$contra->protocolo->diasParaVencerInverso()}} - {{$contra->protocolo->prazo_final_formatado}} {{diaSemana($contra->protocolo->getPrazoFinal())}}</span>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

@endsection