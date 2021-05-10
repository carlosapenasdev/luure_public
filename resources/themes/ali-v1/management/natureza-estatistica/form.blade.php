@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($naturezaEstatistica))
	<form id="formulario" class="row" method="post" action="{{ route('natureza-estatistica.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('natureza-estatistica.update', $naturezaEstatistica) }}">
		<input type="hidden" name="id" value="{{ $naturezaEstatistica->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($naturezaEstatistica) ? old('name') : $naturezaEstatistica->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/naturezaestatistica.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection