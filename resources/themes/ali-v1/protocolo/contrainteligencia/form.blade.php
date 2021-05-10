@extends('layouts/form')

@section('css')
<style type="text/css">
	span.select2
	{
		margin-top:1em;
	}
</style>
@endsection



@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	<form id="formulario" class="row" method="post" action="{{ route('contrainteligencia.update', $contra->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $contra->slug() }}" />
		@method('PUT')

		@csrf

		<div class="row">
			@include('protocolo/cabecalho-titulo')
		</div>
		<div class="row">
			<div class="col s12">
				<h3 class="xl width-100 left">
					<b>{{Lang::get('controller/protocolo.field_dias_prazo_protocolo')}}</b>

					<span class="task-cat {{$protocolo->getCorVencimento()}} darken-4 xxl center">
						{{$protocolo->diasParaVencerInverso()}} {{trans_choice('data.dias', $protocolo->diasParaVencerInverso())}} {{$protocolo->prazo_final_formatado}} {{diaSemana($protocolo->getPrazoFinal())}}
					</span>
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<h3 class="xl width-100 left m-0">
					{{$protocolo->assunto_principal}}
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s6">
				<select name="agencia_de_id" id="agencia_de_id" class="validate no-formSelect select-buscavel" disabled>
					
					@foreach($agenciasDe->sortBy('nome')  as $agencia)
					<option {{ (($contra->agencia_de_id == $agencia->id) ) ? 'selected="selected"' : '' }} value="{{$agencia->id}}">{{$agencia->nome}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/contrainteligencia.field_agencia_de_id')*</label>
			</div>
			<div class="input-field col s6">
				<select name="agencia_para_id" id="agencia_para_id" class="validate no-formSelect select-buscavel" required="required" @if(!is_null($contra->agencia_para_id)) disabled @endif>
					<option value="" disabled selected>@lang('common.select')</option>
					@foreach($agenciasPara->sortBy('nome')  as $agencia)
					<option {{ (($contra->agencia_para_id == $agencia->id) ) ? 'selected="selected"' : '' }} value="{{$agencia->id}}">{{$agencia->nome}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/contrainteligencia.field_agencia_para_id')*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12">
				<input id="user_name" name="user_name" value="{{$contra->user->name}}" type="text" disabled="">
				<label for="user_name" class="active">@lang('controller/contrainteligencia.field_user_name')</label>
			</div>
		</div>
		<div class="row padding-1">
			<div class="col s10">
				<h5 class="">@lang('common.documentos')</h5>	
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<table class="striped">
					<tbody>
						@include('/layouts/partials/documentos-linha')
					</tbody>
				</table>
			</div>
		</div>

		@include('layouts/partials/form-buttons')

	</form>
</div>
@endsection

@section('js')

@endsection