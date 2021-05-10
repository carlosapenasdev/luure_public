@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($regiaoCorpo))
	<form id="formulario" class="row" method="post" action="{{ route('regiao-corpo.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('regiao-corpo.update', $regiaoCorpo) }}">
		<input type="hidden" name="id" value="{{ $regiaoCorpo->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="row">
			<div class="input-field col s12">
				<input id="name" name="name" value="{{ !isset($regiaoCorpo) ? old('name') : $regiaoCorpo->name }}" oninput="this.value = this.value.toUpperCase()" type="text" class="validate" required="required">
				<label for="name" class="active">{{Lang::get('controller/regiaocorpo.field_name')}}*</label>
			</div>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}

<script type="text/javascript">
	
	$( document ).ready(function()
	{
		
	});
</script>


@endsection