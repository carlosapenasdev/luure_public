<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalBusca" data-position="top" data-tooltip="@lang('controller/protocolo.busca_title')">
	<i class="material-icons">search</i>
</a>
<div id="modalBusca" class="modal overflow-y-unset">
	<div class="modal-content">
		
		<h4>@lang('controller/protocolo.busca_title')</h4>
		
		<form method="post" action="{{route('protocolo.buscar')}}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="input-field col s12">
					<span class="mr-1">@lang('controller/protocolo.locais_pesquisa')</span>
					<span class="mr-2">
						<label>
							<input type="hidden" name="assunto_principal" id="assunto_principal" value="1">
							<input type="checkbox" name="assunto_principal_disabled" id="assunto_principal_disabled" checked="checked" disabled="disabled" value="1">
							<span>@lang('controller/protocolo.field_assunto_principal')</span>
						</label>
					</span>
					<span class="mr-2">
						<label>
							<input type="checkbox" name="necessidades_especificas" id="necessidades_especificas" {{ ( isset($request) && isset($request->necessidades_especificas) ) ? 'checked="checked"' : '' }} value="1">
							<span>@lang('controller/protocolo.field_necessidades_especificas')</span>
						</label>
					</span>
					<span class="mr-2">
						<label>
							
							@if(auth()->user()->isLevelAnalista())
							<input type="hidden" name="incluir_finalizados" id="incluir_finalizados" value="1">
							<input type="checkbox" name="incluir_finalizados_disabled" 	id="incluir_finalizados_disabled" checked="checked" disabled="disabled" value="1">
							@else
							<input type="checkbox" name="incluir_finalizados" id="incluir_finalizados" {{ ( isset($request) && isset($request->incluir_finalizados) ) ? 'checked="checked"' : '' }} value="1">
							@endif

							<span>@lang('controller/protocolo.incluir_finalizados')</span>
						</label>
					</span>
					<span class="mr-2">
						<label>
							<input type="checkbox" name="incluir_ocultos" id="incluir_ocultos" {{ ( isset($request) && isset($request->incluir_ocultos) ) ? 'checked="checked"' : '' }} value="1">
							<span>@lang('controller/protocolo.incluir_ocultos')</span>
						</label>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input id="id_protocolo" class="mask-integer" name="id_protocolo" value="{{isset($request) ? $request->id_protocolo : '' }}" type="text">
					<label for="id_protocolo">@lang('controller/protocolo.id_protocolo')</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="periodo_de" class="mask-data" name="periodo_de" value="{{isset($request) ? $request->periodo_de : '' }}" type="text">
					<label for="periodo_de">@lang('controller/protocolo.field_periodo_de')</label>
				</div>
				<div class="input-field col s6">
					<input id="periodo_ate" class="mask-data" name="periodo_ate" value="{{isset($request) ? $request->periodo_ate : '' }}" type="text">
					<label for="periodo_ate">@lang('controller/protocolo.field_periodo_ate')</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<select name="thematic_id" id="thematic_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($thematics->sortBy('motif') as $thematic)
						<option {{ ( isset($request) && $request->thematic_id == $thematic->id ) ? 'selected="selected"' : '' }} value="{{$thematic->id}}">{{$thematic->motif}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/protocolo.field_thematic_id')</label>
				</div>
				<div class="input-field col s6">
					<select name="user_analista_id" id="user_analista_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($users as $user)
						<option {{ ( isset($request) && $request->user_analista_id == $user->id ) ? 'selected="selected"' : '' }} value="{{$user->id}}" data-icon="{{url('/upload/user/profile/avatar-7.png')}}" class="circle">{{$user->name}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/protocolo.field_user_analista_id')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<select name="documento_tipo_origem_id" id="documento_tipo_origem_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($documentoTipoOrigens->sortBy('nome') as $documentoTipo)
						<option {{ ( isset($request) && $request->documento_tipo_origem_id == $documentoTipo->id ) ? 'selected="selected"' : '' }} value="{{$documentoTipo->id}}">{{$documentoTipo->nome}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/protocolo.field_documento_tipo_origem_id')</label>
				</div>
				<div class="input-field col s6">
					<input id="numero_origem" name="numero_origem" value="{{isset($request) ? $request->numero_origem : '' }}" type="text">
					<label for="numero_origem">@lang('controller/protocolo.numero_origem')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<select name="documento_tipo_ser_produzido_id" id="documento_tipo_ser_produzido_id" class="no-formSelect select-buscavel">
						<option value="" disabled selected>@lang('common.select')</option>

						@foreach($documentoTipos->sortBy('nome') as $documentoTipo)
						<option {{ ( isset($request) && $request->documento_tipo_ser_produzido_id == $documentoTipo->id ) ? 'selected="selected"' : '' }} value="{{$documentoTipo->id}}">{{$documentoTipo->nome}}</option>
						@endforeach

					</select>
					<label class="label-select2">@lang('controller/protocolo.field_documento_tipo_ser_produzido_id')</label>
				</div>
				<div class="input-field col s6">
					<input id="numero_produzido" name="numero_produzido" value="{{isset($request) ? $request->numero_produzido : '' }}" type="text">
					<label for="numero_produzido">@lang('controller/protocolo.numero_produzido')</label>
				</div>
			</div>

			<div class="row" id="linha-individuo">
				<div class="input-field col s12">
					<p class="custom-chips" for="tag_title">@lang('controller/protocolo.pessoas')</p>
					<div class="chips chips-autocomplete" id="chip-individuo"></div>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12">
					<input id="keyword" name="keyword" value="{{isset($request) ? $request->keyword : '' }}" type="text">
					<label for="keyword">@lang('controller/protocolo.field_keyword')</label>
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
	}, false);


</script>