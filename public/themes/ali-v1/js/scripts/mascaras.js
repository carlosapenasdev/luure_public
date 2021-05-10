$('.mask-data').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		date: true,
		delimiter: "/",
		datePattern: ["d", "m", "Y"]
	});
});

$('.mask-integer').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		numeral: true,
		numeralDecimalMark: ',',
		delimiter: '',
		numeralPositiveOnly:        true,
		numeralThousandsGroupStyle: 'thousand',
		numericOnly: true,
		numeralDecimalScale: 0
	});
});

$('.mask-float').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		numeral: true,
		numeralDecimalMark: ',',
		delimiter: '.',
		numeralDecimalScale: 2
	});
});

$('.mask-float3').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		numeral: true,
		numeralDecimalMark: ',',
		delimiter: '.',
		numeralDecimalScale: 3
	});
});

$('.mask-rg').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		numeral: true,
		numeralDecimalMark: '',
		delimiter: '',
		numeralDecimalScale: 0
	});
});

$('.mask-cpf').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		blocks: [3,3,3,2], 
		delimiters: ['.', '.', '-'], 
		numericOnly: true
	});
});

$('.mask-bou').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		blocks: [4,8], 
		delimiters: ['/'], 
		numericOnly: true
	});
});

$('.mask-titulo-eleitor').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		blocks: [4,4,4], 
		delimiters: ['.', '.', '.'], 
		numericOnly: true
	});
});

$('.mask-fone').toArray().forEach(function(field)
{
	mascaraTelefone(field)
});

$('.mask-cod-crime').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		prefix: '0P2',
		blocks: [3,3,2], 
		delimiters: ['.'], 
		numericOnly: true
	});
});
$('.mask-cod-ambiente').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		prefix: '0P2',
		blocks: [3,2,2], 
		delimiters: ['.'], 
		numericOnly: true
	});
});

$('.mask-hora').toArray().forEach(function(field)
{
	new Cleave(field,
	{
		time: true,
		timePattern: ['h', 'm']
	});
});


$('.mask-placa').toArray().forEach(function(field)
{
	mascaraPlaca(field)

	
});

function mascaraTelefone(elemento)
{
	new Cleave(elemento,
	{
		phone: true,
		phoneRegionCode: 'br'
	});
}

function mascaraPlaca(elemento)
{
	new Cleave(elemento,
	{
		uppercase: true,
		blocks: [7]
	});

	$(elemento).on('keyup', function () {
		var input = $(this).val();
		var regex = input.replace(/[^\w]/g, "");
		$(this).val(regex);
	})
}