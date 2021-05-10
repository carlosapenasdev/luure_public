@extends('layouts/browse')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content" id="conteudo-protocolo">
	
	@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
	<div class="row mb-1">
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalArchive" data-position="top" data-tooltip="{{Lang::get('controller/protocolo.finalizados')}}">
			<i class="material-icons">archive</i>
		</a>
		@include('protocolo/modal-busca')
	</div>
	@endrole

	<div class="row">

		<div style="width: 100%; float: left;" class="m-0" id="cabecalho-protocolo">
			@foreach($estagios as $estagio)
			<div class="col s12 m3 l3 m-0">
				<h5 class="task-card-title mb-3 white-text grey darken-2 m-0" style="padding: 0.855em; margin: 0 !important;">{{$estagio->nome}}</h5>
			</div>
			@endforeach
		</div>
		
		<div style="float: left; width: 100%" id="linhas-protocolo">
			@foreach($estagios as $estagio)
			<div class="col s12 m3 l3">
				<ul class="collection with-header coluna-estagio">
					@foreach($estagio->protocolos as $protocolo)
					@if($protocolo->isVisivel())
						
						@include('protocolo/item-lista-protocolo')
						
					@endif
					@endforeach
				</ul>
			</div>
			@endforeach
		</div>
	</div>
</div>

@include('protocolo/modal-archive')


@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

<script type="text/javascript">

	window.onscroll = function() {myFunction()};
	var header 		= document.getElementById("cabecalho-protocolo");
	var sticky 		= header.offsetTop;

	function myFunction()
	{
		let largura = $('.coluna-estagio:first').parent().width();

		if ((window.pageYOffset-30) > sticky)
		{
			$('#cabecalho-protocolo').addClass('sticky');
			$('#cabecalho-protocolo .col').width(largura+'px');
		}
		else
		{
			$('#cabecalho-protocolo').removeClass('sticky').width('100%');
		}
	}
</script>

@endsection