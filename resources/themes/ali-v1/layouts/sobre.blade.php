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
	{!! Theme::css('css/layout/login/materialize.css') !!}
	{!! Theme::css('css/layout/login/style.css') !!}
	{!! Theme::css('css/pages/login.css') !!}
	{!! Theme::css('css/custom/custom.css') !!}

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }} - @lang('controller/sobre.name') {{ config('app.name', 'Laravel') }}</title>
</head>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu 1-column login-bg  blank-page blank-page" data-open="click" data-menu="vertical-gradient-menu" data-col="1-column">
	@include('sweetalert::alert')

	@yield('content')

	{!!Theme::js('js/vendors.min.js')!!}
	{!!Theme::js('js/plugins.js')!!}
	{!!Theme::js('js/custom/custom-script.js')!!}
	{!!Theme::js('js/custom/modal.js')!!}


	{!!Theme::js('/vendors/blockUI/jquery.blockUI.js')!!}
	{!!Theme::js('/vendors/blockUI/blockUI.js')!!}

	@yield('js')

	<script type="text/javascript">
		$(document).ready(function(){

			$(".modal").each(function( index )
			{
				var modalEle = $( this );

				var instance = M.Modal.getInstance(modalEle);
				instance.destroy();

				M.Modal.init(modalEle, {
					onOpenEnd() {
						video = $(this.el).find('video');
						video[0].play();
					},
					onCloseEnd() {
						video = $(this.el).find('video');
						video[0].pause();
					}
				});

			});
		})
	</script>
</body>
</html>
