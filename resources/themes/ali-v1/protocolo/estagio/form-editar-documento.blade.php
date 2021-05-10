@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')

<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{url()->current()}}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		@method('post')
		@csrf

		<div id="areaRELBUSCA">

			<div class="row">
				<div class="col s12">
					<input type="file" name="arquivo[]" id="arquivo[]" class="dropify parsley-validated validate" data-max-file-size="{{config('app.uploadLimit')}}" @if(!empty($documento->arquivo)) default-file="{{url($documento->arquivo)}}" @else required="required" @endif />
				</div>
			</div>

			<div class="row">&nbsp;</div>
			@if(isset($protocolo) && !empty($documento->arquivo))
			<div class="row">
				<div class="col s12 center">
					<a class="btn green darken-1 waves-effect waves-light border-round" href="{{url($documento->arquivo)}}" target="_blank">{{Lang::get('common.open_file')}}</a>
				</div>
			</div>
			@endif

		</div>

		@include('layouts/partials/form-buttons')

		<div class="row padding-1">
			<div class="col s12">
				@include('protocolo/historico-movimentacao')
			</div>
		</div>
	</form>
	
</div>
@endsection

@section('js')


{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}

@include('layouts/partials/dropify')


@endsection