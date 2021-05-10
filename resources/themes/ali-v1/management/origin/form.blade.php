@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($origin))
	<form id="formulario" class="row" method="post" action="{{ route('origin.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('origin.update', $origin->slug()) }}">
		<input type="hidden" name="id" value="{{ $origin->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($origin) ? old('name') : $origin->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/origin.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection