Swal.fire({
	title: '{{Lang::get("common.numero_titulo")}}',
	text: '{{Lang::get("common.numero_msg")}}',
	icon: 'warning',
	showCancelButton: true,
	confirmButtonText: '{{Lang::get("common.numero_btn-confirm")}}',
	cancelButtonText: '{{Lang::get("common.form_reset")}}',
	customClass:
	{
		confirmButton: 'green darken-1',
		cancelButton: 'red accent-2',
	}
}).then((willUpload) => {
	if (willUpload.value)
	{
		$('#formulario').submit();
	}
})