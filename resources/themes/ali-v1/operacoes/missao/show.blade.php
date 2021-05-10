@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<div class="row padding-1 mb-1">
		<div class="col s10">
			<p>
				<b class="xxl">
					<a class="link-pmpr" href="{{route('operacao.show', [$operacao])}}">
						{{Lang::get('controller/missaooperacao.operacao_id', ['operacao' => $operacao->id.' '.$operacao->nome.''])}}
					</a>&nbsp;
					{{Lang::get('controller/missaooperacao.missao_id', ['missao' => $missaoop->id])}}
				</b>
				{{Lang::get('controller/missaooperacao.criado_em_por', ['usuario' => $missaoop->user_cadastro->name, 'data' => $missaoop->criado_em])}}
			</p>
		</div>

		<div class="col s2 right-align">
			@if(!$missaoop->estagio->isFinalizado())

			@if($missaoop->canEdit())
			<a class="btn btn-floating btn-large waves-effect waves-light green darken-1 tooltipped reduzir80" href="{{route('operacao.missaoop.edit', [$operacao, $missaoop])}}" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
				<i class="material-icons dossier-icons dp48">create</i>
			</a>
			
			@endif
			@if($missaoop->canDespacharDevolver())
			@if(!is_null($missaoop->devolverQuem()))
			<a class="btn btn-floating btn-large waves-effect waves-light tooltipped red accent-2" href="{{route('operacao.missaoop.devolucao', [$operacao, $missaoop])}}" data-position="top" data-tooltip="{{Lang::get('controller/missaooperacao.btn_devolver').' '.$missaoop->devolverQuem()->nome}}">
				<i class="material-icons inverso">send</i>
			</a>
			@endif
			@endif
			@if(($missaoop->souResposanvel() || auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto','analista-subsecao', 'analista-regional', 'analista-local')) && !is_null($missaoop->despacharQuem()))
			<a class="btn btn-floating btn-large waves-effect waves-light tooltipped green darken-1" href="{{route('operacao.missaoop.despacho', [$operacao, $missaoop])}}" data-position="top" data-position="top" data-tooltip="{{Lang::get('controller/missaooperacao.btn_despachar').' '.$missaoop->despacharQuem()->nome}}">
				<i class="material-icons">send</i>
			</a>
			@endif
			@endif
		</div>
	</div>

	<div class="row padding-1 grey lighten-3">
		<div class="col s12 m5">
			<div class="row pb-1 pb-1"> 
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.local')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$missaoop->estagio->nome}}
				</div>
			</div>
			
			@if(!empty($missaoop->user_elo_id)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.field_user_elo_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$missaoop->user_elo->name}}
				</div>
			</div>
			@endif

			@if(!empty($missaoop->conclusao_elo)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.field_conclusao_elo')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/missaooperacao.field_conclusao_elo_'.$missaoop->conclusao_elo)}}
				</div>
			</div>
			@endif
		</div>

		<div class="col s12 m5">
			<div class="row pb-1 pb-1"> 
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.field_user_analista_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$missaoop->user_cadastro->name}}
				</div>
			</div>

			@if(!empty($missaoop->dias_prazo_elo)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.field_dias_prazo_elo')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$missaoop->dias_prazo_elo}} {{trans_choice('data.dias', $missaoop->dias_prazo_elo)}}
				</div>
			</div>
			@endif

			@if(!empty($missaoop->prazo_final)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.field_prazo_final')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{formatar_data($missaoop->prazo_final)}}
				</div>
			</div>
			@endif
			@if(!empty($missaoop->conclusao_analista)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/missaooperacao.field_conclusao_analista')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/missaooperacao.field_conclusao_analista_'.$missaoop->conclusao_analista)}}
				</div>
			</div>
			@endif
		</div>


		<div class="col s2">
			@if(!empty($missaoop->data_atribuiu_elo)) 
			<div class="col s12 pb-1">
				<h3 class="lg">
					<b>
						{{Lang::get('controller/missaooperacao.field_data_atribuiu_elo')}}
					</b>
				</h3>
				{{formatar_data_tempo($missaoop->data_atribuiu_elo)}}
			</div>
			@endif

			@if(!empty($missaoop->data_elo_encerrou)) 
			<div class="col s12 pb-1">
				<h3 class="lg">
					<b>
						{{Lang::get('controller/missaooperacao.field_data_elo_encerrou')}}
					</b>
				</h3>
				{{formatar_data_tempo($missaoop->data_elo_encerrou)}}
			</div>
			@endif

			@if(!empty($missaoop->data_adm_encerrou)) 
			<div class="col s12 pb-1">
				<h3 class="lg">
					<b>
						{{Lang::get('controller/missaooperacao.field_data_adm_encerrou')}}
					</b>
				</h3>
				{{formatar_data_tempo($missaoop->data_adm_encerrou)}}
			</div>
			@endif
			@if(!empty($missaoop->prazo_final)) 
			<div class="col s12 pb-1">
				<h3 class="xxl">
					<b>{{Lang::get('controller/missaooperacao.field_dias_prazo_protocolo')}}</b><br>
				</h3>
				<h3 class="task-cat {{$missaoop->getCorVencimento()}} darken-4 xxl center padding-5">
					{{$missaoop->diasParaVencerInverso()}} {{trans_choice('data.dias', $missaoop->diasParaVencerInverso())}}<br />{{$missaoop->prazo_final_formatado}} {{diaSemana($missaoop->getPrazoFinal())}}
				</h3>
			</div>
			@endif
		</div>
	</div>

	<div class="row padding-1">
		<div class="col s12">
			<h5 class="">{{Lang::get('controller/missaooperacao.field_assunto_principal')}}</h5>
			<p>
				<span> {!! nl2br(e($missaoop->assunto_principal))!!}</span>
			</p>
		</div>
	</div>
	<hr>

	<div class="row padding-1">
		<div class="col s12">
			<h5 class="">{{Lang::get('controller/missaooperacao.documentos')}}</h5>
			<table class="striped">
				<tbody>
					@foreach($missaoop->documentos as $documento)
					<tr>
						<td>
							<p>
								@if( !empty($documento->arquivo))
								<a href="{{url($documento->arquivo)}}" target="_blank" class="link-pmpr">
									@endif

									<b>{{$documento->documentoTipo->nome}}</b><br />
									@if(!empty($documento->numero))
									{{Lang::get('controller/missaooperacao.field_numero')}}: {{$documento->numero}}
									@endif

									@if( !empty($documento->arquivo))
								</a>
								@endif
							</p>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<hr>

	<div class="row padding-1">
		<div class="col s12">
			@include('operacoes/missao/historico')
		</div>
	</div>

</div>
@endsection

@section('js')
<script type="text/javascript">
	
	$(document).ready(function ()
	{
		
	});

</script>
@endsection