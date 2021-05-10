<script type="text/javascript">

	var naturezas 		= {!!$crimes!!};
	var naturezaData 	= {};
	var naturezaInit 	= [];

	function initChipNatureza()
	{
		$.each(naturezas, function(index, value) {
			naturezaData[value] = null;
		});

		@if(isset($naturezaInit))

			$.each({!!$naturezaInit!!}, function(index, value) {
				naturezaInit[index] = {tag:value};
			});

		@endif

		$('#chip-natureza').chips({
			data: naturezaInit,
			autocompleteOptions: {
				data: naturezaData,
				limit: Infinity,
				minLength: 1
			},
			onChipAdd: function(e, chip) {

				chipAddedNatureza(this, chip);

				configNatureza();
			},
			onChipDelete: function(e, data) {
				chipDeletedNatureza(data);
			}
		});
	}

	function configNatureza()
	{
		$( "#chip-natureza > div.chip" ).not('.chip-code').each(function()
		{
			var clone =  $(this).find('i').clone();
			clone.addClass('left');
			$(this).find('i').remove();

			$(this).prepend(clone);

			$(this).addClass('chip-code');
			$(this).addClass('truncate');

			var codigo = getChipCodeNatureza(this);

			$('<input>').attr({
				type: 'hidden',
				name: 'natureza[]',
				id: 'natureza'+codigo.replaceAll(/(\.)/gi, ''),
				value: codigo
			}).appendTo('#linha-natureza');
		});
	}

	function getChipCodeNatureza(chip)
	{
		var chip_selected 	= $(chip).text();
		var natureza 		= $.trim(chip_selected);
		var codigo 			= $.trim(natureza.split("|")[0]);
		codigo 				= (codigo.replaceAll(/^(close)/gi, ''));
		return codigo;
	}


	function chipAddedNatureza(chips, chip)
	{
		chips.chipsData.forEach(function(e, index) {
			if(!(e.tag in naturezaData))
				chips.deleteChip(index);
		})
	}

	function chipDeletedNatureza(data)
	{
		var codigo = getChipCodeNatureza(data);

		$('#natureza'+codigo.replaceAll(/(\.)/gi, '')).remove();
	}
</script>