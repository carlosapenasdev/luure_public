<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	
	<link rel="apple-touch-icon" href="{{ Theme::url('images/favicon/pmpr.ico') }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ Theme::url('images/favicon/pmpr.ico') }}">
	{!! Theme::css('css/fonts.googleapis.material.css') !!}

	{!! Theme::css('vendors/vendors.min.css') !!}
	{!! Theme::css('css/layout/dashboard/materialize.css') !!}
	{!! Theme::css('css/layout/dashboard/style.css') !!}
	{!! Theme::css('css/custom/custom.css') !!}

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }} - {{Lang::get('common.dashboard')}}</title>
	
	@yield('css')
</head>
<body>
	@include('sweetalert::alert')
	@include('layouts/dashboard/topbar')
	@include('layouts/dashboard/sidenav')
	@include('layouts/dashboard/pagemain')
	@include('layouts/dashboard/footer')
	
	{!!Theme::js('js/vendors.min.js')!!}
	{!!Theme::js('js/plugins.js')!!}
	{!!Theme::js('js/custom/custom-script.js')!!}

	
	{!!Theme::js('/vendors/blockUI/jquery.blockUI.js')!!}
	{!!Theme::js('/vendors/blockUI/blockUI.js')!!}

	@yield('js')

</body>
</html>
