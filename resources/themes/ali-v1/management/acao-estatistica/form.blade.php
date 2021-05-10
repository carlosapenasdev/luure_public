@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($acaoEstatistica))
	<form id="formulario" class="row" method="post" action="{{ route('acao-estatistica.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('acao-estatistica.update', $acaoEstatistica) }}">
		<input type="hidden" name="id" value="{{ $acaoEstatistica->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($acaoEstatistica) ? old('name') : $acaoEstatistica->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/acaoestatistica.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection