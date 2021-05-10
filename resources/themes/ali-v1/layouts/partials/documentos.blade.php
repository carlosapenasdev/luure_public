<div class="row padding-1">
	<div class="col s10">
		<h5 class="">@lang('common.documentos')</h5>	
	</div>
	@if(isset($addDocs) && $addDocs == true)
	<div class="col s2">
		@if(isset($addAnexo) && $addAnexo == true)
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger rotate90 ml-1" href="#modalAddAnexo" data-position="top" data-tooltip="@lang('controller/protocolo.add_anexos')">
			<i class="material-icons">attachment</i>
		</a>
		@endif
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-5 modal-trigger" href="#modalAddDocs" data-position="top" data-tooltip="@lang('common.add_doc')">
			<i class="material-icons">add</i>
		</a>
	</div>
	@endif
</div>

<div class="row padding-1">
	<div class="col s12">
		<table class="striped">
			<tbody>
				@foreach($documentos as $documento)
				@if(!isset($onlyWithFile) || (isset($onlyWithFile) && $onlyWithFile == true && !empty($documento->arquivo)))
				
				@if(!auth()->user()->isLevelElo() || (auth()->user()->isLevelElo() && $documento->canElo()))
				
				@include('/layouts/partials/documentos-linha')

				@endif

				@endif
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@if(isset($addDocs) && $addDocs == true)

@include('/layouts/partials/documentos-addDocs-modal')

@endif

@if(isset($addAnexo) && $addAnexo == true)

@include('/layouts/partials/documentos-addAnexo-modal')

@endif


