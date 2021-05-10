@extends('layouts/form')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.despachar', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		@method('PUT')
		@csrf

		<div class="row">
			<div class="input-field col s4">
				<select name="user_analista_id" id="user_analista_id" class="no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($users->sortBy('antiguidade') as $user)
					<option {{ ((isset($protocolo) && $protocolo->user_analista_id == $user->id) || (old('user_analista_id') == $user->id) ) ? 'selected="selected"' : '' }} value="{{$user->id}}" data-icon="{{url('/upload/user/profile/avatar-7.png')}}" class="circle">{{$user->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('controller/protocolo.field_user_analista_id')}}*</label>
			</div>
			<div class="input-field col s4">
				<input id="dias_prazo_protocolo" name="dias_prazo_protocolo" value="{{ !isset($protocolo) ? old('dias_prazo_protocolo') : $protocolo->dias_prazo_protocolo }}" type="number" min="0" max="{{$protocolo->deDifusao() ? $protocolo->dias_prazo_protocolo : '365'}}" class="validate" required="required">
				<label for="dias_prazo_protocolo" class="active">{{Lang::get('controller/protocolo.field_dias_prazo_protocolo')}}</label>
			</div>
			<div class="input-field col s4">
				
				<select name="documento_tipo_ser_produzido_id" id="documento_tipo_ser_produzido_id" class="no-formSelect select-buscavel" required="required" @if(!is_null($protocolo->relatorioAnalista())) disabled @endif>
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($documentoTipos->sortBy('nome') as $documentoTipo)
					<option {{ ((isset($protocolo) && $protocolo->documento_tipo_ser_produzido_id == $documentoTipo->id) || (old('documento_tipo_ser_produzido_id') == $documentoTipo->id) ) ? 'selected="selected"' : '' }} value="{{$documentoTipo->id}}">{{$documentoTipo->nome}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('controller/protocolo.field_documento_tipo_ser_produzido_id')}}*</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="necessidades_especificas" name="necessidades_especificas" class="materialize-textarea validate" required="required">{{ !isset($protocolo) ? old('necessidades_especificas') : $protocolo->necessidades_especificas }}</textarea>
				<label for="necessidades_especificas" class="active">{{Lang::get('controller/protocolo.field_necessidades_especificas')}}*</label>
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


{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

@endsection