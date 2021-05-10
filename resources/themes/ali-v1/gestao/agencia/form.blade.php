@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($agencia))
	<form id="formulario" class="row" method="post" action="{{ route('agencias.store') }}">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('agencias.update', $agencia) }}">
		<input type="hidden" name="id" value="{{ $agencia->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		<div class="input-field col s5">
			<input id="nome" name="nome" value="{{ !isset($agencia) ? old('nome') : $agencia->nome }}" type="text" class="validate" required="required">
			<label for="nome" class="active">{{Lang::get('controller/agencia.field_nome')}}*</label>
		</div>

		@role('root')
		<div class="input-field col s2">
			<label>
				<input type="checkbox" name="usavel" id="usavel" {{ ( isset($agencia) && $agencia->usavel == 1 ) ? 'checked="checked"' : '' }} value="1">
				<span>{{Lang::get('controller/agencia.tem_user')}}</span>
			</label>
		</div>
		@endrole

		@unlessrole('root')
		<input type="hidden" name="usavel" value="0">
		@endrole

		<div class="input-field col s5">
			<select name="vinculo_id" id="vinculo_id" class="no-formSelect select-buscavel">
				<option value="" selected>@lang('controller/agencia.nao_vinculada')</option>

				@foreach($agencias->sortBy('nome') as $ag)
				<option {{ ((isset($agencia) && $agencia->vinculo_id == $ag->id) || (old('vinculo_id') == $ag->id) ) ? 'selected="selected"' : '' }} value="{{$ag->id}}">{{$ag->nome}}</option>
				@endforeach

			</select>
			<label class="label-select2">@lang('controller/agencia.field_vinculo_id')</label>
		</div>
		
		@include('layouts/partials/form-buttons')
	</form>
</div>
@endsection

@section('js')

@endsection