@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<table id="page-length-option" class="display table-browse">
		<thead>
			<tr>
				<th>@lang('controller/naturezacrime.field_codigo')</th>
				<th>@lang('controller/naturezacrime.field_name')</th>
				<th>@lang('controller/naturezacrime.field_destaque')</th>
				<th class="acao">@lang('common.table_action')</th>
			</tr>
		</thead>
		<tbody>
			@forelse($crimes as $crime)
			<tr>
				<td>{{$crime->codigo}}</td>
				<td>{{$crime->name}}</td>
				<td>@lang('controller/naturezacrime.field_destaque_'.$crime->destaque)</td>
				<td>
					@if(!$crime->isSesp())
					<a href="{{route('natureza-crime.edit', $crime->slug())}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
						<i class="material-icons">edit</i>
					</a>
					<form id="delete-company" action="{{ route('natureza-crime.destroy', $crime->slug()) }}" method="post">
						{{csrf_field()}}
						@method('DELETE')
						<button type="button" class="btn-floating waves-effect waves-light left mr-2 red accent-2 tooltipped action-delete" data-position="top" data-tooltip="{{Lang::get('common.controller_destroy')}}">
							<i class="material-icons">delete</i>
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

<script type="text/javascript">
	
	$( document ).ready(function()
	{
		$('.table-browse').DataTable().order( [ 3, 'desc' ], [ 2, 'desc' ], [ 1, 'asc' ] ).draw();
	});
</script>

@endsection