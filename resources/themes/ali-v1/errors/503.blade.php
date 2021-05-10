@extends('layouts.error')

@section('content')

<div class="row mt-5 mb-5 ml-5 mr-5">
	<div class="col s12 center">
		<h3>
			@lang('error.503')
		</h3>
	</div>
</div>
<div class="row mt-5 mb-5 ml-5 mr-5">
	<div class="col s12 center">
		<a href="mailto:{{config('luure.developer')}}" target="_blank" class="strong link-pmpr">{{config('luure.developer')}}</a>
	</div>
</div>

@endsection
