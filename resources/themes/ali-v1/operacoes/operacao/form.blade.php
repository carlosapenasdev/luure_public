@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($operacao))
	<form id="formulario" class="row" method="post" action="{{ route('operacao.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('operacao.update', $operacao->slug()) }}">
		<input type="hidden" name="id" value="{{ $operacao->slug() }}" />
		@method('PUT')
		@endif

		@csrf
		<input type="hidden" name="status" value="{{ !isset($operacao) ? empty(old('status')) ? App\Models\Operacao\Operacao::STATUS_ATIVA : old('status') : $operacao->status }}" />

		<div class="row">
			<div class="input-field col s12">
				<input id="nome" name="nome" value="{{ !isset($operacao) ? old('nome') : $operacao->nome }}" type="text" class="validate" required="required">
				<label for="nome" class="active">{{Lang::get('controller/operacao.field_nome')}}*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<input id="vara" name="vara" value="{{ !isset($operacao) ? old('vara') : $operacao->vara }}" type="text">
				<label for="vara" class="active">{{Lang::get('controller/operacao.field_vara')}}</label>
			</div>
			<div class="input-field col s6">
				<select name="cidade_id" id="cidade_id" class="validate" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($cidades as $cidade)
					<option {{ ( (isset($operacao) && $operacao->cidade_id == $cidade->id) || (old('cidade_id') == $cidade->id) || (!isset($operacao) && $cidade->id == $cidadeDefault->id) ) ? 'selected="selected"' : '' }} value="{{$cidade->id}}">{{$cidade->nome}}</option>
					@endforeach

				</select>
				<label data-error="Select an option">{{Lang::get('controller/operacao.field_cidade_id')}}*</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<input id="juiz" name="juiz" value="{{ !isset($operacao) ? old('juiz') : $operacao->juiz }}" type="text">
				<label for="juiz" class="active">{{Lang::get('controller/operacao.field_juiz')}}</label>
			</div>

			<div class="input-field col s6">
				<input id="promotor" name="promotor" value="{{ !isset($operacao) ? old('promotor') : $operacao->promotor }}" type="text">
				<label for="promotor" class="active">{{Lang::get('controller/operacao.field_promotor')}}</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<input id="data_inicio" name="data_inicio" value="{{ !isset($operacao) ? old('data_inicio') : formatar_data($operacao->data_inicio) }}" type="text" class="validate mask-data" required="required">
				<label for="data_inicio" class="active">{{Lang::get('controller/operacao.field_data_inicio')}}*</label>
			</div>
			{{--
			<div class="input-field col s6">
				<input id="data_termino" name="data_termino" value="{{ !isset($operacao) ? old('data_termino') : (!is_null($operacao->data_termino) ? formatar_data($operacao->data_termino) : '') }}" class="mask-data" type="text" readonly="readonly" disabled="disabled">
				<label for="data_termino" class="active">{{Lang::get('controller/operacao.field_data_termino')}}</label>
			</div>
			--}}
		</div>

		<div class="row" id="linha-individuo">
			<div class="input-field col s12">
				<p class="custom-chips" for="tag_title">@lang('controller/operacao.field_alvos')</p>
				<div class="chips chips-autocomplete" id="chip-individuo"></div>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="resumo" name="resumo" class="materialize-textarea validate" required="required">{{ !isset($operacao) ? old('resumo') : $operacao->resumo }}</textarea>
				<label for="resumo" class="active">{{Lang::get('controller/operacao.field_resumo')}}*</label>
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
	});
</script>

@endsection