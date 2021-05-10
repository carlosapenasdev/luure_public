<form id="formulario" class="row" method="post" action="{{ route('protocolo.visibilidade', $protocolo) }}" method="post">
	@method('POST')
	@csrf
	<input type="hidden" name="visivel" class="visivel" value="{{$protocolo->visivel}}">

	<button class="btn btn-floating btn-large waves-effect waves-light grey darken-3 tooltipped reduzir60 action-visibilidade" data-position="top" data-tooltip="@if($protocolo->isVisivel()) @lang('controller/protocolo.visivel') @else @lang('controller/protocolo.oculto') @endif">
		<i class="material-icons dossier-icons dp48">@if($protocolo->isVisivel()) visibility @else visibility_off @endif</i>
	</button>
</form>

<script type="text/javascript">

	document.onreadystatechange = function ()
	{
		if (document.readyState == "complete")
		{
			$('.action-visibilidade').on('click', function () {
				event.preventDefault();
				btn = this;

				Swal.fire({
					title: '{{Lang::get("validation.confirm_delete_title")}}',
					text: '{{Lang::get("controller/protocolo.txt_visibilidade")}}',
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: '{{Lang::get("controller/protocolo.confirm_visibilidade")}}',
					cancelButtonText: '{{Lang::get("common.form_reset")}}',
					customClass: {
						confirmButton: 'green darken-1',
						cancelButton: 'red accent-2',

					}
				}).then((will) => {
					if (will.value)
					{
						form = $(btn).closest('form');
						input = $(form).find('input.visivel');

						var visivel = $(input).val();

						if(visivel == 1)
							$(input).val(0);
						else
							$(input).val(1);

						//$(form).submit();

						$.ajaxSetup({
							headers: {
								'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							}
						});

						$.ajax({
							type: "POST",
							url: $(form).attr('action'),
							data: $(form).serialize(),
							success: function (data)
							{
								document.location.reload(true);
							},

						});
					}
				})

			});
		}
	}
</script>