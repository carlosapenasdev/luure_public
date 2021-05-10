<script type="text/javascript">
	$(document).ready(function ()
	{
		$('.search-unique').toArray().forEach(function(field)
		{
			$(field).blur(function()
			{
				$this =$(this) 
				if($this.val() !== '')
				{
					let url 	= $this.data('unique');
					let name 	= $this.attr('name');
					let val 	= $this.val();
					let post 	= {}

					post[name]	= val;

					$.ajaxSetup(
					{
						headers:
						{
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						}
					});

					$(document).ajaxStart(function () {
						$.blockUI();
					});

					$.ajax(
					{
						type: "POST",
						url	: url,
						data: post,
						success: function (data)
						{
							if(data.total > 0)
							{
								Swal.fire({
									title 	: "{{Lang::get('validation.not_unique')}}!",
									icon	: 'warning',
									timer	: "{{config('sweetalert.timer')}}"
								});

								$this.val('');
							}

							$.unblockUI();
						},

					});
				}

			});
		});
	});
</script>