@extends('layouts/form')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
@php
$ordemBusca = $protocolo->ordemBusca();
@endphp

<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.despachar', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		@method('PUT')
		@csrf

		<div class="row">
			<div class="col s12 pb-1">
				<h3 class="xxxl width-100 left">
					<b>{{Lang::get('controller/protocolo.field_dias_prazo_protocolo')}}</b>

					<span class="task-cat {{$protocolo->getCorVencimento()}} darken-4 xxl center">
						{{$protocolo->diasParaVencerInverso()}} {{trans_choice('data.dias', $protocolo->diasParaVencerInverso())}} {{$protocolo->prazo_final_formatado}} {{diaSemana($protocolo->getPrazoFinal())}}
					</span>
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<select name="user_elo_id" id="user_elo_id" class="no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($users->sortBy('antiguidade') as $user)
					<option {{ ((isset($protocolo) && $protocolo->user_elo_id == $user->id) || (old('user_elo_id') == $user->id) ) ? 'selected="selected"' : '' }} value="{{$user->id}}" data-icon="{{url('/upload/user/profile/avatar-7.png')}}" class="circle">{{$user->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">{{Lang::get('controller/protocolo.field_user_elo_id')}}*</label>
			</div>
			<div class="input-field col s2 hide">
				<p class="center pt-10">
					<label>
						@if($protocolo->elabora_ob == 1)
						<input type="hidden" name="elabora_ob" id="elabora_ob" value="{{$protocolo->elabora_ob}}">
						<input type="checkbox" name="elabora_ob_disabled" id="elabora_ob_disabled" checked="checked" disabled="disabled" value="{{$protocolo->elabora_ob}}">
						@else
						<input type="checkbox" name="elabora_ob" id="elabora_ob" value="@if(is_null($protocolo->elabora_ob)) {{1}} @else {{$protocolo->elabora_ob}} @endif ">
						@endif
						<span>{{Lang::get('controller/protocolo.field_elabora_ob')}}</span>
					</label>
				</p>
			</div>
			<div class="input-field col s6">
				<input id="dias_prazo_elo" name="dias_prazo_elo" value="{{ !isset($protocolo) ? old('dias_prazo_elo') : $protocolo->dias_prazo_elo }}" type="number" min="0" max="100" class="validate" required="required">
				<label for="dias_prazo_elo" class="active">{{Lang::get('controller/protocolo.field_dias_prazo_elo')}}</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="comentario" name="comentario" class="materialize-textarea validate" required="required">{{old('comentario')}}</textarea>
				<label for="comentario" class="active">{{Lang::get('controller/protocolo.field_comentario')}}*</label>
			</div>
		</div>
		
		@include('layouts/partials/form-buttons')

		<div class="row padding-1">
			<div class="col s12">
				@include('protocolo/historico-movimentacao')
			</div>
		</div>
	</form>
	
</div>
@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

@endsection