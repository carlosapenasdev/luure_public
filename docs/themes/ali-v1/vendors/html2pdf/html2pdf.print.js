function pdfPage(elemento, arquivo)
{
	setTimeout(function(){
		$.blockUI();
	}, 100);
	
	setTimeout(function(){
		printPage(elemento, arquivo)
	}, 1000);
}

function printPage(elemento, arquivo)
{
	var opt = {
		margin: [10,10],
		filename: 	arquivo,
		image:        { type: 'jpeg', quality: 0.75 },
		html2canvas:  { scale: 1 },
		enableLinks: false,
		jsPDF:        { unit: 'mm', format: 'a3', orientation: 'portrait', compress: true },
		pagebreak: {
			mode: ['avoid-all'],
			avoid: '.no-break'
		}
	};

	html2pdf().set(opt).from(elemento).save().then(function () {
		$.unblockUI();
	});
}