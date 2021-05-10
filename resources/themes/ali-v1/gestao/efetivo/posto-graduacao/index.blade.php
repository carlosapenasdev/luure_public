@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<table id="page-length-option" class="display table-browse">
		<thead>
			<tr>
				<th>ID</th>
				<th>{{trans('controller/origin.field_name')}}</th>
				<th class="acao">{{trans('common.table_action')}}</th>
			</tr>
		</thead>
		<tbody>
			@forelse($postoGraduacaos as $acao)
			<tr>
				<td>{{$acao->id}}</td>
				<td>{{$acao->name}}</td>
				<td>
					<a href="{{route('posto-graduacao.edit', $acao->slug())}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
						<i class="material-icons">edit</i>
					</a>
					<form id="delete-company" action="{{ route('posto-graduacao.destroy', $acao->slug()) }}" method="post">
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

@endsection