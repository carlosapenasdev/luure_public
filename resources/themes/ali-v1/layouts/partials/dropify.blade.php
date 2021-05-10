<script type="text/javascript">
	var drEvent;
	$( document ).ready(function() {
		
		if($('.dropify').length)
		{
			@if(!isset($notDrop) || $notDrop == false)

			$('.dropify').not('.not-dropify').each(function (i)
			{
				drEvent = initDrops(this);
			});

			@endif
		}

	});

	function initDrops(elem)
	{
		if($(elem).length > 0 )
		{
			drEvent = $(elem).dropify({
				messages: {
					'default': "{{Lang::get('dropify.default')}}",
					'replace': "{{Lang::get('dropify.replace')}}",
					'remove':  "{{Lang::get('dropify.remove')}}",
					'error':   "{{Lang::get('dropify.error')}}"
				},
				error: {
					'fileSize': "{{Lang::get('dropify.fileSize')}}",
					'minWidth': "{{Lang::get('dropify.minWidth')}}",
					'maxWidth': "{{Lang::get('dropify.maxWidth')}}",
					'minHeight': "{{Lang::get('dropify.minHeight')}}",
					'maxHeight': "{{Lang::get('dropify.maxHeight')}}",
					'imageFormat': "{{Lang::get('dropify.imageFormat')}}",
					'fileExtension': "{{Lang::get('dropify.fileExtension')}}",
				}
			});

			var retorno = drEvent;

			drEvent = drEvent.data('dropify');

			if(drEvent.input.attr('default-file') !== undefined)
			{
				drEvent.settings.defaultFile = drEvent.input.attr('default-file');
				drEvent.destroy();
				drEvent.init();
			}

			return retorno;
		}
	}
</script>