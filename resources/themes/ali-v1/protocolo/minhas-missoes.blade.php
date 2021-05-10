@extends('layouts/browse')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content" id="conteudo-paramim">
	<div class="row mb-1">
		@include('protocolo/modal-busca')
	</div>
	<div class="row">
		<div class="col s12 m6 l6 offset-m3 offset-l3">
			<ul class="collection with-header coluna-estagio">

				<li class="collection-header grey darken-2">
					<h5 class="task-card-title mb-3 white-text">{{Lang::get('controller/protocolo.paramim')}}</h5>
				</li>

				@foreach($missoes['protocolo'] as $protocolo)
				<li class="collection-item width-100 left">
					<a href="{{route('protocolo.show', $protocolo->slug())}}" class="width-80 left">
						<span class="width-100 left link-pmpr">#{{$protocolo->id}} - {{$protocolo->assunto_principal}} | {{$protocolo->estagio->nome}}</span>
						<span class="task-cat light-blue darken-4">{{$protocolo->thematic->motif}}</span>
						@if($protocolo->hasAnalista())
						<span class="task-cat {{$protocolo->getCorVencimento()}} darken-4">{{$protocolo->diasParaVencerInverso()}} - {{$protocolo->prazo_final_formatado}} {{diaSemana($protocolo->getPrazoFinal())}}</span>
						@endif
					</a>
				</li>
				@endforeach

				@foreach($missoes['operacao'] as $missaoop)
				<li class="collection-item width-100 left">
					<a href="{{route('operacao.missaoop.show', [$missaoop->operacao, $missaoop])}}" class="width-80 left">
						<span class="width-100 left link-pmpr">#{{$missaoop->id}} - {{$missaoop->assunto_principal}} | {{$missaoop->estagio->nome}}</span>
						<span class="task-cat lime darken-3">{{Lang::get('controller/operacao.name_singular').' '.$missaoop->operacao->nome}}</span>
						<span class="task-cat {{$missaoop->getCorVencimento()}} darken-4">{{$missaoop->diasParaVencerInverso()}} - {{$missaoop->prazo_final_formatado}} {{diaSemana($missaoop->getPrazoFinal())}}</span>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
	<div class="row">
		<div class="col s12 m6 l6 offset-m3 offset-l3">
			<ul class="collection with-header coluna-estagio">

				<li class="collection-header grey darken-2">
					<h5 class="task-card-title mb-3 white-text">{{Lang::get('controller/protocolo.paramim_elo')}}</h5>
				</li>

				@foreach($missoesComElo['protocolo'] as $protocolo)
				<li class="collection-item width-100 left">
					<a href="{{route('protocolo.edit', $protocolo->slug())}}" class="width-80 left">
						<span class="width-100 left link-pmpr">#{{$protocolo->id}} - {{$protocolo->assunto_principal}} <br /> {{$protocolo->estagio->nome}}: {{$protocolo->user_elo->name}}</span>
						<span class="task-cat light-blue darken-4">{{$protocolo->thematic->motif}}</span>
						@if($protocolo->hasAnalista())
						<span class="task-cat {{$protocolo->getCorVencimento()}} darken-4">{{$protocolo->diasParaVencerInverso(true)}} - {{$protocolo->prazo_final_formatado}} {{diaSemana($protocolo->getPrazoFinal())}}</span>
						@endif
					</a>
				</li>
				@endforeach

				@foreach($missoesComElo['operacao'] as $missaoop)
				<li class="collection-item width-100 left">
					<a href="{{route('operacao.missaoop.show', [$missaoop->operacao, $missaoop])}}" class="width-80 left">
						<span class="width-100 left link-pmpr">#{{$missaoop->id}} - {{$missaoop->assunto_principal}} | {{$missaoop->estagio->nome}}</span>
						<span class="task-cat lime darken-3">{{Lang::get('controller/operacao.name_singular').' '.$missaoop->operacao->nome}}</span>
						<span class="task-cat {{$missaoop->getCorVencimento()}} darken-4">{{$missaoop->diasParaVencerInverso()}} - {{$missaoop->prazo_final_formatado}} {{diaSemana($missaoop->getPrazoFinal())}}</span>
					</a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	@endrole
</div>
@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

@endsection