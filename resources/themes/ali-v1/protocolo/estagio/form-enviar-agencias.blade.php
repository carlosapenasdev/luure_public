@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.despachar', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		<input type="hidden" name="enviar_agencias" value="1" />
		@method('PUT')
		@csrf
		
		<div id="areaRELBUSCA">

			<div class="row">
				<div class="input-field col s12">
					<textarea  maxlength="2000" data-length="2000" id="assunto" name="assunto" class="materialize-textarea validate" required="required">{{ !isset($protocolo) ? old('assunto') : $protocolo->assunto_principal }}</textarea>
					<label for="assunto" class="active">@lang('controller/protocolo.field_assunto_principal')*</label>
				</div>
			</div>
			
			<div class="row mb-1">
				<div class="input-field col s12">
					<input id="dias_prazo_protocolo" name="dias_prazo_protocolo" value="{{ !isset($protocolo) ? old('dias_prazo_protocolo') : $protocolo->dias_prazo_protocolo }}" type="number" min="0" max="365" class="validate" required="required">
					<label for="dias_prazo_protocolo" class="active">@lang('controller/protocolo.field_dias_prazo_protocolo')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 area-select-multiple">
					<select name="agencias[]" id="agencias[]" class="no-formSelect select-buscavel-multiple validate" required="required" data-placeholder="@lang('common.select')" multiple="multiple">

						@foreach($agencias as $agencia)
						<option value="{{$agencia->id}}" class="@if($agencia->isAri()) agencia-ari @else agencia-ali @endif">{{$agencia->nome}}</option>
						@endforeach

					</select>
					<label class="label-select2 label-select2-multiple">@lang('controller/agencia.name')*</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<a class="waves-effect waves-light btn mr-1 grey darken-1 select2Todos">@lang('common.todas')</a>
					<a class="waves-effect waves-light btn mr-1 grey darken-1 select2Nenhum">@lang('common.nenhuma')</a>
					<a class="waves-effect waves-light btn mr-1 grey darken-1 select2Ari">@lang('controller/protocolo.aris')</a>
					<a class="waves-effect waves-light btn mr-1 grey darken-1 select2Ali">@lang('controller/protocolo.alis')</a>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					@php
						$documentos = $protocolo->documentos;
						$onlyWithFile = true;
					@endphp

					@include('layouts/partials/documentos')
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


{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}

@include('layouts/partials/dropify')

<script type="text/javascript">
	$(function() {
		$('.select2Ari').click(function() {
			$('.select-buscavel-multiple').toArray().forEach(function(field)
			{
				selecionarEspecifico(field, ".agencia-ari");
			});
		});

		$('.select2Ali').click(function() {
			$('.select-buscavel-multiple').toArray().forEach(function(field)
			{
				selecionarEspecifico(field, ".agencia-ali");
			});
		});
	});

</script>

@endsection