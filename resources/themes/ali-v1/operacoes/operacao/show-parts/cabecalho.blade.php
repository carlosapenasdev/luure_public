<div class="row padding-1 mb-1">
	<div class="col s10">
		<p>
			<b class="xxl">
				{{Lang::get('controller/operacao.operacao_id', ['id' => $operacao->id, 'nome' => $operacao->nome])}}
			</b><br />
			{{Lang::get('controller/operacao.criado_em_por', ['usuario' => $operacao->user_cadastro->name, 'data' => $operacao->criado_em])}}
		</p>
	</div>
	<div class="col s2 right-align">
		@if($operacao->canEdit())
		<a class="btn btn-floating btn-large waves-effect waves-light green darken-1 tooltipped reduzir80" href="{{route('operacao.edit', ($operacao->slug()))}}" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
			<i class="material-icons dossier-icons dp48">create</i>
		</a>

		@endif
	</div>
</div>