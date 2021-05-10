@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
@php
$ordemBusca = isset($missaoop) ? $missaoop->ordemBusca() : null;
@endphp
<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($missaoop))
	<form id="formulario" class="row" method="post" action="{{route('operacao.missaoop.store', ['operacao' => $operacao]) }}" enctype="multipart/form-data">
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route('operacao.missaoop.update', ['operacao' => $operacao, 'missaoop' => $missaoop ] ) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $missaoop->slug() }}" />
		@method('PUT')
		@endif

		<input type="hidden" name="operacao_id" value="{{ $operacao->slug() }}" />
		@csrf

		<div class="row">
			<div class="input-field col s5">
				<select name="user_elo_id" id="user_elo_id" class="validate" required="required">
					<option value="" disabled selected>{{Lang::get('common.select')}}</option>

					@foreach($users as $user)
					<option {{ ((isset($missaoop) && $missaoop->user_elo_id == $user->id) || (old('user_elo_id') == $user->id) ) ? 'selected="selected"' : '' }} value="{{$user->id}}" data-icon="{{url('/upload/user/profile/avatar-7.png')}}" class="circle">{{$user->name}}</option>
					@endforeach

				</select>
				<label data-error="Select an option">{{Lang::get('controller/missaooperacao.field_user_elo_id')}}*</label>
			</div>
			<div class="input-field col s2">
				<p class="center pt-10">
					<label>
						<input type="hidden" name="elabora_ob" id="elabora_ob" value="1">
						<input type="checkbox" name="elabora_ob_disabled" id="elabora_ob_disabled" checked="checked" disabled="disabled" value="1">
						<span>{{Lang::get('controller/missaooperacao.field_elabora_ob')}}</span>
					</label>
				</p>
			</div>
			<div class="input-field col s5">
				<input id="dias_prazo_elo" name="dias_prazo_elo" value="{{ !isset($missaoop) ? old('dias_prazo_elo') : $missaoop->dias_prazo_elo }}" type="number" min="0" max="100" class="validate" required="required">
				<label for="dias_prazo_elo" class="active">{{Lang::get('controller/missaooperacao.field_dias_prazo_elo')}}</label>
			</div>
		</div>
		<div id="areaOB" style="">
			<div class="row">
				<div class="input-field col s6">
					<select disabled="">
						<option selected="selected" value="">{{$tipoOB->nome}}</option>
					</select>
					<label data-error="Select an option">{{Lang::get('controller/missaooperacao.field_documento_tipo_id')}}*</label>
				</div>
				<div class="input-field col s6">
					<input id="numero" name="numero" value="@if(!is_null($ordemBusca)) {{$ordemBusca->numero}} @endif" type="text" readonly="readonly">
					<label for="numero" class="active">{{Lang::get('controller/missaooperacao.field_numero')}}</label>
				</div>
			</div>
			<div class="row">&nbsp;</div>

			<div class="row">
				<div class="col s12">
					<input type="file" name="arquivo" id="arquivo" class="dropify parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(!empty($ordemBusca->arquivo)) default-file="{{url($ordemBusca->arquivo)}}" @endif />
				</div>
			</div>

			<div class="row">&nbsp;</div>
			@if(isset($missaoop) && !empty($ordemBusca->arquivo))
			<div class="row">
				<div class="col s12 center">
					<a class="btn green darken-1 waves-effect waves-light border-round" href="{{url($ordemBusca->arquivo)}}" target="_blank">{{Lang::get('common.open_file')}}</a>
				</div>
			</div>
			@endif
		</div>

		<div class="row">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="assunto_principal" name="assunto_principal" class="materialize-textarea validate" required="required">{{ !isset($missaoop) ? old('assunto_principal') : $missaoop->assunto_principal }}</textarea>
				<label for="assunto_principal" class="active">{{Lang::get('controller/missaooperacao.field_assunto_principal')}}*</label>
			</div>
		</div>
		
		@include('layouts/partials/form-buttons')

		<div class="row padding-1">
			<div class="col s12">
				@include('operacoes/missao/historico')
			</div>
		</div>
	</form>
</div>

@endsection

@section('js')


{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}

@include('layouts/partials/dropify')

<script type="text/javascript">
	
	$(document).ready(function ()
	{
		$.ajaxSetup(
		{
			headers:
			{
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		@if(!is_null($ordemBusca))
		exibeOB('{{$ordemBusca->numero}}');
		@endif

		@if(is_null($ordemBusca))
		getNumero();
		@else
		exibeOB('{{$ordemBusca->numero}}');				
		@endif

		document.getElementById("submit-all").addEventListener("click", function(e)
		{
			let valido = commonValidateForm();
			
			if(valido && document.getElementById('elabora_ob_disabled').checked && $('#arquivo').val().length > 0)
			{
				@if(is_null($ordemBusca))
				
				e.preventDefault();
				@include('layouts/partials/form-confirm-numero')

				@else
				$('#submit-all').closest('form').submit();
				@endif
			}
		});
	});

	function exibeOB(numero)
	{
		$('#numero').val(numero);
		$('#arquivo').addClass('validate')/*.attr("required", "required")*/;
		M.updateTextFields();
		$("#areaOB").show("slow");
	}

	function ocultaOB()
	{
		$('#numero').val('');
		$('#arquivo').removeClass('validate')/*.removeAttr("required")*/;
		M.updateTextFields();
		$("#areaOB").hide("slow");
	}

	@if(is_null($ordemBusca))
	function getNumero()
	{
		$.ajax(
		{
			type: "GET",
			url: "{{route('numeracao', $tipoOB->slug())}}",
			success: function (data)
			{
				exibeOB(data.numero);
			},

		});
	}
	@endif
</script>

@endsection