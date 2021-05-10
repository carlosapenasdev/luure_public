@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	<form id="formulario" class="row" method="post" action="{{ route('sesp.loadBou') }}">
		@csrf
		<input type="hidden" name="busca" value="bou">
		<input type="hidden" name="destino" value="{{route('ocorrencias.criar-post')}}">
		<div class="row">
			<div class="input-field col s4">
				<input id="bou" name="bou" value="{{old('bou')}}" type="text" class="validate mask-bou search-unique" data-unique="{{route('ocorrencias.unique')}}" required="required">
				<label for="bou" class="active">@lang('controller/ocorrencia.field_bou')*</label>
			</div>
			<div class="input-field col s4">
				<input id="user" name="user" value="{{$userSesp}}" type="text" class="validate" required="required">
				<label for="user" class="active">@lang('sesp.user')*</label>
			</div>
			<div class="input-field col s4">
				<input id="pass" name="pass" value="" type="password" class="validate" required="required">
				<label for="pass" class="active">@lang('sesp.password')*</label>
			</div>
		</div>

		@include('layouts/partials/form-buttons')
		
	</form>

</div>
@endsection

@section('js')

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/cleave-phone.br.js')!!}

{!!Theme::js('js/scripts/mascaras.js')!!}
@include('layouts/partials/unique')

@endsection