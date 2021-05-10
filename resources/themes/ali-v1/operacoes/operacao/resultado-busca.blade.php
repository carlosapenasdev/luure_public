@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<div class="row">
		<div class="col s11">
			<h4>{{Lang::get('controller/operacao.busca_title')}}</h4>
		</div>
		
		<div class="col s1">
			@include('operacoes/operacao/modal-busca')
		</div>
	</div>
	@if($operacaos->count() > 0)
	<div class="row">
		<div class="col s12">
			<h6>
				{{trans_choice('controller/operacao.busca_resultado', $operacaos->count(), ['qtde' => $operacaos->count()])}}
			</h6>
		</div>
	</div>
	@endif

	@include('operacoes/operacao/index-lista-operacao')

</div>

@endsection

@section('js')

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