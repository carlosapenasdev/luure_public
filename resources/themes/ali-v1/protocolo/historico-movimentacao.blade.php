@if(!empty($protocolo) && $protocolo->historicoMovimentacao->isNotEmpty())
<h5 class="">{{Lang::get('historico.name')}}</h5>
<table class="striped">
	<tbody>
		@foreach($protocolo->historicoMovimentacao as $comentarioProtocolo)
		<tr>
			<td>
					<b class="sm" style="color: rgb(117, 113, 113)">
						{{Lang::get('controller/protocolo.comentado_em_por', ['usuario' => $comentarioProtocolo->comentario->user->name, 'data' => $comentarioProtocolo->criado_em])}}:
					</b>

					<p class="sm" style="color: rgb(117, 113, 113)">
						@if(is_null($comentarioProtocolo->estagio_destino))
						{{Lang::get('controller/protocolo.estagio_atual', ['estagio_atual' => $comentarioProtocolo->estagio_atual->nome])}}
						@else
						{{Lang::get('controller/protocolo.estagio_atual_estagio_destino', ['estagio_atual' => $comentarioProtocolo->estagio_atual->nome, 'estagio_destino' => $comentarioProtocolo->estagio_destino->nome])}}
						@endif
					</p>
					<p class="xl" style="color: rgb(0, 0, 0)">
						<span> {!! nl2br(e(Lang::get($comentarioProtocolo->comentario->descricao)))!!}</span>
					</p>
				
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif