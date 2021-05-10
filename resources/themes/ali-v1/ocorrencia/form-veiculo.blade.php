<div class="row pl-1 pr-1" id="linha-{{$LOCAL}}-{{$ID_INPUT}}">
	@if(isset($veiculo))
	<input type="hidden" name="veiculo[{{$ID_INPUT}}][veiculo_id]" id="veiculo[{{$ID_INPUT}}][veiculo_id]" value="{{$veiculo->id}}">
	@endif
	
	<div class="input-field col s3 offset-s1">
		<input id="veiculo[{{$ID_INPUT}}][marcamodelo]" name="veiculo[{{$ID_INPUT}}][marcamodelo]" value="{{ isset($veiculo) ? $veiculo->marcamodelo : '' }}" type="text" class="">
		<label for="veiculo[{{$ID_INPUT}}][marcamodelo]" class="active">@lang('controller/ocorrencia.field_marcamodelo')</label>
	</div>
	<div class="input-field col s3">
		<input id="veiculo[{{$ID_INPUT}}][placa]" name="veiculo[{{$ID_INPUT}}][placa]" value="{{ isset($veiculo) ? $veiculo->placa : '' }}" type="text" class="mask-placa">
		<label for="veiculo[{{$ID_INPUT}}][placa]" class="active">@lang('controller/ocorrencia.field_placa')</label>
	</div>
	<div class="input-field col s3">
		<input id="veiculo[{{$ID_INPUT}}][chassi]" name="veiculo[{{$ID_INPUT}}][chassi]" value="{{ isset($veiculo) ?$veiculo->chassi : '' }}" type="text">
		<label for="veiculo[{{$ID_INPUT}}][chassi]" class="active">@lang('controller/ocorrencia.field_chassi')</label>
	</div>
	<div class="input-field col s1 offset-s1 area-acao">
		<a class="btn btn-floating waves-effect waves-light right tooltipped grey darken-4 mr-1 btn-veiculo" href="javascript:deletarElemento('{{$LOCAL}}', '{{$ID_INPUT}}' {{ isset($veiculo) ? ", '".$veiculo->slug()."'" : '' }});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove-{{$LOCAL}}-{{$ID_INPUT}}">
			<i class="material-icons">cancel</i>
		</a>
	</div>
</div>