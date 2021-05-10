<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<head>
	@include('layouts/dashboard/head')

	{!! Theme::css('css/custom/browse.css') !!}

	@yield('css')

</head>
<body>
	@include('sweetalert::alert')
	@include('layouts/dashboard/topbar')
	@include('layouts/dashboard/sidenav')
	@include('layouts/dashboard/pagemain')
	@include('layouts/dashboard/footer')
	
	{!!Theme::js('js/vendors.min.js')!!}
	{!!Theme::js('vendors/data-tables/js/jquery.dataTables.min.js')!!}
	{!!Theme::js('vendors/data-tables/js/dataTables.select.min.js')!!}

	{!!Theme::js('js/plugins.js')!!}
	{!!Theme::js('js/custom/custom-script.js')!!}
	{!!Theme::js('js/custom/browse.js')!!}
	{!!Theme::js('js/custom/modal.js')!!}

	
	{!!Theme::js('/vendors/blockUI/jquery.blockUI.js')!!}
	{!!Theme::js('/vendors/blockUI/blockUI.js')!!}

	@yield('js')

	<script>
		$('.action-delete').on('click', function () {
			event.preventDefault();
			btn = this;

			Swal.fire({
				title: '{{Lang::get("validation.confirm_delete_title")}}',
				text: '{{Lang::get("validation.confirm_delete_msg")}}',
				icon: 'warning',
				showCancelButton: true,
				confirmButtonText: '{{Lang::get("validation.confirm_delete_btn-confirm")}}',
				cancelButtonText: '{{Lang::get("common.form_reset")}}',
				customClass: {
					confirmButton: 'green darken-1',
					cancelButton: 'red accent-2',

				}
			}).then((willDelete) => {
				if (willDelete.value)
				{
					$(btn).parent().submit();
				}
			})

		});
	</script>

</body>
</html>
