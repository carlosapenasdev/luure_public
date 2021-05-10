@extends('layouts/form')

@section('css')

@endsection

@section('content')
<div class="card-content">

	@include('layouts/partials/formerrors')
	<form id="formulario" class="row" method="post" action="{{ route('protocolo.despachar', $protocolo->slug()) }}" enctype="multipart/form-data">
		<input type="hidden" name="id" value="{{ $protocolo->slug() }}" />
		<input type="hidden" name="conclusao_arquivese" value="1" />
		@method('PUT')
		@csrf

		<div class="row pt-0 mt-0">
			<div class="input-field col s12 pt-0 m-0">
				<div class="row pl-1 mt-0">
					<div class="col s12">
						<h4 class="grey-text text-darken-1">
							<span class="">
								@lang('controller/protocolo.fim_protocolo', ['protocolo' => $protocolo->id])
							</span>
						</h4>
					</div>
				</div>
			</div>
		</div>

		<div class="row pt-0 mt-0">
			<div class="input-field col s12 pt-0 m-0">
				<div class="row pl-1 mt-0">
					<div class="col s12">
						<textarea  maxlength="2000" data-length="2000" id="comentario" name="comentario" class="materialize-textarea validate" required="required">{{old('comentario')}}</textarea>
						<label for="comentario" class="active">{{Lang::get('controller/protocolo.field_conclusao_arquivese')}}*</label>
					</div>
				</div>
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

@endsection