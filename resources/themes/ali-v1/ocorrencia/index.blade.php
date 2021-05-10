@extends('layouts/browse')

@section('css')
{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content">
	
	<div class="row">
		@include('ocorrencia/modal-busca')
	</div>

	<div class="row">
		<table id="page-length-option" class="display table-browse">
			<thead>
				<tr>
					<th>@lang('controller/ocorrencia.field_data')</th>
					<th>@lang('controller/ocorrencia.field_hora')</th>
					<th>@lang('controller/ocorrencia.field_bou')</th>
					<th>@lang('controller/ocorrencia.field_operacao')</th>
					<th class="acao">@lang('common.table_action')</th>
				</tr>
			</thead>
			<tbody>
				@forelse($ocorrencias as $ocorrencia)
				<tr>
					<td>
						<a href="{{route('ocorrencias.show', $ocorrencia)}}" class="link-pmpr">
							{{$ocorrencia->data}}
						</a>
					</td>
					<td>
						<a href="{{route('ocorrencias.show', $ocorrencia)}}" class="link-pmpr">
							{{$ocorrencia->hora}}
						</a>
					</td>
					<td>
						<a href="{{route('ocorrencias.show', $ocorrencia)}}" class="link-pmpr">
							{{$ocorrencia->bou}}
						</a>
					</td>
					<td>
						@if(!is_null($ocorrencia->operacao))
						<a href="{{route('ocorrencias.show', $ocorrencia)}}" class="link-pmpr">
							{{$ocorrencia->operacao->nome}}
						</a>
						@endif
					</td>
					<td>
						<a href="{{route('ocorrencias.edit', $ocorrencia)}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
							<i class="material-icons">edit</i>
						</a>
						<form id="delete-company" action="{{ route('ocorrencias.destroy', $ocorrencia->slug()) }}" method="post">
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
</div>
@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/cleave-phone.br.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}

<script type="text/javascript">
	$( document ).ready(function()
	{
		$('.table-browse').DataTable().order( [ 0, 'desc' ], [ 1, 'desc' ], [ 2, 'desc' ] ).draw();
	});
</script>

@endsection