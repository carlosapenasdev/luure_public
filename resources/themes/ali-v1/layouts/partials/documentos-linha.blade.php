<tr>
	<td>
		<p>
			@if( !empty($documento->arquivo))

			<div class="col p-0 mr-1" style="min-width: 50px">
				@if((isset($delDocs) && $delDocs == true))
				<form id="status" action="{{url()->current()}}/documento-delete/{{$documento->slug()}}" method="post">
					{{csrf_field()}}
					<button type="submit" class="btn btn-floating waves-effect waves-light breadcrumbs-btn left tooltipped grey darken-4 mr-1 action-delete" data-position="top" data-tooltip="@lang('common.controller_remove')">
						<i class="material-icons">cancel</i>
					</button>
				</form>

				@elseif($documento->canEdit() && (isset($addDocs) && $addDocs == true))

				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="{{url()->current()}}/documento-edit/{{$documento->slug()}}" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
					<i class="material-icons dossier-icons dp48">create</i>
				</a>

				@elseif(isset($onlyWithFile))

				<label>
					<input name="documento-selecionado" type="radio" value="{{$documento->slug()}}" class="required validate" />
					<span></span>
				</label>
				@endif
			</div>
			@endif
			<div class="col p-0 mr-1 rotate90 mt-1" style="min-width: 30px">
				@if($documento->documentoTipo->isTipoEntrada())
				<i class="material-icons dossier-icons dp48">attachment</i>
				@endif
			</div>

			<div class="col p-0">
				@if( !empty($documento->arquivo))
				<strong class="sm" style="color:rgb(117, 113, 113)">
					{{Lang::get('controller/protocolo.comentado_em_por', ['usuario' => $documento->user->name, 'data' => $documento->alterado_em])}}:
				</strong>
				<br />

				<a href="{{url($documento->arquivo)}}" target="_blank" class="link-pmpr">
					@endif

					<b>{{$documento->documentoTipo->nome}}</b><br />

					@if(!empty($documento->numero))

					@lang('common.numero'): {{$documento->numero}}

					@endif

					@if( !empty($documento->arquivo))
				</a>
				@endif

			</div>

		</p>
	</td>
</tr>