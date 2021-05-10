@extends('layouts/browse')

@section('css')

@endsection

@section('content')
<div class="card-content">
	<div class="row">
		<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalArchive" data-position="top" data-tooltip="{{Lang::get('controller/operacao.op_finalizadas')}}">
			<i class="material-icons">archive</i>
		</a>

		@include('operacoes/operacao/modal-busca')
	</div>

	@include('operacoes/operacao/index-lista-operacao')
	
	@php
	$operacaos = $operacaosFinalizadas;
	@endphp
	
	@include('operacoes/operacao/modal-archive')

</div>
@endsection

@section('js')

{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}

<script>
	$('.action-operacao').on('click', function ()
	{
		event.preventDefault();
		btn = this;

		Swal.fire({
			title: '{{Lang::get("validation.confirm_delete_title")}}',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText:'{{Lang::get("controller/operacao.confirm_action_btn")}}',
			cancelButtonText:'{{Lang::get("common.form_reset")}}',
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