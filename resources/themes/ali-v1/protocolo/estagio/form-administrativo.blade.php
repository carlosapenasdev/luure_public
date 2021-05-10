@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($protocolo))
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.store') }}" enctype="multipart/form-data">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.update', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		@method('PUT')
		@endif

		@csrf
		<div class="row">
			<div class="input-field col s12">
				<select name="canal_id" id="canal_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($canais->sortBy('name')  as $canal)
					<option {{ ((isset($protocolo) && $protocolo->canal_id == $canal->id) || (old('canal_id') == $canal->id) ) ? 'selected="selected"' : '' }} value="{{$canal->id}}">{{$canal->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('controller/protocolo.field_canal_id')}}*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<select name="origin_id" id="origin_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($origins->sortBy('name') as $origin)
					<option {{ ((isset($protocolo) && $protocolo->origin_id == $origin->id) || (old('origin_id') == $origin->id) ) ? 'selected="selected"' : '' }} value="{{$origin->id}}">{{$origin->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('controller/protocolo.field_origin_id')}}*</label>
			</div>

			<div class="input-field col s6">
				<select name="thematic_id" id="thematic_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($thematics->sortBy('motif')  as $thematic)
					<option {{ ( (isset($protocolo) && $protocolo->thematic_id == $thematic->id) || (old('thematic_id') == $thematic->id) ) ? 'selected="selected"' : '' }} value="{{$thematic->id}}">{{$thematic->motif}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('controller/protocolo.field_thematic_id')}}*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<select name="documento_tipo_id" id="documento_tipo_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($documentoTipos->sortBy('nome')  as $documentoTipo)
					<option {{ ( (isset($protocolo) && $protocolo->documento()->documento_tipo_id == $documentoTipo->id) || (old('documento_tipo_id') == $documentoTipo->id) ) ? 'selected="selected"' : '' }} value="{{$documentoTipo->id}}">{{$documentoTipo->nome}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('common.documento_tipo')}}*</label>
			</div>
			<div class="input-field col s6">
				<input id="numero" name="numero" value="{{ !isset($protocolo) ? old('numero') : $protocolo->documento()->numero }}" type="text">
				<label for="numero" class="active">{{Lang::get('common.numero')}}</label>
			</div>
		</div>
		<div class="row">&nbsp;</div>
		<div class="row">
			<div class="col s12">
				<input type="file" name="arquivo" id="arquivo" class="dropify parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($protocolo) && !empty($protocolo->documento()->arquivo)) default-file="{{url($protocolo->documento()->arquivo)}}" @endif />
			</div>
		</div>
		
		<div class="row">&nbsp;</div>
		@if(isset($protocolo) && !empty($protocolo->documento()->arquivo))
		<div class="row">
			<div class="col s12 center">
				<a class="btn green darken-1 waves-effect waves-light border-round" href="{{url($protocolo->documento()->arquivo)}}" target="_blank">{{Lang::get('common.open_file')}}</a>
			</div>
		</div>
		@endif

		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="assunto_principal" name="assunto_principal" class="materialize-textarea validate" required="required">{{ !isset($protocolo) ? old('assunto_principal') : $protocolo->assunto_principal }}</textarea>
				<label for="assunto_principal" class="active">{{Lang::get('controller/protocolo.field_assunto_principal')}}*</label>
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

@endsection