@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($thematic))
	<form id="formulario" class="row" method="post" action="{{ route('thematic.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('thematic.update', $thematic->slug()) }}">
		<input type="hidden" name="id" value="{{ $thematic->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="motif" name="motif" value="{{ !isset($thematic) ? old('motif') : $thematic->motif }}" type="text" class="validate" required="required">
			<label for="motif" class="active">{{Lang::get('controller/thematic.field_motif')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection