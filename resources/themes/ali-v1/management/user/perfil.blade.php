@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($user))
	<form id="formulario" class="row" method="post" action="{{ route('user.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('user.update', $user->slug()) }}">
		<input type="hidden" name="id" value="{{ $user->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($user) ? old('name') : $user->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/user.field_name')}}*</label>
		</div>

		<div class="input-field col s12">
			<input id="email" name="email" value="{{ !isset($user) ? old('email') : $user->email }}" type="text" class="validate" required="required">
			<label for="email" class="active">{{Lang::get('controller/user.field_email')}}*</label>
		</div>

		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection