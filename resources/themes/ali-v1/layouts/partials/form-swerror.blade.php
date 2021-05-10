<script type="text/javascript">

	if(typeof commonError !== 'function')
	{
		function commonError()
		{
			Swal.fire({
				title              : "{{Lang::get('validation.show_error_sweet')}}!",
				icon: 'warning',
				timer: "{{config('sweetalert.timer')}}"
			});
		}
	}
</script>