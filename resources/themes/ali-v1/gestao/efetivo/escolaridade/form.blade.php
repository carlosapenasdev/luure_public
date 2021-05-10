@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($escolaridade))
	<form id="formulario" class="row" method="post" action="{{ route('escolaridade.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('escolaridade.update', $escolaridade) }}">
		<input type="hidden" name="id" value="{{ $escolaridade->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($escolaridade) ? old('name') : $escolaridade->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/acaoestatistica.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection