@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($opm))
	<form id="formulario" class="row" method="post" action="{{ route('opm.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('opm.update', $opm) }}">
		<input type="hidden" name="id" value="{{ $opm->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s6">
			<input id="nome" name="nome" value="{{ !isset($opm) ? old('nome') : $opm->nome }}" type="text" class="validate" required="required">
			<label for="nome" class="active">{{Lang::get('controller/opm.field_nome')}}*</label>
		</div>
		<div class="input-field col s6">
			<select name="opm_id" id="opm_id" class="no-formSelect select-buscavel">
				<option value="" selected>@lang('controller/opm.nao_subordinada')</option>

				@foreach($opms->sortBy('nome') as $oppmm)
				<option {{ ((isset($opm) && $opm->opm_id == $oppmm->id) || (old('opm_id') == $oppmm->id) ) ? 'selected="selected"' : '' }} value="{{$oppmm->id}}">{{$oppmm->nome}}</option>
				@endforeach

			</select>
			<label class="label-select2">@lang('controller/opm.field_opm_id')</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection