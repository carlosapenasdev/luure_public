@extends('layouts/form')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')
@php
$relatorioBusca = $missaoop->relatorioBusca();
@endphp
<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('operacao.missaoop.despachar', [$operacao, $missaoop]) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $missaoop->slug() }}" />
		<input type="hidden" name="conclusao_elo" value="1" />
		@method('PUT')
		@csrf

		<div id="areaRELBUSCA">
			<div class="row">
				<div class="input-field col s6">
					<select disabled="">
						<option selected="selected" value="">{{$tipoRelBusca->nome}}</option>
					</select>
					<label data-error="Select an option">{{Lang::get('controller/missaooperacao.field_documento_tipo_id')}}*</label>
				</div>
				<div class="input-field col s6">
					<input id="numero" name="numero" value="@if(!is_null($relatorioBusca)) {{$relatorioBusca->numero}} @endif" type="text" readonly="readonly" required="required" class="validate">
					<label for="numero" class="active">{{Lang::get('controller/missaooperacao.field_numero_relatorio_busca')}}</label>
				</div>
			</div>
			<div class="row">&nbsp;</div>

			<div class="row">
				<div class="col s12">
					<input type="file" name="arquivo" id="arquivo" class="dropify parsley-validated validate" data-max-file-size="{{config('app.uploadLimit')}}" @if(!empty($relatorioBusca->arquivo)) default-file="{{url($relatorioBusca->arquivo)}}" @else required="required" @endif />
				</div>
			</div>

			<div class="row">&nbsp;</div>
			@if(isset($missaoop) && !empty($relatorioBusca->arquivo))
			<div class="row">
				<div class="col s12 center">
					<a class="btn green darken-1 waves-effect waves-light border-round" href="{{url($relatorioBusca->arquivo)}}" target="_blank">{{Lang::get('common.open_file')}}</a>
				</div>
			</div>
			@endif
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


		@if(is_null($relatorioBusca))
		$.ajax(
		{
			type: "GET",
			url: "{{route('numeracao', $tipoRelBusca->slug())}}",
			success: function (data)
			{
				$('#numero').val(data.numero);
				M.updateTextFields();
			},

		});

		document.getElementById("submit-all").addEventListener("click", function(e)
		{
			let valido = commonValidateForm();
			
			if(valido && $('#arquivo').val().length > 0)
			{

				e.preventDefault();

				@include('layouts/partials/form-confirm-numero')
			}
		});
		
		@endif
	});
</script>

@endsection