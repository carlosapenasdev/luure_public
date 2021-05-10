@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($role))
	<form id="formulario" class="row" method="post" action="{{ route('role.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('role.update', $role->slug()) }}">
		<input type="hidden" name="id" value="{{ $role->id }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($role) ? old('name') : $role->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/role.field_name')}}*</label>
		</div>
		
		<div class="input-field col s12">
			<input id="slug" name="slug" value="{{ !isset($role) ? old('slug') : $role->slug }}" type="text" class="validate" required="required">
			<label for="slug" class="active">{{Lang::get('controller/role.field_slug')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection