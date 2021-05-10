<script type="text/javascript">

	var individuos 		= {!!$individuos!!};
	var individuoData 	= {};
	var individuoInit 	= [];

	function initChipIndividuo()
	{
		
		$.each(individuos, function(index, value) {
			individuoData[index] = value;
		});

		@if(isset($indInit))
		
		$.each({!!$indInit!!}, function(index, value) {
			individuoInit[index] = {
				tag:value,
				image:individuoData[value]
			};
		});
		
		@endif

		$('#chip-individuo').chips({
			data: individuoInit,
			autocompleteOptions: {
				data: individuoData,
				limit: Infinity,
				minLength: 1
			},
			onChipAdd: function(e, chip) {

				chipAddedIndividuo(this, chip);

				configIndividuo();
			},
			onChipDelete: function(e, data) {
				chipDeletedIndividuo(data);
			}
		});
	}

	function configIndividuo()
	{
		$( "#chip-individuo > div.chip" ).not('.chip-vinculado').each(function()
		{
			var clone =  $(this).find('i').clone();
			clone.addClass('left');
			$(this).find('i').remove();

			$(this).prepend(clone);

			$(this).addClass('chip-vinculado');
			$(this).addClass('truncate');

			var codigo = getChipCodeIndividuo(this);

			$('<input>').attr({
				type: 'hidden',
				name: 'individuo[]',
				id: 'individuo'+codigo.replaceAll(/(\.)/gi, ''),
				value: codigo
			}).appendTo('#linha-individuo');
		});
	}

	function getChipCodeIndividuo(chip)
	{
		var chip_selected 	= $(chip).text();
		var individuo 		= $.trim(chip_selected);
		var codigo 			= $.trim(individuo.split(" ")[0]);
		codigo 				= (codigo.replaceAll(/^(close\#)/gi, ''));
		return codigo;
	}

	function chipAddedIndividuo(chips, chip)
	{
		chips.chipsData.forEach(function(e, index) {
			if(!(e.tag in individuoData))
				chips.deleteChip(index);
			else if(index == (chips.chipsData.length-1))
			{
				$('<img>').attr({
					src: individuoData[e.tag],
					alt: e.tag
				}).appendTo($(chip));

			}
		})

		if (typeof onChipAddedEvent !== "undefined")
		{
			setTimeout(function()
			{
				onChipAddedEvent();
			}, 100);
		}
	}

	function chipDeletedIndividuo(data)
	{
		var codigo = getChipCodeIndividuo(data);

		$('#individuo'+codigo.replaceAll(/(\.)/gi, '')).remove();

		if (typeof onChipDeletedEvent !== "undefined")
		{
			onChipDeletedEvent();
		}
	}
</script>