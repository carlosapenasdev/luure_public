if( commonForm === undefined)
{
	var commonForm;
	var commonFormID;
}

if( document.querySelector("body .card-content form") !== null)
{
	if( commonForm === undefined)
	{
		commonForm 		= document.querySelector("body .card-content form");
		commonFormID 	= commonForm.getAttribute('id');
	}
	
	$(document).ready(function ()
	{
		/*
		
		VALIDA os SELECT do tipo DROPDOWN
		*/
		$('#'+commonFormID+' select').each(function(i)
		{
			setEventListenner(this)
		});

		/*
		
		VALIDA TODOS OS ELEMENTOS com classe validate

		*/

		$('#'+commonFormID+' .validate').keypress(function(e) 
		{
			if(e.which == 13 && e.target.localName != 'textarea')
			{
				$(this).blur();
				if(!commonValidateForm() && typeof commonError === 'function')
				{
					commonError();
					e.preventDefault();
					e.stopPropagation();
				}
			}
		});

		if( $('.submit-all-btn').length > 0)
		{
			$('.submit-all-btn').click(function( event )
			{
				if(!commonValidateForm($(this).closest('form').attr('id')) && typeof commonError === 'function')
				{
					commonError();
					event.preventDefault();
					event.stopPropagation();
				}
			});
		}
	});
}

function commonValidateForm(formID = null)
{
	if(formID == null)
		formID = commonFormID
	
	var retorno = true;

	$('#'+formID+' .validate').each(function (i)
	{
		validarSelects(this);

		if($(this).attr('type') == "radio")
		{
			tableMode = $(this).closest('.row').find('table');
			if($('input[name=' + this.name + ']:checked').length == 0)
			{
				if(tableMode.length > 0)
				{
					tableMode.css({'border':'2px solid #ff5252'});
				}
				else
				{
					$(this).closest('.row').find('.mb-1 span').css({'border-bottom':'2px solid #ff5252'});
				}
				retorno = false;
			}
			else
			{
				if(tableMode.length > 0)
				{
					tableMode.css({'border-bottom':'none'});
				}
			}
		}
		else if($(this).hasClass('dropify'))
		{
			if($(this).closest('.dropify-wrapper').find('.dropify-preview').css('display') == 'none')
			{
				$(this).closest('.dropify-wrapper').css({'border':'2px solid #ff5252'});
				retorno = false;
			}
			else
			{
				$(this).closest('.dropify-wrapper').css({'border':'2px solid #E5E5E5'});
			}
		}
		else if($(this).hasClass('chips'))
		{
			if($(this).find('.chip').length == 0)
			{
				$(this).css({'border-bottom':'2px solid #ff5252'});
				retorno = false;
			}
			else
			{
				$(this).css({'border-bottom':'1px solid #9e9e9e'});
			}
		}
		else if($(this).val() == '')
		{
			$(this).addClass('invalid');
			retorno = false;
		}
	});

	commonForm.reportValidity();
return retorno;
}

var listenerSelects = function(e){
	

	var pai  	= $(e.target).parent();
	var select  = pai.find('.dropdown-content.select-dropdown');
	var input  	= pai.find('.select-dropdown.dropdown-trigger');

	if(select.length == 0 && select.length == 0)
	{
		select  = pai.find('.select2-selection.select2-selection--single');
		
		input  	= pai.find('.select-dropdown.dropdown-trigger');
	}

	if(select.length == 0 && select.length == 0)
	{
		select  = $(e.target);
		input  	= pai.find('.select-dropdown.dropdown-trigger');
	}
	
	if(typeof commonError === 'function')
		commonError();

	select.addClass('invalid');
	input.addClass('invalid');

	setTimeout(function(){
		select.removeClass('invalid');
		input.removeClass('invalid');

	},5000);            

	return true;
}

function setEventListenner(element)
{
	element.addEventListener('invalid', listenerSelects, false);
}

function unsetEventListenner(element)
{
	element.removeEventListener('invalid', listenerSelects, false);
}

function validarSelects(select)
{
	if($(select).prop("tagName").toUpperCase() == 'SELECT')
	{
		if($(select).val() == '' || $(select).val() == null)
		{
			if($(select).prop('multiple'))
			{
				$(select).closest('.row').find('span.select2-selection.select2-selection--multiple').css({'border':'2px solid #ff5252'});
			}

			setEventListenner(select);
			$(select).trigger('invalid');
			retorno = false;
		}
		else
		{
			if($(select).prop('multiple'))
			{
				$(select).closest('.row').find('span.select2-selection.select2-selection--multiple').css({'border':'1px solid #aaa'});
			}			
		}
	}
}