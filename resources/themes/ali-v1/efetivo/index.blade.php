@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="{{route('efetivo.download')}}" data-position="top" data-tooltip="{{Lang::get('controller/efetivo.download')}}">
		<i class="material-icons">file_download</i>
	</a>

	<table id="page-length-option" class="display table-browse">
		<thead>
			<tr>
				<th>{{trans('controller/user.field_antiguidade')}}</th>
				<th>{{trans('controller/user.field_name')}}</th>
				<th>{{Lang::get('controller/role.name_singular')}}</th>
				<th>{{trans('controller/user.field_email')}}</th>
				<th>{{trans('controller/user.field_rg')}}</th>
				<th>{{trans('controller/user.field_cpf')}}</th>
			</tr>
		</thead>
		<tbody>
			@forelse($users as $user)
			<tr>
				<td>{{$user->antiguidade}}</td>
				<td>
					<a href="{{route('efetivo.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->posto_graduacao->name}} {{$user->nome_completo}}
					</a>
				</td>
				<td>
					@if(!is_null($user->roles->first()))
					<a href="{{route('efetivo.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->roles->first()->name}}
					</a>
					@endif
				</td>
				<td>
					<a href="{{route('efetivo.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->email}}
					</a>
				</td>
				<td>
					<a href="{{route('efetivo.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->rg}}
					</a>
				</td>
				<td>
					<a href="{{route('efetivo.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->cpf}}
					</a>
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

<script>
	$( document ).ready(function()
	{
		table = $('.table-browse').DataTable({
			destroy: true,
			paging: false,
			columnDefs: [
			{ width: 100, targets: 0},
			{ width: 350, targets: 1 },
			{ width: 150, targets: 2 },
			]
		});
		table.order( [ 0, 'asc' ] ).draw();
	});
</script>

@endsection