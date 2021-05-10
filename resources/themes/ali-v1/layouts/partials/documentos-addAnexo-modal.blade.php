<div id="modalAddAnexo" class="modal">
	<div class="modal-content overflow-y">
		
		<h4>@lang('controller/protocolo.add_anexos')</h4>
		
		<form method="post" action="{{url()->current()}}/documento-upload" enctype="multipart/form-data" id="anexos-form-upload-documento">
			@csrf
			<input type="hidden" name="is_anexo" id="is_anexo" value="1">
			<input type="hidden" name="total" id="anexos-total" value="0">
			<div id="anexos-form-fields">
			</div>

			@php
			$idBTN = 'submit-modal';
			@endphp

			@include('layouts/partials/form-buttons')

			@php
			unset($idBTN);
			@endphp
		</form>

		<div id="anexos-fields-arquivo" class="hide">
			<div class="fields-arquivo-content">
				<div id="anexos-linha{ID_INPUT}" class="pb-5" data-linha="{ID_INPUT}">
					<div class="row">
						<div class="input-field col s6">
							<select name="documento_tipo_id[]" id="anexos-documento_tipo_id{ID_INPUT}" class="validate no-formSelect select-buscavel" required="required">
								<option value="" disabled selected>{{Lang::get('common.select')}}</option>

								@foreach($documentoAnexos->sortBy('nome') as $documentoTipo)
								<option value="{{$documentoTipo->id}}" data-tipo="{{$documentoTipo->tipo}}" data-slug="{{$documentoTipo->slug()}}">{{$documentoTipo->nome}}</option>
								@endforeach

							</select>
							<label class="label-select2">{{Lang::get('common.documento_tipo')}}*</label>
						</div>
						<div class="input-field col s5">
							<input id="anexos-numero{ID_INPUT}" name="numero[]" class="validate" value="" type="text" required="required">
							<label for="anexos-numero{ID_INPUT}" class="active">{{Lang::get('common.numero')}}</label>
						</div>
						<div class="col s1 btn-action">
							<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="#" data-position="top" data-tooltip="@lang('common.controller_remove')" id="anexos-remove{ID_INPUT}">
								<i class="material-icons">cancel</i>
							</a>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col s11">
							<input type="file" name="arquivo[]" id="anexos-arquivo{ID_INPUT}" class="dropify validate" required="required" data-max-file-size="{{config('app.uploadLimit')}}"/>
						</div>
						<div class="col s1">&nbsp;</div>
					</div>
				</div>
			</div>
			<div id="anexos-btn-add">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:addDocField('anexos-');" data-position="top" data-tooltip="@lang('common.add')" id="anexos-add-doc">
					<i class="material-icons">add</i>
				</a>
			</div>
			<div id="anexos-btn-cancel">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:cancelDocField({ID_INPUT});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="anexos-remove{ID_INPUT}">
					<i class="material-icons">cancel</i>
				</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event)
	{
		addDocField('anexos-');
	});

	
</script>

