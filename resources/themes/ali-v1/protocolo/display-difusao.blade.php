@if($protocolo->foiDifundido() || $protocolo->deDifusao())
<div class="width-20 right center-align">
	<i class="material-icons dp48">
		@if($protocolo->foiDifundido())
		call_split
		@elseif($protocolo->deDifusao())
		call_merge
		@endif
	</i>
</div>
@elseif($protocolo->isBaixoCima() && !$protocolo->hasAnalista())
<div class="width-20 right center-align">
	<a class="btn btn-floating btn-large waves-effect waves-light grey darken-3 tooltipped reduzir60" data-position="top" data-tooltip="@lang('controller/protocolo.finalizar_direto')" href="{{ route('protocolo.arquive', $protocolo) }}">
		<i class="material-icons dossier-icons dp48">archive</i>
	</a>
</div>
@endif