<div id="modalAddDocs" class="modal">
	<div class="modal-content overflow-y">
		
		<h4>@lang('common.add_doc')</h4>
		
		<form method="post" action="{{url()->current()}}/documento-upload" enctype="multipart/form-data" id="form-upload-documento">
			@csrf
			<input type="hidden" name="total" id="total" value="0">
			<div id="form-fields">
			</div>
			@include('layouts/partials/form-buttons')
		</form>

		<div id="fields-arquivo" class="hide">
			<div class="fields-arquivo-content">
				<div id="linha{ID_INPUT}" class="pb-5" data-linha="{ID_INPUT}">
					<div class="row">
						<div class="input-field col s6">
					<select name="documento_tipo_id[]" id="documento_tipo_id{ID_INPUT}" class="validate no-formSelect select-buscavel" required="required">
						<option value="" disabled selected>{{Lang::get('common.select')}}</option>

						@foreach($documentoTipos->sortBy('nome') as $documentoTipo)
						<option value="{{$documentoTipo->id}}" data-tipo="{{$documentoTipo->tipo}}" data-slug="{{$documentoTipo->slug()}}">{{$documentoTipo->nome}}</option>
						@endforeach

					</select>
					<label class="label-select2">{{Lang::get('common.documento_tipo')}}*</label>
						</div>
						<div class="input-field col s5">
							<input id="numero{ID_INPUT}" name="numero[]" class="recebeNumero" value="" type="text">
							<label for="numero{ID_INPUT}" class="active">{{Lang::get('common.numero')}}</label>
						</div>
						<div class="col s1 btn-action">
							<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="#" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove{ID_INPUT}">
								<i class="material-icons">cancel</i>
							</a>
						</div>
					</div>
					<div class="row">&nbsp;</div>
					<div class="row">
						<div class="col s11">
							<input type="file" name="arquivo[]" id="arquivo{ID_INPUT}" class="dropify validate" required="required" data-max-file-size="{{config('app.uploadLimit')}}"/>
						</div>
						<div class="col s1">&nbsp;</div>
					</div>
				</div>
			</div>
			<div id="btn-add">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:addDocField();" data-position="top" data-tooltip="@lang('common.add')" id="add-doc">
					<i class="material-icons">add</i>
				</a>
			</div>
			<div id="btn-cancel">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:cancelDocField({ID_INPUT});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove{ID_INPUT}">
					<i class="material-icons">cancel</i>
				</a>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(event)
	{
		addDocField();
	});

	function addDocField(anexo='')
	{
		let id 		= parseInt($('#'+anexo+'total').val()) + 1;
		$('#'+anexo+'total').val(id)

		let clone 	= $('#'+anexo+'fields-arquivo div.fields-arquivo-content').clone();
		const regex = /({ID_INPUT})/gi;
		clone 		= $(clone.html().replaceAll(regex, id));
		
		if(id == 1)
			$(clone).find('.btn-action').html($('#'+anexo+'btn-add').html());
		else
		{
			$(clone).find('.btn-action').html($('#'+anexo+'btn-add').html());
			$('#'+anexo+'form-fields').find('#'+anexo+'add-doc').parent().html($('#'+anexo+'btn-cancel').html().replaceAll(regex, id-1));

		}

		let select = $(clone).find('select');

		$(select).on('change', function() {

			tipoDocumentoAlterado(this);
		});

		$('#'+anexo+'form-fields').append(clone);
		
		$('#'+anexo+'form-fields select.select-buscavel').each(function (i)
		{
			makeSelectBuscavel($(this))
		});

		reloadDropify(anexo);
		tooltips('#'+anexo+'form-upload-documento .tooltipped');
	}

	function cancelDocField(el)
	{
		var element = document.getElementById('linha'+el);
		element.parentNode.removeChild(element);
	}

	function reloadDropify(anexo='')
	{
		for(i = 1; i <=  parseInt($('#'+anexo+'total').val()); i++)
		{
			elemento = ('#'+anexo+'linha'+i+' #'+anexo+'arquivo'+i);
			
			initDrops(elemento);
		};
	}

	function tipoDocumentoAlterado(select)
	{		
		let elemento 	= $(select);
		let tipo 		= elemento.find(':selected').data('tipo');
		let slug 		= elemento.find(':selected').data('slug');

		if(tipo == 1)
		{
			$.ajax(
			{
				type: "GET",
				url: "{{route('numeracao', '')}}/"+slug,
				success: function (data)
				{
					//elemento.closest('.row').find('input').val(data.numero);

					elemento.closest('.row').find('input.recebeNumero').val(data.numero).attr('readonly', true);
					M.updateTextFields();
				},

			});
		}
		else
		{
			console.log('nao buscar');
		}
		
	}
</script>

