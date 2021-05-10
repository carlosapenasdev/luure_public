@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($estabPri))
	<form id="formulario" class="row" method="post" action="{{ route('estabelecimento-prisional.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('estabelecimento-prisional.update', $estabPri) }}">
		<input type="hidden" name="id" value="{{ $estabPri->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s12">
			<input id="name" name="name" value="{{ !isset($estabPri) ? old('name') : $estabPri->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/estabelecimentoprisional.field_name')}}*</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection