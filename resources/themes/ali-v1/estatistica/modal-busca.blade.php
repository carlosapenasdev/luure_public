<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalBusca" data-position="top" data-tooltip="{{Lang::get('controller/estatistica.busca_title')}}">
	<i class="material-icons">search</i>
</a>
<div id="modalBusca" class="modal overflow-y-unset">
	<div class="modal-content">
		
		<h4>{{Lang::get('controller/estatistica.busca_title')}}</h4>
		
		<form method="post" action="{{route('estatistica.buscar')}}" enctype="multipart/form-data">
			@csrf
			
			<div class="row">
				<div class="input-field col s6">
					<select name="acao_estatistica_id" id="acao_estatistica_id">
						<option value="" disabled selected>{{Lang::get('common.select')}}</option>

						@foreach($acaoEstatisticas as $acaoEstatistica)
						<option {{ ( isset($request) && $request->acao_estatistica_id == $acaoEstatistica->id ) ? 'selected="selected"' : '' }} value="{{$acaoEstatistica->id}}">{{$acaoEstatistica->name}}</option>
						@endforeach

					</select>
					<label data-error="Select an option">{{Lang::get('controller/estatistica.field_acao_estatistica_id')}}</label>
				</div>
				<div class="input-field col s6">
					<select name="natureza_estatistica_id" id="natureza_estatistica_id" >
						<option value="" disabled selected>{{Lang::get('common.select')}}</option>

						@foreach($naturezaEstatisticas as $naturezaEstatistica)
						<option {{ ( isset($request) && $request->natureza_estatistica_id == $naturezaEstatistica->id ) ? 'selected="selected"' : '' }} value="{{$naturezaEstatistica->id}}">{{$naturezaEstatistica->name}}</option>	
						@endforeach

					</select>
					<label data-error="Select an option">{{Lang::get('controller/estatistica.field_natureza_estatistica_id')}}</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<select name="origem_estatistica_id" id="origem_estatistica_id">
						<option value="" disabled selected>{{Lang::get('common.select')}}</option>

						@foreach($origemEstatisticas as $origemEstatistica)
						<option {{ ( isset($request) && $request->origem_estatistica_id == $origemEstatistica->id ) ? 'selected="selected"' : '' }} value="{{$origemEstatistica->id}}">{{$origemEstatistica->name}}</option>	
						
						@endforeach

					</select>
					<label data-error="Select an option">{{Lang::get('controller/estatistica.field_origem_estatistica_id')}}</label>
				</div>
				<div class="input-field col s6">
					<select name="operacao_id" id="operacao_id">
						<option value="" disabled selected>{{Lang::get('common.select')}}</option>

						@foreach($operacaos->sortBy('nome') as $operacao)
						<option {{ ( isset($request) && $request->operacao_id == $operacao->id ) ? 'selected="selected"' : '' }} value="{{$operacao->id}}">{{$operacao->nome}}</option>
						@endforeach

					</select>
					<label data-error="Select an option">{{Lang::get('controller/estatistica.field_operacao')}}</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s6">
					<input id="periodo_de" class="mask-data" name="periodo_de" value="{{isset($request) ? $request->periodo_de : '' }}" type="text">
					<label for="periodo_de">{{Lang::get('controller/protocolo.field_periodo_de')}}</label>
				</div>
				<div class="input-field col s6">
					<input id="periodo_ate" class="mask-data" name="periodo_ate" value="{{isset($request) ? $request->periodo_ate : '' }}" type="text">
					<label for="periodo_ate">{{Lang::get('controller/protocolo.field_periodo_ate')}}</label>
				</div>
			</div>

			<div class="row">
				@php
				$modalClose = true;
				@endphp
				@include('layouts/partials/form-buttons')
			</div>
		</form>
	</div>
</div>
