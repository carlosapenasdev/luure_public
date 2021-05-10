<tr>
	<td>
		<p>
			<b>
				{{Lang::get('historico.em_por', ['acao' => Lang::get('historico.acao_'.$atividade->description),  'usuario' => !is_null($atividade->causer) ? $atividade->causer->name : Lang::get('historico.user_vazio'), 'data' => $atividade->criado_em])}}:
			</b><br />
			
			@include('layouts/partials/historico-atividade-descricao')

		</p>
	</td>
</tr>