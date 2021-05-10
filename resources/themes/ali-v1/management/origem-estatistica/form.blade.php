@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($origemEstatistica))
	<form id="formulario" class="row" method="post" action="{{ route('origem-estatistica.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('origem-estatistica.update', $origemEstatistica) }}">
		<input type="hidden" name="id" value="{{ $origemEstatistica->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($origemEstatistica) ? old('name') : $origemEstatistica->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/origemestatistica.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection