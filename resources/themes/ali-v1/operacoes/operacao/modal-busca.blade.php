<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalBusca" data-position="top" data-tooltip="{{Lang::get('controller/operacao.busca_title')}}">
	<i class="material-icons">search</i>
</a>
<div id="modalBusca" class="modal overflow-y-unset">
	<div class="modal-content">
		
		<h4>{{Lang::get('controller/operacao.busca_title')}}</h4>
		
		<form method="post" action="{{route('operacao.buscar')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="input-field col s12">
					<span class="mr-1">{{Lang::get('controller/operacao.locais_pesquisa')}}</span>
					<span class="mr-2">
						<label>
							<input type="hidden" name="resumo" id="resumo" value="1">
							<input type="checkbox" name="resumo_disabled" id="resumo_disabled" checked="checked" disabled="disabled" value="1">
							<span>{{Lang::get('controller/operacao.field_resumo')}}</span>
						</label>
					</span>
					<span class="mr-2">
						<label>
							<input type="checkbox" name="nome" id="nome" {{ ( isset($request) && isset($request->nome) ) ? 'checked="checked"' : '' }} value="1">
							<span>{{Lang::get('controller/operacao.field_nome')}}</span>
						</label>
					</span>
					<span class="mr-2">
						<label>
							<input type="checkbox" name="incluir_finalizados" id="incluir_finalizados" {{ ( isset($request) && isset($request->incluir_finalizados) ) ? 'checked="checked"' : '' }} value="1">
							<span>{{Lang::get('controller/operacao.incluir_finalizados')}}</span>
						</label>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="periodo_de" class="mask-data" name="periodo_de" value="{{isset($request) ? $request->periodo_de : '' }}" type="text">
					<label for="periodo_de">{{Lang::get('controller/operacao.field_periodo_de')}}</label>
				</div>
				<div class="input-field col s6">
					<input id="periodo_ate" class="mask-data" name="periodo_ate" value="{{isset($request) ? $request->periodo_ate : '' }}" type="text">
					<label for="periodo_ate">{{Lang::get('controller/operacao.field_periodo_ate')}}</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s4">
					<select name="cidade_id" id="cidade_id">
						<option value="" disabled selected>{{Lang::get('common.select')}}</option>

						@foreach($cidades as $cidade)
						<option {{ ( (isset($request) && $request->cidade_id == $cidade->id) || (!isset($request) && $cidade->id == $cidadeDefault->id) ) ? 'selected="selected"' : '' }} value="{{$cidade->id}}">{{$cidade->nome}}</option>
						@endforeach

					</select>
					<label data-error="Select an option">{{Lang::get('controller/operacao.field_cidade_id')}}</label>
				</div>
				<div class="input-field col s4">
					<input id="juiz" name="juiz" value="{{isset($request) ? $request->juiz : '' }}" type="text">
					<label for="juiz">{{Lang::get('controller/operacao.field_juiz')}}</label>
				</div>
				<div class="input-field col s4">
					<input id="promotor" name="promotor" value="{{isset($request) ? $request->promotor : '' }}" type="text">
					<label for="promotor">{{Lang::get('controller/operacao.field_promotor')}}</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="keyword" name="keyword" value="{{isset($request) ? $request->keyword : '' }}" type="text">
					<label for="keyword">{{Lang::get('controller/operacao.field_keyword')}}</label>
				</div>
			</div>

			<div class="row">
				@include('layouts/partials/form-buttons')
			</div>
		</form>
	</div>
</div>
