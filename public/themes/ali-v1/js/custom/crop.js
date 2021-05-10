var cropper;
var input 			=  $('.dropify');
var cropped_img 	= $('#cropped_img');
var input_cropped 	= $('.input_cropped')

var modalInstances;

$(document).ready(function()
{
	var elems 			= document.querySelectorAll('.modal');
	modalInstances 	= M.Modal.init(elems,{
		dismissible:false
		,preventScrolling:false
	});

	$('.dropify-crop').not('.not-dropify').on('change', function (e)
	{
		inputCrop($(this), e)
	});


	$('#cut_image').on('click', function ()
	{
		var canvas;
		if (cropper)
		{
			canvas = cropper.getCroppedCanvas();
			input_cropped.val(canvas.toDataURL());

			$(input).parent().find(".dropify-render > img").attr("src",canvas.toDataURL());
		}

		modal = getModalCrop()
		modal.close();

		cropper.destroy()
	})

});

function getModalCrop()
{
	var singleModalElem 			= document.querySelector('#cut_modal');
	var instance 					= M.Modal.getInstance(singleModalElem);7
	instance.options.dismissible 	= false;

	return instance;
}

function inputCrop(element, event)
{
	var image 		= document.getElementById('crop_image');
	var files 		= event.target.files;
	input 			= element;
	input_cropped 	= $(input).parent().parent().find('.input_cropped');

	var done 		= function (url)
	{
		input.value = '';
		image.src = url;

		modal = getModalCrop()
		modal.open();
		
		cropper = new Cropper(image, {
			viewMode: 1,
			aspectRatio: aspectoCrop
		});
	};

	if (files && files.length > 0)
	{
		file = files[0];

		if (URL)
		{
			done(URL.createObjectURL(file));
		}
		else if (FileReader)
		{
			reader = new FileReader();
			reader.onload = function (e)
			{
				done(reader.result);
			};
			reader.readAsDataURL(file);
		}
	}
}

function isFileImage(file) {
	const acceptedImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
	return file && $.inArray(file['type'], acceptedImageTypes)
}