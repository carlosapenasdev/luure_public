@extends('layouts/browse')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

<style type="text/css">
	#modalBusca
	{
		width: 80% !important;
	}

	#modalBusca
	{
		max-height: 75% !important;
		overflow-y: scroll !important;
	}
</style>

@endsection

@section('content')
@php
if(request()->is('individuo*'))
$urlShow = 'individuo';
else
$urlShow = 'publico-interno';
@endphp

<div class="card-content">
	
	@include('individuo/modal-busca')

	<table id="page-length-option" class="display table-browse">
		<thead>
			<tr>
				<th>ID</th>
				<th>@lang('controller/origin.field_name')</th>
				<th>@lang('controller/individuo.field_alcunha')</th>
				<th>@lang('controller/individuo.field_rg')</th>
				<th>@lang('controller/individuo.field_cpf')</th>
				<th>@lang('controller/individuo.field_foto')</th>
				<th>@lang('controller/individuo.field_mae')</th>
				<th>@lang('controller/individuo.field_pai')</th>
				<th class="acao">@lang('common.table_action')</th>
			</tr>
		</thead>
		<tbody>
			@forelse($listaIndividuos as $individuo)
			<tr>
				<td>{{$individuo->id}}</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$individuo->nome}}
					</a>
				</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$individuo->alcunha}}
					</a>
				</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$individuo->rg}}
					</a>
				</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$individuo->cpf}}
					</a>
				</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						@if($individuo->hasFoto01() || $individuo->hasFoto02() || $individuo->hasFoto03() )
						
						<img class="responsive-img circle z-depth-5" src="{{url($individuo->thumb)}}" alt="" width="40">
						
						@endif
					</a>
				</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$individuo->mae}}
					</a>
				</td>
				<td>
					<a href="{{route($urlShow.'.show', $individuo)}}" class="link-pmpr" data-position="top" data-tooltip="{{Lang::get('common.visualizar')}}">
						{{$individuo->pai}}
					</a>
				</td>
				<td>
					@if(request()->is('publico-interno*'))
					<a href="{{route('publico-interno.edit', $individuo)}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="@lang('common.controller_edit')">
						<i class="material-icons">edit</i>
					</a>
					@else
					<a href="{{route('individuo.edit', $individuo)}}" class="btn-floating waves-effect waves-light left mr-2 green darken-1 tooltipped" data-position="top" data-tooltip="@lang('common.controller_edit')">
						<i class="material-icons">edit</i>
					</a>
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

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/cleave-phone.br.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}

{!!Theme::js('js/custom/modal.js')!!}
@include('individuo/chip-natureza-js')

<script type="text/javascript">
	$( document ).ready(function()
	{
		table = $('.table-browse').DataTable({
			destroy: true,
			columnDefs: [
			{ width: 5, targets: 0 },
			{ width: 280, targets: 1 },
			{ width: 150, targets: 2 },
			{ width: 50, targets: 3 },
			{ width: 110, targets: 4 },
			{ width: 10, targets: 5 },
			]});
		table.order( [ 1, 'asc' ] )/*.columns.adjust()*/.draw();
	});
</script>

@endsection