<div class="row pl-1 pr-1" id="linha-{{$LOCAL}}-{{$ID_INPUT}}">
	@if(isset($telefone))
	<input type="hidden" name="telefone[{{$ID_INPUT}}][telefone_id]" id="telefone[{{$ID_INPUT}}][telefone_id]" value="{{$telefone->id}}">
	@endif
	
	<div class="input-field col s3 offset-s3">
		<input id="telefone[{{$ID_INPUT}}][telefone]" name="telefone[{{$ID_INPUT}}][telefone]" value="{{ !isset($telefone) ? old('telefone') : $telefone->telefone }}" type="text" class="mask-fone">
		<label for="telefone[{{$ID_INPUT}}][telefone]" class="active">@lang('controller/individuo.field_telefone')</label>
	</div>
	<div class="input-field col s3">
		<input id="telefone[{{$ID_INPUT}}][observacao]" name="telefone[{{$ID_INPUT}}][observacao]" value="{{ !isset($telefone) ? old('telefone_observacao') : $telefone->observacao }}" type="text">
		<label for="telefone[{{$ID_INPUT}}][observacao]" class="active">@lang('controller/individuo.field_observacao')</label>
	</div>
	<div class="input-field col s1 offset-s2 area-acao">
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:deletarElemento('{{$LOCAL}}', '{{$ID_INPUT}}' {{ isset($telefone) ? ", '".$telefone->slug()."'" : '' }});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove-{{$LOCAL}}-{{$ID_INPUT}}">
			<i class="material-icons">cancel</i>
		</a>
	</div>
</div>