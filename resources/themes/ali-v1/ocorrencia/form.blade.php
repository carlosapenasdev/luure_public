@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(isset($ocorrencia) && !empty($ocorrencia->id))
	<form id="formulario" class="row" method="post" action="{{ route('ocorrencias.update', $ocorrencia) }}">
		<input type="hidden" name="id" value="{{ $ocorrencia->slug() }}" />
		@method('PUT')
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('ocorrencias.store') }}">
		@endif

		@csrf

		<input type="hidden" name="confianca_geo" value="{{ isset($ocorrencia) ? $ocorrencia->confianca_geo : '0' }}" />

		<div class="row">
			<div class="input-field col s2">
				@if(!isset($ocorrencia))
				
				<input id="bou" name="bou" value="{{old('bou')}}" type="text" class="validate mask-bou search-unique" data-unique="{{route('ocorrencias.unique')}}" required="required">
				
				@else
				
				<input id="bou" name="bou" value="{{$ocorrencia->bou}}" type="text" class="validate mask-bou" required="required">

				@endif

				<label for="bou" class="active">@lang('controller/ocorrencia.field_bou')*</label>
			</div>

			<div class="input-field col s3">
				<select name="operacao_id" id="operacao_id" class="no-formSelect select-buscavel">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($operacaos->sortBy('nome') as $operacao)
					<option {{ ((isset($ocorrencia) && $ocorrencia->operacao_id == $operacao->id) || (old('operacao_id') == $operacao->id) ) ? 'selected="selected"' : '' }} value="{{$operacao->id}}">{{$operacao->nome}}</option>
					@endforeach

					@php
					unset($operacao);
					@endphp

				</select>
				<label class="label-select2">@lang('controller/ocorrencia.field_operacao')</label>
			</div>
			<div class="input-field col s3">
				<select name="ambiente_id" id="ambiente_id" class="no-formSelect select-buscavel validate" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($ambientes as $ambiente)
					<option {{ ((isset($ocorrencia) && $ocorrencia->ambiente_id == $ambiente->id) || (old('ambiente_id') == $ambiente->id) ) ? 'selected="selected"' : '' }} value="{{$ambiente->id}}">{{$ambiente->codigo_name}}</option>
					@endforeach

					@php
					unset($ambiente);
					@endphp

				</select>
				<label class="label-select2">@lang('controller/ocorrencia.field_ambiente')*</label>
			</div>

			<div class="input-field col s2">
				<input id="data" name="data" value="{{ !isset($ocorrencia) ? old('data') : $ocorrencia->data }}" type="text" class="validate mask-data" required="required">
				<label for="data" class="active">@lang('controller/ocorrencia.field_data')*</label>
			</div>

			<div class="input-field col s2">
				<input id="hora" name="hora" value="{{ !isset($ocorrencia) ? old('hora') : $ocorrencia->hora }}" type="text" class="validate mask-hora" required="required">
				<label for="hora" class="active">@lang('controller/ocorrencia.field_hora')*</label>
			</div>
		</div>

		<div class="row">
			
			<div class="input-field col s2">
				<select name="cidade_id" id="cidade_id" class="no-formSelect select-buscavel validate select-cidade" required="required">
					<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

					@foreach($cidades as $cidade)
					<option {{ ( (isset($ocorrencia) && $ocorrencia->cidade_id == $cidade->id) || (old('cidade_id') == $cidade->id) || (!isset($ocorrencia) && old('cidade_id') === null && $cidade->id == $cidadeDefault->id) ) ? 'selected="selected"' : '' }} value="{{$cidade->id}}">{{$cidade->nome}}</option>
					@endforeach


				</select>
				<label class="label-select2">@lang('controller/ocorrencia.field_cidade_id')*</label>
			</div>
			<div class="input-field col s3">
				<input id="rua" name="rua" value="{{ !isset($ocorrencia) ? old('rua') : $ocorrencia->rua }}" type="text" class="validate">
				<label for="rua" class="active">@lang('controller/ocorrencia.field_rua')*</label>
			</div>
			<div class="input-field col s1">
				<input id="numero" name="numero" value="{{ !isset($ocorrencia) ? old('numero') : $ocorrencia->numero }}" type="text" class="validate">
				<label for="numero" class="active">@lang('controller/ocorrencia.field_numero')*</label>
			</div>
			<div class="input-field col s2">
				<input id="bairro" name="bairro" value="{{ !isset($ocorrencia) ? old('bairro') : $ocorrencia->bairro }}" type="text" class="validate">
				<label for="bairro" class="active">@lang('controller/ocorrencia.field_bairro')*</label>
			</div>

			<div class="input-field col s2">
				<input id="geoX" name="geoX" value="{{ !isset($ocorrencia) ? old('geoX') : $ocorrencia->getLongitude() }}" type="text">
				<label for="geoX" class="active">@lang('controller/ocorrencia.field_geoX')</label>
			</div>

			<div class="input-field col s2">
				<input id="geoY" name="geoY" value="{{ !isset($ocorrencia) ? old('geoY') : $ocorrencia->getLatitude() }}" type="text">
				<label for="geoY" class="active">@lang('controller/ocorrencia.field_geoY')</label>
			</div>
		</div>

		<div class="row" id="linha-natureza">
			<div class="input-field col s12">
				<p class="custom-chips" for="tag_title">@lang('controller/ocorrencia.field_natureza')*</p>
				<div class="chips chips-autocomplete validate" id="chip-natureza"></div>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="10000" data-length="10000" id="descritivo" name="descritivo" class="materialize-textarea validate" required="required">{{ !isset($ocorrencia) ? old('descritivo') : $ocorrencia->descritivo }}</textarea>
				<label for="descritivo" class="active">@lang('controller/ocorrencia.field_descritivo')*</label>
			</div>
		</div>

		<div class="row" id="linha-individuo">
			<div class="input-field col s12">
				<p class="custom-chips" for="tag_title">@lang('controller/ocorrencia.field_presos')</p>
				<div class="chips chips-autocomplete" id="chip-individuo"></div>
			</div>
		</div>

		<div class="row padding-1">
			<div class="col s10">
				<h5 class="">@lang('controller/ocorrencia.veiculo')</h5>	
			</div>
			<div class="col s2">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 btn-veiculo" href="javascript:addElemento('veiculo')" data-position="top" data-tooltip="@lang('controller/ocorrencia.add_veiculo')">
					<i class="material-icons">add</i>
				</a>
			</div>
		</div>
		<input type="hidden" name="total_veiculo" id="total_veiculo" value="{{isset($ocorrencia) ? $ocorrencia->veiculos->count() : '0'}}">
		<div id="form-linhas-veiculo">
			@if(isset($ocorrencia))
			@foreach($ocorrencia->veiculos as $i => $veiculo)

			@php
			$LOCAL 		= 'veiculo';
			$ID_INPUT 	= ($i+1);
			@endphp

			@include('ocorrencia/form-veiculo')
			@endforeach

			@php
			unset($veiculo);
			@endphp
			
			@endif
		</div>

		@if(!isset($editar) || $editar===true)
		@include('layouts/partials/form-buttons')
		@endif
	</form>

	<div class="hide" id="form-veiculo">

		@php
		$LOCAL 		= 'veiculo';
		$ID_INPUT 	= '{ID_INPUT}';
		@endphp

		@include('ocorrencia/form-veiculo')

	</div>

</div>
@endsection

@section('js')

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/cleave-phone.br.js')!!}

{!!Theme::js('js/scripts/mascaras.js')!!}

@include('individuo/chip-natureza-js')
@include('individuo/chip-vinculo-js')

@include('layouts/partials/add-delete-elementos')
@include('layouts/partials/unique')

<script type="text/javascript">
	$(document).ready(function()
	{	
		initChipNatureza();
		configNatureza();

		initChipIndividuo();
		configIndividuo();

		@if(isset($editar) && $editar===false)
		$('#formulario *').prop('disabled', true);
		$('.btn-veiculo').addClass('disabled').prop('disabled', true);
		$('.chip i.close').remove();
		@endif

	});

	function configVeiculo()
	{
		$('#form-linhas-veiculo .mask-placa').not('.has-mask-placa').toArray().forEach(function(field)
		{
			mascaraPlaca(field);
			$(field).addClass('has-mask-placa');
		});

	}

</script>


@endsection