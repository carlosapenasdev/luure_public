<script type="text/javascript">


	function addElemento(local)
	{
		let id 		= parseInt($('#total_'+local).val()) + 1;
		
		$('#total_'+local).val(id);

		let clone 	= $('#form-'+local).clone();
		let regex = /({ID_INPUT})/gi;
		clone 		= (clone.html().replaceAll(regex, id));

		regex = /({LOCAL})/gi;
		clone 		= (clone.replaceAll(regex, local));

		$('#form-linhas-'+local).append(clone);

		localUpper = local.charAt(0).toUpperCase() + local.slice(1)
		
		if (typeof window['config'+localUpper] !== "undefined")
		{
			window['config'+localUpper]();
		}
		
		ativaFormSelect(local);

		tooltips(".tooltipped");
	}


	function deletarElemento(local, linha, database = null)
	{
		var element = document.getElementById('linha-'+local+'-'+linha);
		element.parentNode.removeChild(element);
		$('.material-tooltip').css('opacity', 0);
	}

	function ativaFormSelect(local)
	{
		$('#form-linhas-'+local+' select').not('.select-buscavel').each(function (i)
		{
			var instance = $(this).formSelect();
		});

		$('#form-linhas-'+local+' select.select-buscavel').each(function (i)
		{
			makeSelectBuscavel($(this))
		});
	}

</script>