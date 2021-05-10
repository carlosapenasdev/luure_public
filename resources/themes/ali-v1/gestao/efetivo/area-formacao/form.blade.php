@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($areaFormacao))
	<form id="formulario" class="row" method="post" action="{{ route('area-formacao.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('area-formacao.update', $areaFormacao) }}">
		<input type="hidden" name="id" value="{{ $areaFormacao->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($areaFormacao) ? old('name') : $areaFormacao->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/acaoestatistica.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection