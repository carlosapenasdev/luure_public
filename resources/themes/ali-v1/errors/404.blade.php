@extends('layouts.login')

@section('content')

<div class="row mt-5 mb-5 ml-5 mr-5">
	<div class="col s12 center">
		<h3>
		@lang('error.404')
		</h3>
	</div>
</div>
<div class="row mt-5 mb-5 ml-5 mr-5">
	<div class="col s12 center">
		@lang('error.goto'): <a href="{{route('dashboard')}}" class="strong link-pmpr"> @lang('controller/dashboard.name')</a>
	</div>
</div>

@endsection
