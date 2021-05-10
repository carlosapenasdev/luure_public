@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($estatistica))
	<form id="formulario" class="row" method="post" action="{{ route('estatistica.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('estatistica.update', $estatistica) }}">
		<input type="hidden" name="id" value="{{ $estatistica->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="row">
			<div class="input-field col s4">
				<select name="acao_estatistica_id" id="acao_estatistica_id" class="validate" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($acaoEstatisticas as $acaoEstatistica)
					<option {{ ((isset($estatistica) && $estatistica->acao_estatistica_id == $acaoEstatistica->id) || (old('acao_estatistica_id') == $acaoEstatistica->id) ) ? 'selected="selected"' : '' }} value="{{$acaoEstatistica->id}}">{{$acaoEstatistica->name}}</option>
					@endforeach

				</select>
				<label data-error="Select an option">{{Lang::get('controller/estatistica.field_acao_estatistica_id')}}*</label>
			</div>
			<div class="input-field col s4">
				<select name="natureza_estatistica_id" id="natureza_estatistica_id" class="validate" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($naturezaEstatisticas as $naturezaEstatistica)
					<option {{ ((isset($estatistica) && $estatistica->natureza_estatistica_id == $naturezaEstatistica->id) || (old('natureza_estatistica_id') == $naturezaEstatistica->id) ) ? 'selected="selected"' : '' }} value="{{$naturezaEstatistica->id}}">{{$naturezaEstatistica->name}}</option>
					@endforeach

				</select>
				<label data-error="Select an option">{{Lang::get('controller/estatistica.field_natureza_estatistica_id')}}*</label>
			</div>
			<div class="input-field col s4">
				<select name="origem_estatistica_id" id="origem_estatistica_id" class="validate" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($origemEstatisticas as $origemEstatistica)
					<option {{ ((isset($estatistica) && $estatistica->origem_estatistica_id == $origemEstatistica->id) || (old('origem_estatistica_id') == $origemEstatistica->id) ) ? 'selected="selected"' : '' }} value="{{$origemEstatistica->id}}">{{$origemEstatistica->name}}</option>
					@endforeach

				</select>
				<label data-error="Select an option">{{Lang::get('controller/estatistica.field_origem_estatistica_id')}}*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="data" name="data" value="{{ !isset($estatistica) ? old('data') : formatar_data($estatistica->data) }}" type="text" class="validate mask-data" required="required">
				<label for="data" class="active">{{Lang::get('controller/estatistica.field_data')}}*</label>
			</div>
			<div class="input-field col s4">

				<select name="operacao_id" id="operacao_id">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($operacaos->sortBy('nome') as $operacao)
					<option {{ ((isset($estatistica) && $estatistica->operacao_id == $operacao->id) || (old('operacao_id') == $operacao->id) ) ? 'selected="selected"' : '' }} value="{{$operacao->id}}">{{$operacao->nome}}</option>
					@endforeach

					@php
					unset($operacao);
					@endphp

				</select>
				<label data-error="Select an option">{{Lang::get('controller/estatistica.field_operacao')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="documentacao" name="documentacao" value="{{ !isset($estatistica) ? old('documentacao') : $estatistica->documentacao }}" type="text">
				<label for="documentacao" class="active">{{Lang::get('controller/estatistica.field_documentacao')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="numero_boletim" name="numero_boletim" value="{{ !isset($estatistica) ? old('numero_boletim') : $estatistica->numero_boletim }}" type="text" class="validate" required="required">
				<label for="numero_boletim" class="active">{{Lang::get('controller/estatistica.field_numero_boletim')}}*</label>
			</div>
			<div class="input-field col s4">
				<input id="pessoas_detidas" name="pessoas_detidas" value="{{ !isset($estatistica) ? old('pessoas_detidas', 0) : $estatistica->pessoas_detidas }}" type="text" class="mask-integer" readonly="">
				<label for="pessoas_detidas" class="active">{{Lang::get('controller/estatistica.field_pessoas_detidas')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="maconha" name="maconha" value="{{ !isset($estatistica) ? old('maconha', '0,000') : $estatistica->maconha }}" type="text" class="mask-float3">
				<label for="maconha" class="active">{{Lang::get('controller/estatistica.field_maconha')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="maconha_planta" name="maconha_planta" value="{{ !isset($estatistica) ? old('maconha_planta', 0) : $estatistica->maconha_planta }}" type="text" class="mask-integer">
				<label for="maconha_planta" class="active">{{Lang::get('controller/estatistica.field_maconha_planta')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="crack" name="crack" value="{{ !isset($estatistica) ? old('crack', '0,000') : $estatistica->crack }}" type="text" class="mask-float3">
				<label for="crack" class="active">{{Lang::get('controller/estatistica.field_crack')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="cocaina" name="cocaina" value="{{ !isset($estatistica) ? old('cocaina', '0,000') : $estatistica->cocaina }}" type="text" class="mask-float3">
				<label for="cocaina" class="active">{{Lang::get('controller/estatistica.field_cocaina')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="lsd" name="lsd" value="{{ !isset($estatistica) ? old('lsd', 0) : $estatistica->lsd }}" type="text" class="mask-integer">
				<label for="lsd" class="active">{{Lang::get('controller/estatistica.field_lsd')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="ecstasy" name="ecstasy" value="{{ !isset($estatistica) ? old('ecstasy', 0) : $estatistica->ecstasy }}" type="text" class="mask-integer">
				<label for="ecstasy" class="active">{{Lang::get('controller/estatistica.field_ecstasy')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="revolver" name="revolver" value="{{ !isset($estatistica) ? old('revolver', 0) : $estatistica->revolver }}" type="text" class="mask-integer">
				<label for="revolver" class="active">{{Lang::get('controller/estatistica.field_revolver')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="pistola" name="pistola" value="{{ !isset($estatistica) ? old('pistola', 0) : $estatistica->pistola }}" type="text" class="mask-integer">
				<label for="pistola" class="active">{{Lang::get('controller/estatistica.field_pistola')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="garrucha" name="garrucha" value="{{ !isset($estatistica) ? old('garrucha', 0) : $estatistica->garrucha }}" type="text" class="mask-integer">
				<label for="garrucha" class="active">{{Lang::get('controller/estatistica.field_garrucha')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="espingarda" name="espingarda" value="{{ !isset($estatistica) ? old('espingarda', 0) : $estatistica->espingarda }}" type="text" class="mask-integer">
				<label for="espingarda" class="active">{{Lang::get('controller/estatistica.field_espingarda')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="carabina" name="carabina" value="{{ !isset($estatistica) ? old('carabina', 0) : $estatistica->carabina }}" type="text" class="mask-integer">
				<label for="carabina" class="active">{{Lang::get('controller/estatistica.field_carabina')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="municoes" name="municoes" value="{{ !isset($estatistica) ? old('municoes', 0) : $estatistica->municoes }}" type="text" class="mask-integer">
				<label for="municoes" class="active">{{Lang::get('controller/estatistica.field_municoes')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="dinheiro" name="dinheiro" value="{{ !isset($estatistica) ? old('dinheiro', 0) : $estatistica->dinheiro }}" type="text" class="mask-float">
				<label for="dinheiro" class="active">{{Lang::get('controller/estatistica.field_dinheiro')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="veiculo_fr" name="veiculo_fr" value="{{ !isset($estatistica) ? old('veiculo_fr', 0) : $estatistica->veiculo_fr }}" type="text" class="mask-integer">
				<label for="veiculo_fr" class="active">{{Lang::get('controller/estatistica.field_veiculo_fr')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="veiculo_transito" name="veiculo_transito" value="{{ !isset($estatistica) ? old('veiculo_transito', 0) : $estatistica->veiculo_transito }}" type="text" class="mask-integer">
				<label for="veiculo_transito" class="active">{{Lang::get('controller/estatistica.field_veiculo_transito')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="veiculo_ocorrencia" name="veiculo_ocorrencia" value="{{ !isset($estatistica) ? old('veiculo_ocorrencia', 0) : $estatistica->veiculo_ocorrencia }}" type="text" class="mask-integer">
				<label for="veiculo_ocorrencia" class="active">{{Lang::get('controller/estatistica.field_veiculo_ocorrencia')}}</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="celulares" name="celulares" value="{{ !isset($estatistica) ? old('celulares', 0) : $estatistica->celulares }}" type="text" class="mask-integer">
				<label for="celulares" class="active">{{Lang::get('controller/estatistica.field_celulares')}}</label>
			</div>
			<div class="input-field col s4">
				<input id="balancas" name="balancas" value="{{ !isset($estatistica) ? old('balancas', 0) : $estatistica->balancas }}" type="text" class="mask-integer">
				<label for="balancas" class="active">{{Lang::get('controller/estatistica.field_balancas')}}</label>
			</div>
		</div>
		<div class="row" id="linha-individuo">
			<div class="input-field col s12">
				<p class="custom-chips" for="tag_title">@lang('controller/estatistica.field_presos')</p>
				<div class="chips chips-autocomplete" id="chip-individuo"></div>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="outros" name="outros" class="materialize-textarea">{{ !isset($estatistica) ? old('outros') : $estatistica->outros }}</textarea>
				<label for="outros" class="active">{{Lang::get('controller/estatistica.field_outros')}}</label>
			</div>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}

@include('individuo/chip-vinculo-js')

<script type="text/javascript">
	
	$( document ).ready(function()
	{
		initChipIndividuo();
		configIndividuo();

		@if(isset($editar) && $editar===false)
		$('#formulario *').prop('disabled', true);
		$('.chip i.close').remove();
		@endif
	});

	function onChipAddedEvent()
	{
		somatorioPresos();
	}

	function onChipDeletedEvent()
	{
		somatorioPresos();
	}

	function somatorioPresos()
	{
		let presos = $('#linha-individuo input[type=hidden]').length;

		$('#pessoas_detidas').val(presos);
	}
</script>

@endsection