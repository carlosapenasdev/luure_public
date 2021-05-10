/*
 * Form Elemets - Form
 */

 $(function() {
 	ativaSelect2();

 	$(".timepicker").timepicker({
     default: "now", // Set default time
     fromnow: 0, // set default time to * milliseconds from now (using with default = 'now')
     twelvehour: false, // Use AM/PM or 24-hour format
     donetext: "OK", // text for done-button
     cleartext: "Clear", // text for clear-button
     canceltext: "Cancel", // Text for cancel-button
     autoclose: false, // automatic close timepicker
     ampmclickable: true, // make AM PM clickable
     aftershow: function() {} //Function for after opening timepicker
 });

 	$(".datepicker").datepicker({
 		autoclose: true,
 		format: "dd/mmm/yyyy"
 	});

 	var slider = document.getElementById("test-slider");
 	if (slider !== null)
 	{
 		noUiSlider.create(slider, {
 			start: [20, 80],
 			connect: true,
 			step: 1,
 			orientation: "horizontal",
 			range: {
 				min: 0,
 				max: 100
 			},
 			format: wNumb({
 				decimals: 0
 			})
 		});
 	}
 	$("input.autocomplete").autocomplete({
 		data: {
 			Apple: null,
 			Microsoft: null,
 			Google: "https://placehold.it/250x250"
 		},
     limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
     onAutocomplete: function(val) {
        // Callback function when value is autcompleted.
    },
     minLength: 1 // The minimum length of the input for the autocomplete to start. Default: 1.
 });

 	$("input#input_text, textarea.materialize-textarea").characterCounter();

 	ativaSelectBuscavel();

 	$('.select2Todos').click(function() {
 		$('.select-buscavel-multiple').toArray().forEach(function(field)
 		{
 			selecionarEspecifico(field, "");
 		});
 	});

 	$('.select2Nenhum').click(function() {
 		$('.select-buscavel-multiple').toArray().forEach(function(field)
 		{
 			selecionarEspecifico(field, "", false);
 		});
 	});
 });

 function ativaSelect2()
 {
 	$("select").not('select[style="display: none;"]').not('select[name="page-length-option_length"]').not('.no-formSelect').formSelect();
 }


 function ativaSelectBuscavel()
 {
 	$('.select-buscavel').toArray().forEach(function(field)
 	{
 		makeSelectBuscavel(field)
 	});

 	$('.select-buscavel-multiple').toArray().forEach(function(field)
 	{
 		makeSelectBuscavel(field, true)
 	});

 }

 function makeSelectBuscavel(field, multiple = false)
 {
 	if($(field).attr("id").indexOf("{") == -1 && !$(field).hasClass('select2-hidden-accessible'))
 	{
 		if($(field).closest('.modal').length > 0)
 			local = $(field).closest('.modal');
 		else
 			local = $('body');

 		opcoes = {
 			width: '100%',
 			dropdownParent: local
 		};

 		if(multiple)
 		{
 			opcoes.closeOnSelect = false
 		}

 		$(field).select2(opcoes);
 	}
 }

function selecionarEspecifico(select, classe, selecionado = true)
{
    $(select).find("option" + classe).prop('selected', selecionado);
    $(select).trigger("change");
}