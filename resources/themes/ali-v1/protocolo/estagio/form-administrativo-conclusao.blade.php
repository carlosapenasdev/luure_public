@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.despachar', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		<input type="hidden" name="conclusao_adm" value="1" />
		@method('PUT')
		@csrf

		<div class="row pt-0 mt-0">
			<div class="input-field col s12 pt-0 m-0">
				<div class="row pl-1 mt-0">
					<div class="col s12">
						<h4 class="grey-text text-darken-1">
							<span class="">
								@lang('controller/protocolo.fim_protocolo', ['protocolo' => $protocolo->id])
							</span>
						</h4>
					</div>
				</div>
			</div>
		</div>
		
		@if($protocolo->deDifusao() || auth()->user()->agencia->isAri()|| auth()->user()->agencia->isAli())
		<div class="row pt-0 mt-0">
			<div class="input-field col s12 pt-0 m-0">
				<div class="row pl-1 mt-0">
					<div class="col s12">
						<span class="left mr-1">
							<i class="material-icons fs8">
								@if( $protocolo->deDifusao())
								call_merge
								@else
								call_split
								@endif
							</i>
						</span>
						<p class="left pt-1 troca">
							<label class="mt-1">
								@if( $protocolo->deDifusao())
								<input type="hidden" name="retorno_difusao" id="retorno_difusao" value="1">
								<input type="checkbox" name="retorno_difusao_disabled" id="retorno_difusao_disabled" checked="checked" disabled="disabled" value="1">
								@else
								<input type="checkbox" name="local_para_ci" id="local_para_ci" value="1" @if(config('app.env') === 'production') disabled="disabled" @endif>
								@endif
								<span> @lang('controller/protocolo.retorno_difusao', ['local' => $agenciaDestinoConclusao->nome]) </span>
							</label>
						</p>
						@if(!auth()->user()->agencia->isAri())
						<p class="left pt-1 troca ml-2">
							<label class="mt-1">
								<input type="checkbox" name="local_para_ari" id="local_para_ari" value="1" @if(config('app.env') === 'production') disabled="disabled" @endif>
								<span> @lang('controller/protocolo.retorno_difusao', ['local' => auth()->user()->agencia->vinculada->nome]) </span>
							</label>
						</p>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endif

		<div class="row" @if(!$protocolo->deDifusao()) style="display: none;" @endif id="area-docs-conclusao">
			@if(!$protocolo->deDifusao())
			<div class="input-field col s12 pt-0 m-0">
				<div class="row pl-1 mt-0">
					<div class="col s12">
						<textarea  maxlength="2000" data-length="2000" id="assunto" name="assunto" class="materialize-textarea">{{ !isset($protocolo) ? old('assunto') : '' }}</textarea>
						<label for="assunto" class="active">@lang('controller/protocolo.field_assunto_principal')*</label>
					</div>
				</div>
			</div>
			@endif
			<div class="input-field col s12">
				@php
				$documentos = $protocolo->documentos;
				$onlyWithFile = true;
				@endphp
				@include('layouts/partials/documentos')
			</div>
		</div>

		<div class="row pt-0 mt-0">
			<div class="input-field col s12 pt-0 m-0">
				<div class="row pl-1 mt-0">
					<div class="col s12">
						<textarea  maxlength="2000" data-length="2000" id="comentario" name="comentario" class="materialize-textarea validate" required="required">{{old('comentario')}}</textarea>
						<label for="comentario" class="active">{{Lang::get('controller/protocolo.field_conclusao_adm')}}*</label>
					</div>
				</div>
			</div>
		</div>


		@include('layouts/partials/form-buttons')
		
		<div class="row padding-1">
			<div class="col s12">
				@include('protocolo/historico-movimentacao')
			</div>
		</div>
	</form>
	
</div>
@endsection

@section('js')

<script type="text/javascript">
	$( document ).ready(function()
	{
		@if(!$protocolo->deDifusao())
		documentosRequired(false)

		$(".troca").find("input[type=checkbox]").on("change",function() {

			let local_para_ari 	= $('#local_para_ari').is(":checked");
			let local_para_ci 	= $('#local_para_ci').is(":checked");

			let estado = (local_para_ci == true  || local_para_ari == true);

			exibeDocs(estado)
			assuntoRequired(estado);
			documentosRequired(estado);
		});
		@endif
	});

	function exibeDocs(estado)
	{
		if(estado)
			$("#area-docs-conclusao").show('slow');
		else
			$("#area-docs-conclusao").hide('slow');
	}

	function assuntoRequired(estado)
	{
		if(estado)
		{
			$("#area-docs-conclusao #assunto").addClass('required validate').show('slow');
		}
		else
		{
			$("#area-docs-conclusao #assunto").removeClass('required validate').hide('slow');
		}
	}

	function documentosRequired(estado)
	{
		$("#area-docs-conclusao [type='radio']").each(function (i)
		{
			if(estado)
				$(this).addClass('required validate');
			else
				$(this).removeClass('required validate');
		});
	}
</script>
@endsection