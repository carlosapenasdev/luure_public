<div class="row padding-1 grey lighten-3">
	<div class="col s12 m4">
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_cidade_id')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{$operacao->cidade->nome}}
			</div>
		</div>
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_promotor')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{$operacao->promotor}}
			</div>
		</div>
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_status')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{Lang::get('controller/operacao.field_status_'.$operacao->status)}}
			</div>
		</div>
	</div>
	
	<div class="col s12 m4">
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_vara')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{$operacao->vara}}
			</div>
		</div>
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_data_inicio')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{formatar_data($operacao->data_inicio)}}
			</div>
		</div>
	</div>

	<div class="col s12 m4">
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_juiz')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{$operacao->juiz}}
			</div>
		</div>
		@if(!empty($operacao->data_termino))
		<div class="row pb-1 pb-1">
			<div class="col s12 m4 label">
				<b>{{Lang::get('controller/operacao.field_data_termino')}}</b>
			</div>
			<div class="col s12 m8 value">
				{{formatar_data($operacao->data_termino)}}
			</div>
		</div>
		@endif
	</div>
</div>