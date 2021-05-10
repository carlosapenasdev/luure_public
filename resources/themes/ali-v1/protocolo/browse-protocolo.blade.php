@extends('layouts/browse')

@section('css')

{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}
{!!Theme::css('vendors/select2/select2.min.css')!!}

@endsection

@section('content')
<div class="card-content">
	<div class="row padding-1 mb-1">
		
		@include('protocolo/cabecalho-titulo')

		<div class="col s2 m4 xl2 right-align">

			
			@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
			@if($protocolo->isInAdministrativo())
			<div style="width: 40%; float: left;">
				@include('protocolo/visibilidade-protocolo')
			</div>
			@endif
			@endrole

			<div style="float: right;">
				@if($protocolo->canEdit())
				<a class="btn btn-floating btn-large waves-effect waves-light green darken-1 tooltipped reduzir80" href="{{route('protocolo.edit', ($protocolo->slug()))}}" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
					<i class="material-icons dossier-icons dp48">create</i>
				</a>

				@endif
				@if($protocolo->canDespacharDevolver())
				@if(!is_null($protocolo->devolverQuem()))
				<a class="btn btn-floating btn-large waves-effect waves-light tooltipped red accent-2" href="{{route('protocolo.devolucao', $protocolo->slug())}}" data-position="top" data-tooltip="{{Lang::get('controller/protocolo.btn_devolver').' '.$protocolo->devolverQuem()->nome}}">
					<i class="material-icons inverso">send</i>
				</a>
				@endif
				
				@if($protocolo->showEnviarAgencias())
				<a class="btn btn-floating btn-large waves-effect waves-light tooltipped green darken-1 decisao-despacho-chefe" href="#" data-position="top" data-position="top" data-tooltip="{{Lang::get('controller/protocolo.btn_despachar')}}">
					<i class="material-icons">send</i>
				</a>
				@elseif($protocolo->showModalDecisaoAnalista())
				<a class="btn btn-floating btn-large waves-effect waves-light tooltipped green darken-1 decisao-despacho-analista" href="#" data-position="top" data-position="top" data-tooltip="{{Lang::get('controller/protocolo.btn_despachar')}}">
					<i class="material-icons">send</i>
				</a>
				@else
				<a class="btn btn-floating btn-large waves-effect waves-light tooltipped green darken-1" href="{{route('protocolo.despacho', $protocolo->slug())}}" data-position="top" data-position="top" data-tooltip="{{Lang::get('controller/protocolo.btn_despachar').' '.$protocolo->despacharQuem()->nome}}">
					<i class="material-icons">send</i>
				</a>
				@endif
				@endif
			</div>
		</div>
	</div>

	<div class="row padding-1 grey lighten-3">
		<div class="col s12 m5">

			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.local')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->estagio->nome}}
				</div>
			</div>

			@if(!empty($protocolo->canal_id))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_canal_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->canal->name}}
				</div>
			</div>
			@endif

			@if(!empty($protocolo->origin_id))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_origin_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->origin->name}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->thematic_id))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_thematic_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->thematic->motif}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->user_analista_id))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_user_analista_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->user_analista->name}}
				</div>
			</div>
			@endif
			@if(!empty($documentos) && $documentos->count() > 0)
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>@lang('common.documento_tipo')</b>
				</div>
				<div class="col s12 m8 value">
					{{$documentos->first()->documentoTipo->nome}}

					@if(!empty($documentos->first()->numero))
					{{$documentos->first()->numero}}
					@endif
				</div>
			</div>
			@endif
			@if(!empty($protocolo->documento_tipo_ser_produzido_id))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_documento_tipo_ser_produzido_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->documentoSerProduzido->nome}}
				</div>
			</div>
			@endif

			@if(!empty($protocolo->user_elo_id))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_user_elo_id')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->user_elo->name}}
				</div>
			</div>
			@endif
			@if(!is_null($protocolo->elabora_ob))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_elabora_ob')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/protocolo.field_elabora_ob_'.$protocolo->elabora_ob)}}
				</div>
			</div>
			@endif
		</div>

		<div class="col s12 m5">
			@if(!empty($protocolo->dias_prazo_elo))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_dias_prazo_elo')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{$protocolo->dias_prazo_elo}} {{trans_choice('data.dias', $protocolo->dias_prazo_elo)}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->conclusao_elo))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_conclusao_elo')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/protocolo.field_conclusao_elo_'.$protocolo->conclusao_elo)}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->conclusao_analista))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_conclusao_analista')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/protocolo.field_conclusao_analista_'.$protocolo->conclusao_analista)}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->conclusao_chefe))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_conclusao_chefe')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/protocolo.field_conclusao_chefe_'.$protocolo->conclusao_chefe)}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->conclusao_adm))
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_conclusao_adm')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{Lang::get('controller/protocolo.field_conclusao_chefe_'.$protocolo->conclusao_adm)}}
				</div>
			</div>
			@endif

			@if(!empty($protocolo->prazo_final)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_prazo_final')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{formatar_data($protocolo->prazo_final)}}
				</div>
			</div>
			@endif
			@if(!empty($protocolo->data_adm_encerrou)) 
			<div class="row pb-1 pb-1">
				<div class="col s12 m4 label">
					<b>{{Lang::get('controller/protocolo.field_data_adm_encerrou')}}</b>
				</div>
				<div class="col s12 m8 value">
					{{formatar_data_tempo($protocolo->data_adm_encerrou)}}
				</div>
			</div>
			@endif

		</div>

		@if(!empty($protocolo->prazo_final))
		<div class="col s2">
			@if(!empty($protocolo->data_atribuiu_analista))
			<div class="col s12 pb-1">
				<h3 class="lg">
					<b>
						{{Lang::get('controller/protocolo.field_data_atribuiu_analista')}}
					</b>
				</h3>
				{{formatar_data_tempo($protocolo->data_atribuiu_analista)}}
			</div>
			@endif

			@if(!empty($protocolo->data_atribuiu_elo))
			<div class="col s12 pb-1">
				<h3 class="lg">
					<b>
						{{Lang::get('controller/protocolo.field_data_atribuiu_elo')}}
					</b>
				</h3>
				{{formatar_data_tempo($protocolo->data_atribuiu_elo)}}
			</div>
			@endif

			@if(!empty($protocolo->data_elo_encerrou))
			<div class="col s12 pb-1">
				<h3 class="lg">
					<b>
						{{Lang::get('controller/protocolo.field_data_elo_encerrou')}}
					</b>
				</h3>
				{{formatar_data_tempo($protocolo->data_elo_encerrou)}}
			</div>
			@endif
			@if(!empty($protocolo->prazo_final))
			<div class="col s12 pb-1">
				<h3 class="xxl">
					<b>{{Lang::get('controller/protocolo.field_dias_prazo_protocolo')}}</b><br>
				</h3>
				<h3 class="task-cat {{$protocolo->getCorVencimento()}} darken-4 xxl center padding-5">
					{{$protocolo->diasParaVencerInverso()}} {{trans_choice('data.dias', $protocolo->diasParaVencerInverso())}}<br />{{$protocolo->prazo_final_formatado}} {{diaSemana($protocolo->getPrazoFinal())}}
				</h3>
			</div>
			@endif
		</div>
		@endif
	</div>

	@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')
	<div class="row padding-1">
		<div class="col s10">
			<h5 class="">@lang('controller/protocolo.pessoas')</h5>	
		</div>
		<div class="col s2">
			<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger" href="#modalAddPessoas" data-position="top" data-tooltip="@lang('controller/protocolo.add_pessoa')">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>

	@if($protocolo->pessoas->count() > 0)
	<div class="row padding-1">
		@foreach($protocolo->pessoas as $individuo)
		<div class="col s12 m2 l2 card-width grey lighten-3 reduzir95">
			<div class="card card-border center-align">
				<div class="card-content black-text left width-100">
					<a href="{{route('individuo.show', $individuo)}}" class="width-100 left">
						<span class="width-100 left link-pmpr">
							<img class="responsive-img circle z-depth-4" src="{{url($individuo->perfil)}}" alt="" width="100">
						</span>
						<span class="width-100 left link-pmpr truncate">
							{{$individuo->id_nome}}
						</span>
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif
	<hr>

	<div id="modalAddPessoas" class="modal">
		<div class="modal-content overflow-y">

			<h4>@lang('controller/protocolo.add_pessoa')</h4>

			<form method="post" action="{{url()->current()}}/pessoas">
				@csrf
				<div class="row" id="linha-individuo">
					<div class="input-field col s12">
						<p class="custom-chips" for="tag_title">@lang('controller/protocolo.pessoas')</p>
						<div class="chips chips-autocomplete" id="chip-individuo"></div>
					</div>
				</div>
				@include('layouts/partials/form-buttons')
			</form>
			{{--
				<div id="fields-arquivo" class="hide">
					<div class="fields-arquivo-content">
						<div id="linha{ID_INPUT}" class="pb-5">
							<div class="row">
								<div class="input-field col s6">
									<select name="documento_tipo_id[]" id="documento_tipo_id{ID_INPUT}" class="validate" required="required">
										<option value="" disabled selected>{{Lang::get('common.select')}}</option>
									</select>
									<label data-error="Select an option">{{Lang::get('common.documento_tipo')}}*</label>
								</div>
								<div class="input-field col s5">
									<input id="numero{ID_INPUT}" name="numero[]" value="" type="text">
									<label for="numero{ID_INPUT}" class="active">{{Lang::get('common.numero')}}</label>
								</div>
								<div class="col s1 btn-action">
									<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="#" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove{ID_INPUT}">
										<i class="material-icons">cancel</i>
									</a>
								</div>
							</div>
							<div class="row">&nbsp;</div>
							<div class="row">
								<div class="col s11">
									<input type="file" name="arquivo[]" id="arquivo{ID_INPUT}" class="dropify validate" required="required" data-max-file-size="{{config('app.uploadLimit')}}"/>
								</div>
								<div class="col s1">&nbsp;</div>
							</div>
						</div>
					</div>
					<div id="btn-add">
						<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:addDocField();" data-position="top" data-tooltip="@lang('common.add')" id="add-doc">
							<i class="material-icons">add</i>
						</a>
					</div>
					<div id="btn-cancel">
						<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:cancelDocField({ID_INPUT});" data-position="top" data-tooltip="@lang('common.controller_remove')" id="remove{ID_INPUT}">
							<i class="material-icons">cancel</i>
						</a>
					</div>
				</div>
				--}}
			</div>
		</div>
		@endrole

		<div class="row padding-1">
			<div class="col s12">
				<h5 class="">{{Lang::get('controller/protocolo.field_assunto_principal')}}</h5>
				<p>
					<span> {!! nl2br(e($protocolo->assunto_principal))!!}</span>
				</p>
			</div>
		</div>
		<hr>

		@if(!empty($protocolo->necessidades_especificas))
		<div class="row padding-1">
			<div class="col s12">
				<h5 class="">{{Lang::get('controller/protocolo.field_necessidades_especificas')}}</h5>
				<p>
					<span> {!! nl2br(e($protocolo->necessidades_especificas))!!}</span>
				</p>
			</div>
		</div>
		<hr>
		@endif

		@php
		$addDocs = !$protocolo->isInFinalizado();
		$addAnexo = !$protocolo->isInFinalizado();
		@endphp

		@include('layouts/partials/documentos')

		<hr>

		@if($protocolo->foiDifundido())

		@include('protocolo/difusao')

		<hr>
		@endif
		
		<div class="row padding-1">
			<div class="col s12">
				@include('protocolo/historico-movimentacao')
			</div>
		</div>

	</div>
	@endsection

	@section('js')

	@include('individuo/chip-vinculo-js')

	@php
	$notDrop = true;
	@endphp

	{!!Theme::js('vendors/select2/select2.min.js')!!}
	{!!Theme::js('js/scripts/form-elements.js')!!}

	{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}
	@include('layouts/partials/dropify')

	{!!Theme::js('js/scripts/form-validation.js')!!}

	<script type="text/javascript">

		$(document).ready(function ()
		{

			$('.decisao-despacho-chefe').click(function()
			{
				Swal.fire({
					title: "{{Lang::get('controller/protocolo.swal_chefe_titulo')}}",
					html:  "{!!Lang::get('controller/protocolo.swal_chefe_msg')!!}",
					icon: 'question',
					showCancelButton: true,
					allowEscapeKey : false,
					allowOutsideClick: false,

					confirmButtonText: "{{Lang::get('controller/protocolo.swal_chefe_sub')}}",
					cancelButtonText: "{{Lang::get('controller/protocolo.swal_chefe_int')}}",
					customClass:
					{
						confirmButton: 'cyan darken-1',
						cancelButton: 'blue darken-1',
					}
				}).then((result) =>
				{
					if (result.value)
					{
						window.location = "{{route('protocolo.enviarAgencias', $protocolo->slug())}}"
					}
					else
					{
						window.location = "{{route('protocolo.despacho', $protocolo->slug())}}"
					}
				})
			});

			$('.decisao-despacho-analista').click(function()
			{
				Swal.fire({
					title: "{{Lang::get('controller/protocolo.swal_analista_titulo')}}",
					html:  "{!!Lang::get('controller/protocolo.swal_analista_msg')!!}",
					icon: 'question',
					showCancelButton: true,
					allowEscapeKey : false,
					allowOutsideClick: false,
					confirmButtonText: "{{Lang::get('controller/protocolo.inChefia')}}",
					cancelButtonText: "{{Lang::get('controller/protocolo.inElo')}}",
					customClass:
					{
						confirmButton: 'cyan darken-1',
						cancelButton: 'blue darken-1',
					}
				}).then((result) =>
				{
					if (result.value)
					{
						window.location = "{{route('protocolo.diretochefia', $protocolo->slug())}}"
					}
					else
					{
						window.location = "{{route('protocolo.diretoelo', $protocolo->slug())}}"
					}
				})
			});

			initChipIndividuo();
			configIndividuo();

		});

	</script>

	@endsection