@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($padraoDesenho))
	<form id="formulario" class="row" method="post" action="{{ route('padrao-desenho.store') }}" enctype="multipart/form-data">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('padrao-desenho.update', $padraoDesenho) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $padraoDesenho->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="row">
			<div class="input-field col s12">
				<input id="name" name="name" value="{{ !isset($padraoDesenho) ? old('name') : $padraoDesenho->name }}" type="text" class="validate" required="required">
				<label for="name" class="active">@lang('controller/padraodesenho.field_name')*</label>
			</div>
		</div>
		<div class="row mb-1">
			<div class="col s12">
				@lang('controller/padraodesenho.field_arquivo'):
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<input type="file" name="arquivo" id="arquivo" class="dropify dropify-crop parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($padraoDesenho) && !empty($padraoDesenho->arquivo)) default-file="{{url($padraoDesenho->arquivo)}}" @endif />
				<input type="hidden" name="arquivo_cropped" class="input_cropped">
			</div>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}
{!!Theme::js('js/custom/modal.js')!!}

@include('layouts/partials/dropify')

<script type="text/javascript">
	
	$(document).ready(function()
	{
		drEvent.input.on('dropify.errors', function(event, element)
		{
			//$(element.input).addClass('validate');
		});
	});
</script>

@endsection