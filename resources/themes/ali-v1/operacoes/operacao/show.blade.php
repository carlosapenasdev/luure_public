@extends('layouts/browse')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}
{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content">
	
	@include('operacoes/operacao/show-parts/cabecalho')
	
	@include('operacoes/operacao/show-parts/info')

	@if($operacao->alvos->count() > 0)
	<div class="row padding-1">
		<div class="col s12">
			<h5 class="">{{Lang::get('controller/operacao.field_alvos')}}</h5>

		</div>
	</div>

	<div class="row padding-1">
		@foreach($operacao->alvos as $individuo)
		<div class="col s12 m2 l2 card-width grey lighten-3 reduzir95">
			<div class="card card-border center-align">
				<div class="card-content black-text left width-100">
					<a href="{{route('individuo.show', $individuo)}}" class="width-100 left">
						<span class="width-100 left link-pmpr">
							<img class="responsive-img circle z-depth-4" src="{{url($individuo->perfil)}}" alt="" width="100">
						</span>
						<span class="width-100 left link-pmpr truncate">
							{{$individuo->id_nome}}
						</span>
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif

	@include('operacoes/operacao/show-parts/resumo')

	<hr />
	@php
	$addAnexo = $delDocs = $addDocs = $operacao->canEdit();
	@endphp
	@include('layouts/partials/documentos')
	<hr />

	<div class="row padding-1">
		<div class="col s11">
			<h5 class="">{{Lang::get('controller/operacao.missoes')}}</h5>
		</div>
		<div class="col s1">
			@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
			@if($operacao->canEdit())
			<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4" href="{{route('operacao.missaoop.create', ['operacao' => $operacao])}}" data-position="top" data-tooltip="{{Lang::get('common.bread_insert')}} {{Lang::get('controller/operacao.missao')}}">
				<i class="material-icons">add</i>
			</a>
			@endif
			<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-10 modal-trigger" href="#modalArchive" data-position="top" data-tooltip="{{Lang::get('controller/operacao.finalizadas')}}">
				<i class="material-icons">archive</i>
			</a>
			@endrole
		</div>
	</div>

	<div class="row padding-1">
		<div class="col s12 m2 l2">&nbsp;</div>
		@foreach($operacao->missoesPorEstagio() as $estagio)
		<div class="col s12 m4 l4">
			<ul class="collection with-header coluna-estagio">
				<li class="collection-header grey darken-2">
					<h5 class="task-card-title mb-3 white-text">{{$estagio->nome}}</h5>
				</li>

				@foreach($estagio->missoes as $missaoop)
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
				@endforeach
			</ul>
		</div>
		@endforeach
		<div class="col s12 m2 l2">&nbsp;</div>
	</div>
</div>

@include('operacoes/missao/modal-archive')

@endsection

@section('js')

{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}
{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}


@php
$notDrop = true;
@endphp
@include('layouts/partials/dropify')

<script type="text/javascript">
	commonForm 		= document.getElementById('form-upload-documento');
	commonFormID 	= commonForm.getAttribute('id');
</script>

{!!Theme::js('js/scripts/form-validation.js')!!}

@endsection