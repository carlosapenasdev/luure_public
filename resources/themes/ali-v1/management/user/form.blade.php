@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($user))
	<form id="formulario" class="row" method="post" action="{{ route('user.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('user.update', $user->slug()) }}">
		<input type="hidden" name="id" value="{{ $user->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="row">
			<div class="col s12 mb-1">
				<h5>@lang('controller/user.area_usuario')</h5>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="antiguidade" name="antiguidade" value="{{ !isset($user) ? old('antiguidade') : $user->antiguidade }}" type="text" class="validate mask-integer" required="required">
				<label for="antiguidade" class="active">@lang('controller/user.field_antiguidade')*</label>
			</div>
			<div class="input-field col s4">
				<input id="nome_guerra" name="nome_guerra" value="{{ !isset($user) ? old('nome_guerra') : $user->nome_guerra }}" type="text" class="validate" required="required">
				<label for="nome_guerra" class="active">@lang('controller/user.field_nome_guerra')*</label>
			</div>
			<div class="input-field col s4">
				<input id="nome_completo" name="nome_completo" value="{{ !isset($user) ? old('nome_completo') : $user->nome_completo }}" type="text" class="validate" required="required">
				<label for="nome_completo" class="active">@lang('controller/user.field_nome_completo')*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<select name="posto_graduacao_id" id="posto_graduacao_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($postoGraduacaos as $posto)
					<option {{ ((isset($user) && $user->posto_graduacao_id == $posto->id) || (old('posto_graduacao_id') == $posto->id) ) ? 'selected="selected"' : '' }} value="{{$posto->id}}">{{$posto->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/postograduacao.name_singular')*</label>
			</div>
			<div class="input-field col s4">
				<select name="escolaridade_id" id="escolaridade_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($escolaridades as $escolaridade)
					<option {{ ((isset($user) && $user->escolaridade_id == $escolaridade->id) || (old('escolaridade_id') == $escolaridade->id) ) ? 'selected="selected"' : '' }} value="{{$escolaridade->id}}">{{$escolaridade->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/escolaridade.name_singular')*</label>
			</div>
			<div class="input-field col s4">
				<select name="area_formacao_id" id="area_formacao_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($areaFormacaos as $areaFormacao)
					<option {{ ((isset($user) && $user->area_formacao_id == $areaFormacao->id) || (old('area_formacao_id') == $areaFormacao->id) ) ? 'selected="selected"' : '' }} value="{{$areaFormacao->id}}">{{$areaFormacao->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/areaformacao.name_singular')*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="rg" name="rg" value="{{ !isset($user) ? old('rg') : $user->rg }}" type="text" class="validate" required="required">
				<label for="rg" class="active">@lang('controller/user.field_rg')*</label>
			</div>
			<div class="input-field col s4">
				<input id="cpf" name="cpf" value="{{ !isset($user) ? old('cpf') : $user->cpf }}" type="text" class="validate mask-cpf" required="required">
				<label for="cpf" class="active">@lang('controller/user.field_cpf')*</label>
			</div>
			<div class="input-field col s4">
				<input id="titulo_eleitor" name="titulo_eleitor" value="{{ !isset($user) ? old('titulo_eleitor') : $user->titulo_eleitor }}" type="text" class="validate mask-titulo-eleitor" required="required">
				<label for="titulo_eleitor" class="active">@lang('controller/user.field_titulo_eleitor')*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="data_ingresso" name="data_ingresso" value="{{ !isset($user) ? old('data_ingresso') : (!empty($user->data_ingresso) ? formatar_data($user->data_ingresso) : '') }}" type="text" class="validate mask-data" required="required">
				<label for="data_ingresso" class="active">@lang('controller/user.field_data_ingresso')*</label>
			</div>
			<div class="input-field col s4">
				<input id="data_saida" name="data_saida" value="{{ !isset($user) ? old('data_saida') : (!empty($user->data_saida) ? formatar_data($user->data_saida) : '') }}" type="text" disabled="disabled" readonly="readonly">
				<label for="data_saida" class="active">@lang('controller/user.field_data_saida')</label>
			</div>
			<div class="input-field col s4">
				<select name="role_id" id="role_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>
					@foreach($roles->sortBy('name') as $role)
					<option {{ ((isset($user) && $user->hasRole($role->slug)) || (old('role_id') == $role->id) ) ? 'selected="selected"' : '' }} value="{{$role->id}}">{{$role->name}}</option>
					@endforeach
				</select>
				<label class="label-select2">@lang('controller/role.name_singular')*</label>
			</div>
		</div>

		@role(root|sysadmin)
		<div class="row">
			<div class="input-field col s4 offset-s4">
				<select name="agencia_id" id="agencia_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($agencias as $agencia)
					<option {{ ((isset($user) && $user->agencia_id == $agencia->id) || (old('agencia_id') == $agencia->id) ) ? 'selected="selected"' : '' }} value="{{$agencia->id}}">{{$agencia->nome}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/agencia.name_singular')*</label>
			</div>
		</div>
		@endrole

		<div class="row">
			<div class="col s12 mb-1">
				<h5>@lang('controller/user.area_contato')</h5>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				<input id="endereco" name="endereco" value="{{ !isset($user) ? old('endereco') : $user->endereco }}" type="text" class="validate" required="required">
				<label for="endereco" class="active">@lang('controller/user.field_endereco')*</label>
			</div>
			<div class="input-field col s4">
				<input id="bairro" name="bairro" value="{{ !isset($user) ? old('bairro') : $user->bairro }}" type="text" class="validate" required="required">
				<label for="bairro" class="active">@lang('controller/user.field_bairro')*</label>
			</div>
			<div class="input-field col s4">
				<input id="cidade" name="cidade" value="{{ !isset($user) ? old('cidade') : $user->cidade }}" type="text" class="validate" required="required">
				<label for="cidade" class="active">@lang('controller/user.field_cidade')*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="fone_celular" name="fone_celular" value="{{ !isset($user) ? old('fone_celular') : $user->fone_celular }}" type="text" class="validate mask-fone" required="required">
				<label for="fone_celular" class="active">@lang('controller/user.field_fone_celular')*</label>
			</div>
			<div class="input-field col s4">
				<input id="fone_residencial" name="fone_residencial" value="{{ !isset($user) ? old('fone_residencial') : $user->fone_residencial }}" type="text" class="mask-fone">
				<label for="fone_residencial" class="active">@lang('controller/user.field_fone_residencial')</label>
			</div>
			<div class="input-field col s4">
				<input id="fone_recado" name="fone_recado" value="{{ !isset($user) ? old('fone_recado') : $user->fone_recado }}" type="text" class="mask-fone">
				<label for="fone_recado" class="active">@lang('controller/user.field_fone_recado')</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<input id="email" name="email" value="{{ !isset($user) ? old('email') : $user->email }}" type="email" class="validate" required="required">
				<label for="email" class="active">@lang('controller/user.field_email')*</label>
			</div>
			<div class="input-field col s6">
				<input id="email_secundario" name="email_secundario" value="{{ !isset($user) ? old('email_secundario') : $user->email_secundario }}" type="email">
				<label for="email_secundario" class="active">@lang('controller/user.field_email_secundario')</label>
			</div>

			
		</div>

		<div class="row">
			<div class="col s12 mb-1">
				<h5>@lang('controller/user.area_armamento')</h5>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				<input id="arma_01_modelo" name="arma_01_modelo" value="{{ !isset($user) ? old('arma_01_modelo') : $user->arma_01_modelo }}" type="text" class="validate" required="required">
				<label for="arma_01_modelo" class="active">@lang('controller/user.field_arma_01_modelo')*</label>
			</div>
			<div class="input-field col s4">
				<input id="arma_01_serie" name="arma_01_serie" value="{{ !isset($user) ? old('arma_01_serie') : $user->arma_01_serie }}" type="text" class="validate" required="required">
				<label for="arma_01_serie" class="active">@lang('controller/user.field_arma_01_serie')*</label>
			</div>
			<div class="input-field col s4">
				<input id="arma_01_patrimonio" name="arma_01_patrimonio" value="{{ !isset($user) ? old('arma_01_patrimonio') : $user->arma_01_patrimonio }}" type="text" class="validate" required="required">
				<label for="arma_01_patrimonio" class="active">@lang('controller/user.field_arma_01_patrimonio')*</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s4">
				<input id="arma_02_modelo" name="arma_02_modelo" value="{{ !isset($user) ? old('arma_02_modelo') : $user->arma_02_modelo }}" type="text">
				<label for="arma_02_modelo" class="active">@lang('controller/user.field_arma_02_modelo')</label>
			</div>
			<div class="input-field col s4">
				<input id="arma_02_serie" name="arma_02_serie" value="{{ !isset($user) ? old('arma_02_serie') : $user->arma_02_serie }}" type="text">
				<label for="arma_02_serie" class="active">@lang('controller/user.field_arma_02_serie')</label>
			</div>
			<div class="input-field col s4">
				<input id="arma_02_patrimonio" name="arma_02_patrimonio" value="{{ !isset($user) ? old('arma_02_patrimonio') : $user->arma_02_patrimonio }}" type="text">
				<label for="arma_02_patrimonio" class="active">@lang('controller/user.field_arma_02_patrimonio')</label>
			</div>
		</div>

		<div class="row">
			<div class="col s12 mb-1">
				<h5>@lang('controller/user.area_cursos')</h5>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s2">
				<select name="ciai" id="ciai" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>
					<option {{ ((isset($user) && $user->ciai == 0) || (old('ciai') == 0) ) ? 'selected="selected"' : '' }} value="0">@lang('controller/user.field_ciai_0')</option>
					<option {{ ((isset($user) && $user->ciai == 1) || (old('ciai') == 1) ) ? 'selected="selected"' : '' }} value="1">@lang('controller/user.field_ciai_1')</option>
				</select>
				<label for="ciai" class="active">@lang('controller/user.field_ciai')*</label>
			</div>
			<div class="input-field col s2">
				<input id="ciclo_ano" name="ciclo_ano" value="{{ !isset($user) ? old('ciclo_ano') : $user->ciclo_ano }}" type="text">
				<label for="ciclo_ano" class="active">@lang('controller/user.field_ciclo_ano')</label>
			</div>
			<div class="input-field col s2">
				<select name="operacoes_inteligencia" id="operacoes_inteligencia" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>
					<option {{ ((isset($user) && $user->operacoes_inteligencia == 0) || (old('operacoes_inteligencia') == 0) ) ? 'selected="selected"' : '' }} value="0">@lang('controller/user.field_operacoes_inteligencia_0')</option>
					<option {{ ((isset($user) && $user->operacoes_inteligencia == 1) || (old('operacoes_inteligencia') == 1) ) ? 'selected="selected"' : '' }} value="1">@lang('controller/user.field_operacoes_inteligencia_1')</option>
				</select>
				<label for="operacoes_inteligencia" class="label-select2">@lang('controller/user.field_operacoes_inteligencia')*</label>
			</div>
			<div class="input-field col s2">
				<input id="operacoes_local_ano" name="operacoes_local_ano" value="{{ !isset($user) ? old('operacoes_local_ano') : $user->operacoes_local_ano }}" type="text">
				<label for="operacoes_local_ano" class="label-select2">@lang('controller/user.field_operacoes_local_ano')</label>
			</div>
			<div class="input-field col s2">
				<select name="mpc" id="mpc" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>
					<option {{ ((isset($user) && $user->mpc == 0) || (old('mpc') == 0) ) ? 'selected="selected"' : '' }} value="0">@lang('controller/user.field_mpc_0')</option>
					<option {{ ((isset($user) && $user->mpc == 1) || (old('mpc') == 1) ) ? 'selected="selected"' : '' }} value="1">@lang('controller/user.field_mpc_1')</option>
				</select>
				<label for="mpc" class="label-select2">@lang('controller/user.field_mpc')*</label>
			</div>
			<div class="input-field col s2">
				<input id="mpc_local_ano" name="mpc_local_ano" value="{{ !isset($user) ? old('mpc_local_ano') : $user->mpc_local_ano }}" type="text">
				<label for="mpc_local_ano" class="label-select2">@lang('controller/user.field_mpc_local_ano')</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s3">
				<select name="sem_nivelamento" id="sem_nivelamento" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>
					<option {{ ((isset($user) && $user->sem_nivelamento == 0) || (old('sem_nivelamento') == 0) ) ? 'selected="selected"' : '' }} value="0">@lang('controller/user.field_sem_nivelamento_0')</option>
					<option {{ ((isset($user) && $user->sem_nivelamento == 1) || (old('sem_nivelamento') == 1) ) ? 'selected="selected"' : '' }} value="1">@lang('controller/user.field_sem_nivelamento_1')</option>
				</select>
				<label for="sem_nivelamento" class="label-select2">@lang('controller/user.field_sem_nivelamento')*</label>
			</div>
		</div>
		@if(!isset($readonly) || $readonly == false)
		@include('layouts/partials/form-buttons')
		@endif

		@role(root|chefe|adjunto)

		@include('management/user/historico')
		
		@endrole
	</form>
</div>
@endsection

@section('js')

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/cleave-phone.br.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}

@if(isset($readonly) && $readonly == true)
<script type="text/javascript">
	$(document).ready(function()
	{
		$('input,select').toArray().forEach(function(field)
		{
			$(field).attr('disabled', 'disabled').attr('readonly', 'readonly');
		});
	});
</script>
@endif

@endsection