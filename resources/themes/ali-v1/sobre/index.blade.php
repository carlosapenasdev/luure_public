@extends('layouts.sobre')


<link data-dump-line-numbers="all" data-global-vars='{ "myvar": "#ddffee", "mystr": "\"quoted\"" }' rel="stylesheet/less" type="text/css" href="/themes/ali-v1/css/pages/sobre.less">

@section('content')

<div id="timeline-content" class="border-radius-6">
	<h1 class="pt-3 white-text">@lang('controller/sobre.name') {{ config('app.name', 'Laravel') }}</h1>
	
	<p class="white-text  pl-5 pr-5" style=" text-align: justify; text-justify: inter-word;">
		Desenvolvido na seção de Inteligência do 1° Batalhão da Polícia Militar do Paraná, o Luure nasceu para modernizar a atividade de inteligência no âmbito local.
		<br /><br />Veja e descubra o que ele fez e faz por todos que tiveram contato com esta ferramenta estratégica de gestão:
	</p>

	<ul class="timeline">
		<li class="event" data-date=""> @include('sobre/modal-11-o_que_e') </li>
		<li class="event" data-date=""> @include('sobre/modal-12-significa') </li>

		<li class="event" data-date=""> @include('sobre/modal-21-por_que') </li>
		<li class="event" data-date=""> @include('sobre/modal-22-manutencao_hist') </li>
		<li class="event" data-date=""> @include('sobre/modal-23-prioridade') </li>
		<li class="event" data-date=""> @include('sobre/modal-24-metricas') </li>

		<li class="event" data-date=""> @include('sobre/modal-31-tecnologias') </li>
		<li class="event" data-date=""> @include('sobre/modal-32-equipe') </li>
	</ul>
	<div class="white-text padding-2">
		Feito por <br/>
		<a class="link-pmpr dev-luure" href="mailto:carlos.santos00@pm.pr.gov.br">Sd. QPMG 1-0 Carlos Eduardo Almeida Santos</a>
	</div>
	<div>
		<a class="waves-effect waves-light btn-large mb-1 grey darken-4 tooltipped" href="/">
			@lang('common.voltar')
		</a>
	</div>
</div>

@endsection

@section('js')

<script src="/themes/ali-v1/vendors/less/less.min.js" data-poll="1000" data-relative-urls="false"></script>

<script type="text/javascript">
	
	function backModal(atual, proximo)
	{
		var mAtual = M.Modal.getInstance($('#'+atual));
		var mProximo = M.Modal.getInstance($('#'+proximo));

		mAtual.close();
		mProximo.open();
	}
	
	function nextModal(atual, proximo)
	{
		var mAtual = M.Modal.getInstance($('#'+atual));
		var mProximo = M.Modal.getInstance($('#'+proximo));
		
		mAtual.close();
		mProximo.open();
	}

</script>

@endsection

