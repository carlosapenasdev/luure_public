@extends('layouts/browse')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content" id="conteudo-protocolo">
	<div class="row">
		<div class="col s11">
			<h4>{{Lang::get('controller/protocolo.busca_title')}}</h4>
		</div>
		
		<div class="col s1">
			@include('protocolo/modal-busca')
		</div>
	</div>
	@if($protocolos->count() > 0)
	<div class="row">
		<div class="col s12">
			<h6>
				{{trans_choice('controller/protocolo.busca_resultado', $protocolos->count(), ['qtde' => $protocolos->count()])}}
			</h6>
		</div>
	</div>
	@endif

	<div class="row">
		@php
		$i = 1;
		@endphp
		@forelse($protocolos as $protocolo)
		<div class="col s12 m4 l4">
			<ul class="collection with-header coluna-estagio">
				
				@include('protocolo/item-lista-protocolo')

			</ul>
		</div>
		@php

		$i++;

		if($i == 4)
		{
		echo '</div><div class="row">';
			$i = 1;
		}
		@endphp
		@empty
		<h5>{{Lang::get('controller/protocolo.empty')}}</h5>
		@endforelse
	</div>
</div>
</div>

@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}
{!!Theme::js('vendors/markjs/jquery.mark.min.js')!!}
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}

<script type="text/javascript">
	$( document ).ready(function() {
		$('#main').mark("{{$keyword}}");
	});
</script>

@endsection