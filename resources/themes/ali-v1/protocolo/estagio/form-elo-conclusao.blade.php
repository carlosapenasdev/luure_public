@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
@php
$relatorioBusca = $protocolo->relatorioBusca();
@endphp
<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.despachar', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		<input type="hidden" name="conclusao_elo" value="1" />
		@method('PUT')
		@csrf
		
		<div id="areaRELBUSCA">
			<div class="row">
				<div class="input-field col s12">
					<textarea  maxlength="2000" data-length="2000" id="comentario" name="comentario" class="materialize-textarea validate" required="required">{{old('comentario')}}</textarea>
					<label for="comentario" class="active">{{Lang::get('controller/protocolo.field_conclusao_elo')}}*</label>
				</div>
			</div>
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