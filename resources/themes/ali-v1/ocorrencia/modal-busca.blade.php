<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalBusca" data-position="top" data-tooltip="@lang('controller/ocorrencia.busca_title')">
	<i class="material-icons">search</i>
</a>
<div id="modalBusca" class="modal overflow-y-unset">
	<div class="modal-content">
		
		<h4>@lang('controller/ocorrencia.busca_title')</h4>
		
		<form method="post" action="{{route('ocorrencias.buscar')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="input-field col s3">
					<select name="operacao_id" id="operacao_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($operacaos->sortBy('nome') as $operacao)
						<option {{ (isset($request) && $request->operacao_id == $operacao->id)  ? 'selected="selected"' : '' }} value="{{$operacao->id}}">{{$operacao->nome}}</option>
						@endforeach

						@php
						unset($operacao);
						@endphp

					</select>
					<label class="label-select2">@lang('controller/ocorrencia.field_operacao')</label>
				</div>
				
				<div class="input-field col s3">
					<select name="ambiente_id" id="ambiente_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($ambientes as $ambiente)
						<option {{ (isset($request) && $request->ambiente_id == $ambiente->id ) ? 'selected="selected"' : '' }} value="{{$ambiente->id}}">{{$ambiente->codigo_name}}</option>
						@endforeach

						@php
						unset($ambiente);
						@endphp

					</select>
					<label class="label-select2">@lang('controller/ocorrencia.field_ambiente')</label>
				</div>
				
				<div class="input-field col s3">
					<input id="periodo_de" class="mask-data" name="periodo_de" value="{{isset($request) ? $request->periodo_de : '' }}" type="text">
					<label for="periodo_de">@lang('controller/ocorrencia.field_periodo_de')</label>
				</div>
				<div class="input-field col s3">
					<input id="periodo_ate" class="mask-data" name="periodo_ate" value="{{isset($request) ? $request->periodo_ate : '' }}" type="text">
					<label for="periodo_ate">@lang('controller/ocorrencia.field_periodo_ate')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s3">
					<select name="cidade_id" id="cidade_id" class="no-formSelect select-buscavel select-cidade">
						<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

						@foreach($cidades as $cidade)
						<option {{ (isset($request) && $request->cidade_id == $cidade->id) ? 'selected="selected"' : '' }} value="{{$cidade->id}}">{{$cidade->nome}}</option>
						@endforeach


					</select>
					<label class="label-select2">@lang('controller/ocorrencia.field_cidade_id')</label>
				</div>
				<div class="input-field col s9">
					<select name="natureza" id="natureza" class="no-formSelect select-buscavel select-cidade">
						<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

						@foreach($crimes as $crime)
						<option {{ (isset($request) && $request->natureza == $crime->id ) ? 'selected="selected"' : '' }} value="{{$crime->id}}">{{$crime->codigo_name}}</option>
						@endforeach


					</select>
					<label class="label-select2">@lang('controller/ocorrencia.field_natureza')</label>
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s12">
					<select name="individuo" id="individuo" class="no-formSelect select-buscavel select-cidade">
						<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

						@foreach($individuos as $individuo)
						<option {{ (isset($request) && $request->individuo == $individuo->id ) ? 'selected="selected"' : '' }} value="{{$individuo->id}}">{{$individuo->id_nome}}</option>
						@endforeach


					</select>
					<label class="label-select2">@lang('controller/ocorrencia.field_presos')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s4">
					<input id="marcamodelo" name="marcamodelo" value="{{isset($request) ? $request->marcamodelo : '' }}" type="text" class="">
					<label for="marcamodelo" class="active">@lang('controller/ocorrencia.field_marcamodelo')</label>
				</div>
				
				<div class="input-field col s4">
					<input id="placa" name="placa" value="{{isset($request) ? $request->placa : '' }}" type="text" class="mask-placa">
					<label for="placa" class="active">@lang('controller/ocorrencia.field_placa')</label>
				</div>
				
				<div class="input-field col s4">
					<input id="chassi" name="chassi" value="{{isset($request) ? $request->chassi : '' }}" type="text">
					<label for="chassi" class="active">@lang('controller/ocorrencia.field_chassi')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<input id="keyword" name="keyword" value="{{isset($request) ? $request->keyword : '' }}" type="text">
					<label for="keyword">@lang('controller/ocorrencia.field_keyword')</label>
				</div>
			</div>

			<div class="row">
				@include('layouts/partials/form-buttons')
			</div>
		</form>
	</div>
</div>
