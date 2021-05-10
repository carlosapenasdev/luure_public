@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($documentotipo))
	<form id="formulario" class="row" method="post" action="{{ route('documentotipo.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('documentotipo.update', $documentotipo->slug()) }}">
		<input type="hidden" name="id" value="{{ $documentotipo->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="nome" name="nome" value="{{ !isset($documentotipo) ? old('nome') : $documentotipo->nome }}" type="text" class="validate" required="required">
			<label for="nome" class="active">{{Lang::get('controller/documentotipo.field_nome')}}*</label>
		</div>

		<div class="input-field col s12">
			<div class="select-wrapper">
				<select name="tipo" id="tipo" class="validate" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>
					<option {{ isset($documentotipo) && $documentotipo->tipo == 0 ? 'selected="selected"' : '' }} value="0">{{Lang::get('controller/documentotipo.tipo_0')}}</option>
					<option {{ isset($documentotipo) && $documentotipo->tipo == 1 ? 'selected="selected"' : '' }} value="1">{{Lang::get('controller/documentotipo.tipo_1')}}</option>
				</select>
				<label data-error="Select an option">{{Lang::get('controller/documentotipo.field_tipo')}}*</label>
			</div>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection