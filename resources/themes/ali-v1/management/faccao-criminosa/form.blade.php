@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($faccao))
	<form id="formulario" class="row" method="post" action="{{ route('faccao-criminosa.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('faccao-criminosa.update', $faccao) }}">
		<input type="hidden" name="id" value="{{ $faccao->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($faccao) ? old('name') : $faccao->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/faccaocriminosa.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection