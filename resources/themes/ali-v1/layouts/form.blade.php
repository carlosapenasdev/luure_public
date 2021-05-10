<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
	{!!Theme::css('vendors/select2/select2.min.css')!!}
	
	@include('layouts/dashboard/head')

	@yield('css')

	{!!Theme::css('vendors/cropperjs/cropper.css')!!}

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
	{!!Theme::js('js/scripts/form-elements.js')!!}
	{!!Theme::js('js/scripts/form-validation.js')!!}
	{!!Theme::js('js/scripts/ui-alerts.js')!!}
	{!!Theme::js('vendors/cropperjs/cropper.js')!!}
	{!!Theme::js('vendors/select2/select2.min.js')!!}

	
	{!!Theme::js('/vendors/blockUI/jquery.blockUI.js')!!}
	{!!Theme::js('/vendors/blockUI/blockUI.js')!!}

	<script type="text/javascript">
		$(document).ready(function() {
			M.updateTextFields();

			$('.form_reset').click(function()
			{
				setTimeout(function()
				{
					M.updateTextFields();
					window.history.back();
				}, 100);
			});
		});

		@if(isset($aspectoCrop))
		var aspectoCrop = '3.15';
		@else
		var aspectoCrop = '1';
		@endif


	</script>
	
	@include('layouts/partials/form-swerror')
	
	@include('layouts/partials/modal-crop')
	{!!Theme::js('js/custom/crop.js')!!}

	@yield('js')

</body>
</html>
