@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<h4 class="card-title">
		{{Lang::get('controller/estatistica.estatisticas')}}
		@if(isset($request['periodo_de']) && !empty($request['periodo_de']))
		{{Lang::get('controller/estatistica.periodo_de', ['periodo_de' => isset($request) ? $request['periodo_de'] : ''])}}
		@endif
		
		@if(isset($request['periodo_ate']) && !empty($request['periodo_ate']))
		{{Lang::get('controller/estatistica.periodo_ate', ['periodo_ate' => $request['periodo_ate']])}}
		@endif
	</h4>
	@include('estatistica/modal-busca')
	<table id="page-length-option" class="display table-browse">
		<thead>
			<tr>
				<th>{{trans('controller/estatistica.field_data')}}</th>
				<th>{{trans('controller/estatistica.field_acao_estatistica_id')}}</th>
				<th>{{trans('controller/estatistica.field_operacao')}}</th>
				<th>{{trans('controller/estatistica.field_natureza_estatistica_id')}}</th>
				<th>{{trans('controller/estatistica.field_origem_estatistica_id')}}</th>
				<th>{{trans('controller/estatistica.field_numero_boletim')}}</th>
				<th class="acao">{{trans('common.table_action')}}</th>
			</tr>
		</thead>
		<tbody>
			@forelse($estatisticas->sortByDesc('data') as $estatistica)
			<tr>
				<td>{{formatar_data($estatistica->data)}}</td>
				<td>{{$estatistica->acao_estatistica->name}}</td>
				<td>@if(!empty($estatistica->operacao)) {{$estatistica->operacao->nome}} @endif</td>
				<td>{{$estatistica->natureza_estatistica->name}}</td>
				<td>{{$estatistica->origem_estatistica->name}}</td>
				<td>{{$estatistica->numero_boletim}}</td>
				<td>
					<a href="{{route('estatistica.edit', $estatistica->slug())}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
						<i class="material-icons">edit</i>
					</a>
					<form id="delete-company" action="{{ route('estatistica.destroy', $estatistica->slug()) }}" method="post">
						{{csrf_field()}}
						@method('DELETE')
						<button type="button" class="btn-floating waves-effect waves-light left mr-2 red accent-2 tooltipped action-delete" data-position="top" data-tooltip="{{Lang::get('common.controller_destroy')}}">
							<i class="material-icons">delete</i>
						</button>
					</form>
				</td>
			</tr>
			@empty
			Vazio
			@endforelse
		</tbody>
	</table>

</div>
@endsection

@section('js')

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

<script type="text/javascript">
	$( document ).ready(function()
	{
		$('.table-browse').DataTable().order( [ 0, 'desc' ] ).draw();
	});
</script>

@endsection