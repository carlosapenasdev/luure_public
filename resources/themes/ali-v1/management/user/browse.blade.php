@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<table id="page-length-option" class="display table-browse">
		<thead>
			<tr>
				<th>{{trans('controller/user.field_antiguidade')}}</th>
				<th>{{trans('controller/user.field_name')}}</th>
				<th>{{Lang::get('controller/role.name_singular')}}</th>
				<th>{{trans('controller/user.field_email')}}</th>
				<th>{{trans('controller/user.field_rg')}}</th>
				<th>{{trans('controller/user.field_status')}}</th>
				<th class="acao">{{trans('common.table_action')}}</th>
			</tr>
		</thead>
		<tbody>
			@forelse($users as $user)
			<tr>
				<td>
					{{$user->antiguidade}}
				</td>
				<td>
					<a href="{{route('user.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->name}}
					</a>
				</td>
				<td>
					@if(!is_null($user->roles->first()))
					<a href="{{route('user.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->roles->first()->name}}
					</a>
					@endif
				</td>
				<td>
					<a href="{{route('user.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->email}}
					</a>
				</td>
				<td>
					<a href="{{route('user.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$user->rg}}
					</a>
				</td>
				<td>
					<a href="{{route('user.show', $user)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{Lang::get('controller/user.field_status_'.$user->status)}}
					</a>
				</td>
				<td>
					<a href="{{route('user.edit', $user->slug())}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
						<i class="material-icons">edit</i>
					</a>
					<form id="delete-company" action="{{ route('user.resetarSenha', $user) }}" method="post">
						{{csrf_field()}}
						<button type="button" class="btn-floating waves-effect waves-light left mr-2 grey darken-4 tooltipped action-resetarSenha" data-position="top" data-tooltip="{{Lang::get('controller/user.resetar')}}">
							<i class="material-icons">lock_outline</i>
						</button>
					</form>

					@if($user->status == 1)
					<form id="status" action="{{ route('user.ativar', $user->slug()) }}" method="post">
						{{csrf_field()}}
						
						<button type="submit" class="btn-floating waves-effect waves-light left mr-2 grey darken-4 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.ativar')}}">
							<i class="material-icons">done</i>
						</button>
					</form>
					@else
					<form id="status" action="{{ route('user.desativar', $user->slug()) }}" method="post">
						{{csrf_field()}}

						<button type="submit" class="btn-floating waves-effect waves-light left mr-2 grey darken-4 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.desativar')}}">
							<i class="material-icons">block</i>
						</button>
					</form>
					@endif
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
	$('.action-resetarSenha').on('click', function () {
		event.preventDefault();
		btn = this;

		Swal.fire({
			title: '{{Lang::get("validation.confirm_delete_title")}}',
			text: '{{Lang::get("validation.confirm_delete_msg")}}',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: '{{Lang::get("controller/user.confirm_reset_btn")}}',
			cancelButtonText: '{{Lang::get("common.form_reset")}}',
			customClass: {
				confirmButton: 'green darken-1',
				cancelButton: 'red accent-2',

			}
		}).then((willDelete) => {
			if (willDelete.value)
			{
				$(btn).parent().submit();
			}
		})

	});
</script>

@endsection