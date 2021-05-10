<div class="col s10 m8 xl10">
	<p>
		<b class="xxl">
			@if($protocolo->foiDifundido())
			<i class="material-icons dp48">call_split</i>
			@elseif($protocolo->deDifusao())
			<i class="material-icons dp48">call_merge</i>
			@endif
			{{Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id])}}
		</b>
		
		@if(!empty($protocolo->thematic_id))
		<span class="xl">
			{{$protocolo->thematic->motif}}:
		</span>
		@endif

		{{Lang::get('controller/protocolo.criado_em_por', ['usuario' => $protocolo->user_cadastro->name, 'data' => $protocolo->criado_em])}}
		<!--  -->
	</p>

	@if(!is_null($protocolo->agenciaOrigem))
	<span class="task-cat chip-agencia-protocolo"">{{$protocolo->agenciaOrigem->nome}}</span>
	@endif
</div>