@extends('layouts/form')

@section('css')
{!!Theme::css('vendors/cropperjs/cropper.css')!!}
{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
@php
$aspectoCrop = '16/9';
@endphp
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($sistema))
	<form id="formulario" class="row" method="post" action="{{ route('sistemas.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('sistemas.update', $sistema) }}">
		<input type="hidden" name="id" value="{{ $sistema->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s6">
			<input id="name" name="name" value="{{ !isset($sistema) ? old('name') : $sistema->name }}" type="text" class="validate" required="required">
			<label for="name" class="active">{{Lang::get('controller/sistema.field_name')}}*</label>
		</div>

		<div class="input-field col s6">
			<input id="link" name="link" value="{{ !isset($sistema) ? old('link') : $sistema->link }}" type="text" class="validate" required="required">
			<label for="link" class="active">{{Lang::get('controller/sistema.field_link')}}*</label>
		</div>

		<div class="input-field col s12">
			<input type="file" name="banner" id="banner" class="dropify dropify-crop parsley-validated validate" required="required" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($sistema) && !empty($sistema->banner)) default-file="{{url($sistema->banner)}}" value="{{$sistema->banner}}" @endif />
			<input type="hidden" name="banner_cropped" class="input_cropped">
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')
{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}
@include('layouts/partials/dropify')

@endsection