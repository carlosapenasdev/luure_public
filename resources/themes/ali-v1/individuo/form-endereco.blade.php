<div class="row pl-1 pr-1" id="linha-{{$LOCAL}}-{{$ID_INPUT}}">
	@if(isset($endereco))
	<input type="hidden" name="endereco[{{$ID_INPUT}}][endereco_id]" id="endereco[{{$ID_INPUT}}][endereco_id]" value="{{$endereco->id}}">
	@endif
	<div class="input-field col s2">
		<select name="endereco[{{$ID_INPUT}}][estado_id]" id="estado_id{{$ID_INPUT}}" class="validate no-formSelect select-estado select-buscavel" required="required">
			<option value="" disabled="disabled"  @if( !isset($endereco)) selected="selected" @endif>@lang('common.select')</option>

			@foreach($estados as $estado)
			<option @if( (isset($endereco) && $endereco->estado_id == $estado->id) || (old('estado_id') == $estado->id) || (!isset($endereco) && $estado->id == $estadoDefault->id) ) selected="selected" @endif value="{{$estado->id}}">{{$estado->nome}}</option>					
			@endforeach

		</select>
		<label class="label-select2">@lang('controller/individuo.field_estado_id')*</label>
	</div>
	<div class="input-field col s2">
		<select name="endereco[{{$ID_INPUT}}][cidade_id]" id="cidade_id{{$ID_INPUT}}" class="validate no-formSelect select-cidade select-buscavel" required="required">
			<option value="" disabled="disabled" selected="selected">@lang('common.select')</option>

			@php
			
				$cidadesOld = $cidades;
				if(isset($endereco))
				{
					$cidades = $endereco->estado->cidades;
				}
			@endphp

			@foreach($cidades as $cidade)
			<option @if( (isset($endereco) && $endereco->cidade_id == $cidade->id) || (old('cidade_id') == $cidade->id) || (!isset($endereco) && $cidade->id == $cidadeDefault->id) ) selected="selected" @endif value="{{$cidade->id}}">{{$cidade->nome}}</option>					
			@endforeach
			
			@php
				$cidades = $cidadesOld;
			@endphp


		</select>
		<label class="label-select2">@lang('controller/individuo.field_cidade_id')*</label>
	</div>
	<div class="input-field col s2">
		<input id="rua{{$ID_INPUT}}" name="endereco[{{$ID_INPUT}}][rua]" value="{{ !isset($endereco) ? old('rua') : $endereco->rua }}" type="text">
		<label for="rua{{$ID_INPUT}}" class="active">@lang('controller/individuo.field_rua')</label>
	</div>
	<div class="input-field col s1">
		<input id="numero{{$ID_INPUT}}" name="endereco[{{$ID_INPUT}}][numero]" value="{{ !isset($endereco) ? old('numero') : $endereco->numero }}" type="text">
		<label for="numero{{$ID_INPUT}}" class="active">@lang('controller/individuo.field_numero')</label>
	</div>
	<div class="input-field col s2">
		<input id="bairro{{$ID_INPUT}}" name="endereco[{{$ID_INPUT}}][bairro]" value="{{ !isset($endereco) ? old('bairro') : $endereco->bairro }}" type="text">
		<label for="bairro{{$ID_INPUT}}" class="active">@lang('controller/individuo.field_bairro')</label>
	</div>
	<div class="input-field col s2">
		<input id="endereco_observacao{{$ID_INPUT}}" name="endereco[{{$ID_INPUT}}][observacao]" value="{{ !isset($endereco) ? old('endereco_observacao') : $endereco->observacao }}" type="text">
		<label for="endereco_observacao{{$ID_INPUT}}" class="active">@lang('controller/individuo.field_observacao')</label>
	</div>
	<div class="input-field col s1 area-acao">
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:deletarElemento('{{$LOCAL}}', '{{$ID_INPUT}}' {{ isset($endereco) ? ", '".$endereco->slug()."'" : '' }});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove-{{$LOCAL}}-{{$ID_INPUT}}">
			<i class="material-icons">cancel</i>
		</a>
	</div>
</div>