$( document ).ready(function()
{
	$('.modal').modal();

	$('.modal .form_reset').click(function()
	{
		let modal 	= $(this).closest('.modal');
		let form 	= $(this).closest('form');
		let instance = M.Modal.getInstance(modal);

		instance.close();
		$(form)[0].reset();
		$('.select-buscavel').val(null).trigger('change');

		$(form).find('input[type="text"]').toArray().forEach(function(field)
		{
			$(field).val('').trigger('change');
		});
	});
});