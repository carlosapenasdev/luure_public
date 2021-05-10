<div class="row pl-1 pr-1" id="linha-{{$LOCAL}}-{{$ID_INPUT}}">
	@if(isset($tatuagem))
	<input type="hidden" name="tatuagem[{{$ID_INPUT}}][tatuagem_id]" id="tatuagem[{{$ID_INPUT}}][tatuagem_id]" value="{{$tatuagem->id}}">
	@endif
	<div class="input-field col s6">
		<select name="tatuagem[{{$ID_INPUT}}][padrao_desenho_id]" id="padrao_desenho_id{{$ID_INPUT}}" class="validate no-formSelect select-buscavel" required="required">
			<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

			@foreach($padraoDesenhos as $padraoDesenho)
			<option @if( (isset($tatuagem) && $tatuagem->padrao_desenho_id == $padraoDesenho->id) || (old('padrao_desenho_id') == $padraoDesenho->id) ) selected="selected" @endif value="{{$padraoDesenho->id}}" data-icon="{{url($padraoDesenho->getArquivo())}}" class="">{{$padraoDesenho->name}}</option>
			@endforeach

		</select>
		<label class="label-select2">@lang('controller/individuo.field_padrao_desenho_id')*</label>
	</div>
	<div class="input-field col s5">
		<select name="tatuagem[{{$ID_INPUT}}][regiao_corpo_id]" id="regiao_corpo_id{{$ID_INPUT}}" class="validate no-formSelect select-buscavel" required="required">
			<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

			@foreach($regiaoCorpos->sortBy('name') as $regiaoCorpo)
			<option @if( (isset($tatuagem) && $tatuagem->regiao_corpo_id == $regiaoCorpo->id) || (old('regiao_corpo_id') == $regiaoCorpo->id) ) selected="selected" @endif value="{{$regiaoCorpo->id}}">{{$regiaoCorpo->name}}</option>
			@endforeach

		</select>
		<label class="label-select2">@lang('controller/individuo.field_regiao_corpo_id')*</label>
	</div>
	<div class="input-field col s1 area-acao">
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:deletarElemento('{{$LOCAL}}', '{{$ID_INPUT}}' {{ isset($tatuagem) ? ", '".$tatuagem->slug()."'" : '' }});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove-{{$LOCAL}}-{{$ID_INPUT}}">
			<i class="material-icons">cancel</i>
		</a>
	</div>

	<div class="input-field col s6">
		<textarea  maxlength="2000" data-length="2000" id="detalhamento{{$ID_INPUT}}" name="tatuagem[{{$ID_INPUT}}][detalhamento]" class="materialize-textarea" style="min-height: 200px; max-height: 200px;">@if(isset($tatuagem)){{$tatuagem->detalhamento}}@endif</textarea>
		<label for="detalhamento{{$ID_INPUT}}" class="active">{{Lang::get('controller/individuo.field_detalhamento')}}</label>
	</div>
	<div class="input-field col s6">
		<input type="file" name="tatuagem[{{$ID_INPUT}}][tatuagem]" id="tatuagem{{$ID_INPUT}}" class="not-dropify dropify-crop parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($tatuagem) && !empty($tatuagem->tatuagem)) default-file="{{url($tatuagem->tatuagem)}}" value="{{$tatuagem->tatuagem}}" value="{{$tatuagem->tatuagem}}" @endif />
		<input type="hidden" name="tatuagem[{{$ID_INPUT}}][tatuagem_cropped]" class="input_cropped">
	</div>
</div>