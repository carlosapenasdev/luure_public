<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalBusca" data-position="top" data-tooltip="@lang('controller/individuo.realizar_busca')">
	<i class="material-icons">search</i>
</a>
<div id="modalBusca" class="modal overflow-y-unset">
	<div class="modal-content">
		
		<h4>@lang('controller/individuo.realizar_busca')</h4>

		<form method="post" action="{{route($urlShow.'.buscar')}}" enctype="multipart/form-data">
			@csrf
			
			<div class="row">
				<div class="input-field col s4">
					<input id="nome" name="nome" value="{{ isset($request) ? $request->nome : '' }}" type="text">
					<label for="nome" class="active">@lang('controller/individuo.field_nome')</label>
				</div>
				<div class="input-field col s4">
					<input id="alcunha" name="alcunha" value="{{ isset($request) ? $request->alcunha : '' }}" type="text">
					<label for="alcunha" class="active">@lang('controller/individuo.field_alcunha')</label>
				</div>
				<div class="input-field col s4">
					<input id="mae" name="mae" value="{{ isset($request) ? $request->mae : '' }}" type="text">
					<label for="mae" class="active">@lang('controller/individuo.field_mae')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s4">
					<input id="pai" name="pai" value="{{ isset($request) ? $request->pai : '' }}" type="text">
					<label for="pai" class="active">@lang('controller/individuo.field_pai')</label>
				</div>

				<div class="input-field col s4">
					<input id="rg" name="rg" value="{{ isset($request) ? $request->rg : '' }}" type="text" class="mask-rg ">
					<label for="rg" class="active">@lang('controller/individuo.field_rg')</label>
				</div>
				<div class="input-field col s4">
					<input id="cpf" name="cpf" value="{{ isset($request) ? $request->cpf : '' }}" type="text" class="mask-cpf">
					<label for="cpf" class="active">@lang('controller/individuo.field_cpf')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s4">
					<select name="estabelecimento_prisional_id" id="estabelecimento_prisional_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($estabPris->sortBy('name') as $estabPri)
						<option {{ ((isset($request) && $request->estabelecimento_prisional_id == $estabPri->id) || (old('estabelecimento_prisional_id') == $estabPri->id) ) ? 'selected="selected"' : '' }} value="{{$estabPri->id}}">{{$estabPri->name}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_estabelecimento_prisional_id')</label>
				</div>
				<div class="input-field col s4">
					<select name="faccao_criminosa_id" id="faccao_criminosa_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($faccaos->sortBy('name') as $faccao)
						<option {{ ((isset($request) && $request->faccao_criminosa_id == $faccao->id) || (old('faccao_criminosa_id') == $faccao->id) ) ? 'selected="selected"' : '' }} value="{{$faccao->id}}">{{$faccao->name}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_faccao_criminosa_id')</label>
				</div>
				<div class="input-field col s4">
					<input id="funcao_faccao" name="funcao_faccao" value="{{ isset($request) ? $request->funcao_faccao : '' }}" type="text">
					<label for="funcao_faccao" class="active">@lang('controller/individuo.field_funcao_faccao')</label>
				</div>
			</div>
			
			@if(request()->is('publico-interno*'))
			<div class="row padding-1" style="padding-top: 0 !important; padding-left: 0 !important;">
				<div class="col s10">
					<h5 class="">@lang('controller/individuo.militar')</h5>	
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<select name="tipo_militar" id="tipo_militar" class="no-formSelect select-buscavel">
						<option value="" selected>@lang('common.todos')</option>

						@foreach($tiposMilitar as $tpMilitar)
						<option {{ ( isset($request) && isset($request->tipo_militar)  && $request->tipo_militar == $tpMilitar['id'] ) ? 'selected="selected"' : '' }} value="{{$tpMilitar['id']}}">@lang('controller/individuo.'.$tpMilitar['name'])</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_tipo_militar')</label>
				</div>
				<div class="input-field col s6">
					<select name="opm_id" id="opm_id" class="no-formSelect select-buscavel">
						<option value="" selected>@lang('common.todos')</option>

						@foreach($opms->sortBy('nome_completo') as $opm)
						<option {{  ( isset($request) && isset($request->opm_id) && $request->opm_id == $opm->id)  ? 'selected="selected"' : '' }} value="{{$opm->id}}">{{$opm->nome_completo}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_opm_id')</label>

				</div>
			</div>
			@endif

			<div class="row padding-1" style="padding-top: 0 !important; padding-left: 0 !important;">
				<div class="col s10">
					<h5 class="">@lang('controller/individuo.endereco_singular')</h5>	
				</div>
			</div>

			<div class="row">
				<div class="input-field col s2">
					<select name="endereco[estado_id]" id="endereco[estado_id]" class="no-formSelect select-estado select-buscavel">
						<option value="" selected>@lang('common.todos')</option>

						@foreach($estados as $estado)
						<option @if( isset($request) && $request->endereco['estado_id'] == $estado->id) selected="selected" @endif value="{{$estado->id}}">{{$estado->nome}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_estado_id')</label>
				</div>
				<div class="input-field col s2">
					<select name="endereco[cidade_id]" id="endereco[cidade_id]" class="no-formSelect select-cidade select-buscavel">
						<option value="" selected>@lang('common.todos')</option>

						@foreach($cidades as $cidade)
						<option @if( isset($request) && $request->endereco['cidade_id'] == $cidade->id ) selected="selected" @endif value="{{$cidade->id}}">{{$cidade->nome}}</option>					
						@endforeach


					</select>
					<label class="label-select2">@lang('controller/individuo.field_cidade_id')</label>
				</div>
				<div class="input-field col s2">
					<input id="endereco[rua]" name="endereco[rua]" value="{{ isset($request) ? $request->endereco['rua'] : '' }}" type="text">
					<label for="endereco[rua]" class="active">@lang('controller/individuo.field_rua')</label>
				</div>
				<div class="input-field col s2">
					<input id="endereco[numero]" name="endereco[numero]" value="{{ isset($request) ? $request->endereco['numero'] : '' }}" type="text">
					<label for="endereco[numero]" class="active">@lang('controller/individuo.field_numero')</label>
				</div>
				<div class="input-field col s2">
					<input id="endereco[bairro]" name="endereco[bairro]" value="{{ isset($request) ? $request->endereco['bairro'] : '' }}" type="text">
					<label for="endereco[bairro]" class="active">@lang('controller/individuo.field_bairro')</label>
				</div>
				<div class="input-field col s2">
					<input id="endereco[observacao]" name="endereco[observacao]" value="{{ isset($request) ? $request->endereco['observacao'] : '' }}" type="text">
					<label for="endereco[observacao]" class="active">@lang('controller/individuo.field_observacao')</label>
				</div>
			</div>

			<div class="row padding-1" style="padding-top: 0 !important; padding-left: 0 !important;">
				<div class="col s10">
					<h5 class="">@lang('controller/individuo.telefone_singular')</h5>	
				</div>
			</div>
			
			<div class="row">
				<div class="input-field col s3 offset-s3">
					<input id="telefone[telefone]" name="telefone[telefone]" value="{{ isset($request) ? $request->telefone['telefone'] : '' }}" type="text" class="mask-fone">
					<label for="telefone[telefone]" class="active">@lang('controller/individuo.field_telefone')</label>
				</div>
				<div class="input-field col s3">
					<input id="telefone[observacao]" name="telefone[observacao]" value="{{ isset($request) ? $request->telefone['observacao'] : '' }}" type="text">
					<label for="telefone[observacao]" class="active">@lang('controller/individuo.field_observacao')</label>
				</div>
			</div>

			<div class="row padding-1" style="padding-top: 0 !important; padding-left: 0 !important;">
				<div class="col s10">
					<h5 class="">@lang('controller/individuo.tatuagem')</h5>	
				</div>
			</div>

			<div class="row">
				<div class="input-field col s4">
					<select name="tatuagem[padrao_desenho_id]" id="tatuagem[padrao_desenho_id]" class="no-formSelect select-buscavel">
						<option value="" selected>@lang('common.todos')</option>

						@foreach($padraoDesenhos as $padraoDesenho)
						<option @if( (isset($request) && isset($request->tatuagem['padrao_desenho_id']) && $request->tatuagem['padrao_desenho_id'] == $padraoDesenho->id) ) selected="selected" @endif value="{{$padraoDesenho->id}}" data-icon="{{url($padraoDesenho->getArquivo())}}" class="">{{$padraoDesenho->name}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_padrao_desenho_id')</label>
				</div>
				<div class="input-field col s4">
					<select name="tatuagem[regiao_corpo_id]" id="tatuagem[regiao_corpo_id]" class="no-formSelect select-buscavel">
						<option value="" selected>@lang('common.todos')</option>

						@foreach($regiaoCorpos->sortBy('name') as $regiaoCorpo)
						<option @if( (isset($request) && isset($request->tatuagem['regiao_corpo_id']) && $request->tatuagem['regiao_corpo_id'] == $regiaoCorpo->id) ) selected="selected" @endif value="{{$regiaoCorpo->id}}">{{$regiaoCorpo->name}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/individuo.field_regiao_corpo_id')</label>
				</div>
				<div class="input-field col s4">
					<input id="tatuagem[detalhamento]" name="tatuagem[detalhamento]" value="{{ (isset($request) && isset($request->tatuagem['detalhamento']) && !empty($request->tatuagem['detalhamento']) ) ? $request->tatuagem['detalhamento'] : '' }}" type="text">
					<label for="tatuagem[detalhamento]" class="active">@lang('controller/individuo.field_detalhamento')</label>
				</div>
			</div>
			
			<div class="row">
				<div class="col s6">
					<div class="row padding-1" style="padding-top: 0 !important; padding-left: 0 !important;" id="linha-individuo">
						<div class="col s12">
							<h5 class="">@lang('controller/individuo.vinculos')</h5>	

							<div class="chips chips-autocomplete" id="chip-individuo"></div>
						</div>
					</div>
				</div>
				
				<div class="col s6">
					<div class="row padding-1" style="padding-top: 0 !important; padding-left: 0 !important;" id="linha-natureza">
						<div class="col s12">
							<h5 class="">@lang('controller/individuo.natureza_crimes')</h5>
							
							<div class="chips chips-autocomplete" id="chip-natureza"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<input id="observacoes" name="observacoes" value="{{isset($request) ? $request->observacoes : '' }}" type="text">
					<label for="observacoes">@lang('controller/individuo.field_observacoes')</label>
				</div>
			</div>
			
			

			

			<div class="row">
				@include('layouts/partials/form-buttons')
			</div>
		</form>
		
		
	</div>
</div>
@include('individuo/chip-vinculo-js')

<script type="text/javascript">
	
	document.addEventListener('DOMContentLoaded', function(){

		initChipIndividuo();
		configIndividuo();

		initChipNatureza();
		configIndividuo();

	}, false);


</script>