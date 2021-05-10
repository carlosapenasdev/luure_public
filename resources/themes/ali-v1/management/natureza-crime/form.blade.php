@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($crime))
	<form id="formulario" class="row" method="post" action="{{ route('natureza-crime.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('natureza-crime.update', $crime) }}">
		<input type="hidden" name="id" value="{{ $crime->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="row">
			<div class="input-field col s3">
				<input id="codigo" name="codigo" value="{{ !isset($crime) ? old('codigo') : $crime->codigo }}" type="text" class="validate mask-cod-crime" required="required">
				<label for="codigo" class="active">{{Lang::get('controller/naturezacrime.field_codigo')}}*</label>
			</div>
			<div class="input-field col s7">
				<input id="name" name="name" value="{{ !isset($crime) ? old('name') : $crime->name }}" oninput="this.value = this.value.toUpperCase()" type="text" class="validate" required="required">
				<label for="name" class="active">{{Lang::get('controller/naturezacrime.field_name')}}*</label>
			</div>
			<div class="input-field col s2">
				<label>
					<input type="checkbox" name="destaque" id="destaque" {{ ( isset($crime) && $crime->destaque == 1 ) ? 'checked="checked"' : '' }} value="1">
					<span>{{Lang::get('controller/naturezacrime.field_destaque')}}</span>
				</label>
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
		@if(isset($crime))
		$('#codigo').val('{{$crime->codigo}}');
		@else
		$('#codigo').val('{{old('codigo', '0P2.')}}');
		@endif
	});
</script>


@endsection