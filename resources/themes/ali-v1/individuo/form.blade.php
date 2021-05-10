@extends('layouts/form')

@section('css')
{!!Theme::css('vendors/cropperjs/cropper.css')!!}
{!! Theme::css('vendors/dropify/css/dropify.min.css') !!}

@endsection

@section('content')

@php
if(request()->is('individuo*'))
$urlForm = 'individuo';
else
$urlForm = 'publico-interno';
@endphp

<div class="card-content">

	@include('layouts/partials/formerrors')

	@if(!isset($individuo))
	<form id="formulario" class="row" method="post" action="{{ route($urlForm.'.store') }}" enctype="multipart/form-data" >
		@if(1==2)
	</form>
	@endif
	@else
	<form id="formulario" class="row" method="post" action="{{ route($urlForm.'.update', $individuo) }}" enctype="multipart/form-data" >
		<input type="hidden" name="id" value="{{ $individuo->slug() }}" />
		@method('PUT')
		@endif

		@csrf

		
		<div class="col s4">
			<div class="row">
				<div class="input-field col s4">
					<input type="file" name="foto01" id="foto01" class="dropify dropify-crop parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($individuo) && !empty($individuo->foto01)) default-file="{{url($individuo->foto01)}}" value="{{$individuo->foto01}}" @endif />
					<input type="hidden" name="foto01_cropped" class="input_cropped">
				</div>
				<div class="input-field col s4">
					<input type="file" name="foto02" id="foto02" class="dropify dropify-crop parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($individuo) && !empty($individuo->foto02)) default-file="{{url($individuo->foto02)}}" value="{{$individuo->foto02}}" @endif />
					<input type="hidden" name="foto02_cropped" class="input_cropped">
				</div>
				<div class="input-field col s4">
					<input type="file" name="foto03" id="foto03" class="dropify dropify-crop parsley-validated" data-max-file-size="{{config('app.uploadLimit')}}" @if(isset($individuo) && !empty($individuo->foto03)) default-file="{{url($individuo->foto03)}}" value="{{$individuo->foto03}}" @endif />
					<input type="hidden" name="foto03_cropped" class="input_cropped">
				</div>
			</div>
		</div>
		<div class="col s8">
			<div class="row">
				<div class="input-field col s6">
					<input id="nome" name="nome" value="{{ !isset($individuo) ? old('nome') : $individuo->nome }}" type="text" class="validate" required="required">
					<label for="nome" class="active">@lang('controller/individuo.field_nome')*</label>
				</div>
				<div class="input-field col s6">
					<input id="alcunha" name="alcunha" value="{{ !isset($individuo) ? old('alcunha') : $individuo->alcunha }}" type="text">
					<label for="alcunha" class="active">@lang('controller/individuo.field_alcunha')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					<input id="mae" name="mae" value="{{ !isset($individuo) ? old('mae') : $individuo->mae }}" type="text">
					<label for="mae" class="active">@lang('controller/individuo.field_mae')</label>
				</div>
				<div class="input-field col s6">
					<input id="pai" name="pai" value="{{ !isset($individuo) ? old('pai') : $individuo->pai }}" type="text">
					<label for="pai" class="active">@lang('controller/individuo.field_pai')</label>
				</div>
			</div>

			<div class="row">
				<div class="input-field col s6">
					@if(!isset($individuo))

					<input id="rg" name="rg" value="{{old('rg')}}" type="text" class="mask-rg search-unique" data-unique="{{route('individuo.unique')}}" >

					@else

					<input id="rg" name="rg" value="{{$individuo->rg}}" type="text" class="mask-rg">
					
					@endif

					<label for="rg" class="active">@lang('controller/individuo.field_rg')</label>
				</div>
				<div class="input-field col s6">
					<input id="cpf" name="cpf" value="{{ !isset($individuo) ? old('cpf') : $individuo->cpf }}" type="text" class="mask-cpf">
					<label for="cpf" class="active">@lang('controller/individuo.field_cpf')</label>
				</div>
			</div>
		</div>

		<div class="row pl-1 pr-1">
			<div class="input-field col s4">
				<select name="estabelecimento_prisional_id" id="estabelecimento_prisional_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($estabPris->sortBy('name') as $estabPri)
					<option {{ ((isset($individuo) && $individuo->estabelecimento_prisional_id == $estabPri->id) || (old('estabelecimento_prisional_id') == $estabPri->id) ) ? 'selected="selected"' : '' }} value="{{$estabPri->id}}">{{$estabPri->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/individuo.field_estabelecimento_prisional_id')*</label>
			</div>
			<div class="input-field col s4">
				<select name="faccao_criminosa_id" id="faccao_criminosa_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($faccaos->sortBy('name') as $faccao)
					<option {{ ((isset($individuo) && $individuo->faccao_criminosa_id == $faccao->id) || (old('faccao_criminosa_id') == $faccao->id) ) ? 'selected="selected"' : '' }} value="{{$faccao->id}}">{{$faccao->name}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/individuo.field_faccao_criminosa_id')*</label>
			</div>
			<div class="input-field col s4">
				<input id="funcao_faccao" name="funcao_faccao" value="{{ !isset($individuo) ? old('funcao_faccao') : $individuo->funcao_faccao }}" type="text">
				<label for="funcao_faccao" class="active">@lang('controller/individuo.field_funcao_faccao')</label>
			</div>
		</div>

		@if(request()->is('publico-interno*'))
		
		<div class="row pl-1 pr-1">
			<div class="input-field col s6">
				<select name="tipo_militar" id="tipo_militar" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($tiposMilitar as $tpMilitar)
					<option {{ ((isset($individuo) && $individuo->tipo_militar == $tpMilitar['id']) || (old('tipo_militar') == $tpMilitar['id']) ) ? 'selected="selected"' : '' }} value="{{$tpMilitar['id']}}">@lang('controller/individuo.'.$tpMilitar['name'])</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/individuo.field_tipo_militar')*</label>
			</div>

			<div class="input-field col s6">
				<select name="opm_id" id="opm_id" class="validate no-formSelect select-buscavel" required="required">
					<option value="" disabled selected>@lang('common.select')</option>

					@foreach($opms->sortBy('nome_completo') as $opm)
					<option {{ ((isset($individuo) && $individuo->opm_id == $opm->id) || (old('opm_id') == $opm->id) ) ? 'selected="selected"' : '' }} value="{{$opm->id}}">{{$opm->nome_completo}}</option>
					@endforeach

				</select>
				<label class="label-select2">@lang('controller/individuo.field_opm_id')*</label>
			</div>
		</div>

		@endif

		<div class="row padding-1">
			<div class="col s10">
				<h5 class="">@lang('controller/individuo.endereco')</h5>	
			</div>
			<div class="col s2">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:addElemento('endereco')" data-position="top" data-tooltip="@lang('controller/individuo.add_endereco')">
					<i class="material-icons">add</i>
				</a>
			</div>
		</div>
		<input type="hidden" name="total_endereco" id="total_endereco" value="{{isset($individuo) ? $individuo->enderecos->count() : '0'}}">
		<div id="form-linhas-endereco">
			@if(isset($individuo))
			@foreach($individuo->enderecos as $i => $endereco)

			@php
			$LOCAL 		= 'endereco';
			$ID_INPUT 	= ($i+1);
			@endphp

			@include('individuo/form-endereco')
			@endforeach

			@php
			unset($endereco);
			@endphp
			
			@endif
		</div>

		<div class="row padding-1">
			<div class="col s10">
				<h5 class="">@lang('controller/individuo.telefone')</h5>	
			</div>
			<div class="col s2">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:addElemento('telefone')" data-position="top" data-tooltip="@lang('controller/individuo.add_telefone')">
					<i class="material-icons">add</i>
				</a>
			</div>
		</div>
		<input type="hidden" name="total_telefone" id="total_telefone" value="{{isset($individuo) ? $individuo->telefones->count() : '0'}}">
		<div id="form-linhas-telefone">
			@if(isset($individuo))
			@foreach($individuo->telefones as $i => $telefone)

			@php
			$LOCAL 		= 'telefone';
			$ID_INPUT 	= ($i+1);
			@endphp

			@include('individuo/form-telefone')
			@endforeach

			@php
			unset($telefone);
			@endphp
			
			@endif
		</div>

		<div class="row padding-1">
			<div class="col s10">
				<h5 class="">@lang('controller/individuo.tatuagem')</h5>	
			</div>
			<div class="col s2">
				<a class="btn btn-floating waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1" href="javascript:addElemento('tatuagem')" data-position="top" data-tooltip="@lang('controller/individuo.add_tatuagem')">
					<i class="material-icons">add</i>
				</a>
			</div>
		</div>
		<input type="hidden" name="total_tatuagem" id="total_tatuagem" value="{{isset($individuo) ? $individuo->tatuagens->count() : '0'}}">
		<div id="form-linhas-tatuagem">
			@if(isset($individuo))
			@foreach($individuo->tatuagens as $i => $tatuagem)

			@php
			$LOCAL 		= 'tatuagem';
			$ID_INPUT 	= ($i+1);
			@endphp

			@include('individuo/form-tatuagem')
			@endforeach

			@php
			unset($tatuagem);
			@endphp
			
			@endif
		</div>

		<div class="row padding-1">
			<div class="col s12">
				<h5 class="">@lang('controller/individuo.vinculos')</h5>	
			</div>
		</div>

		<div class="row pl-1 pr-1" id="linha-individuo">
			<div class="input-field col s12">
				<p class="custom-chips" for="tag_title">@lang('controller/individuo.name')</p>
				<div class="chips chips-autocomplete" id="chip-individuo"></div>
			</div>
		</div>

		<div class="row padding-1">
			<div class="col s12">
				<h5 class="">@lang('controller/individuo.natureza_crimes')</h5>	
			</div>
		</div>

		<div class="row pl-1 pr-1" id="linha-natureza">
			<div class="input-field col s12">
				<p class="custom-chips" for="tag_title">@lang('controller/individuo.natureza')</p>
				<div class="chips chips-autocomplete" id="chip-natureza"></div>
			</div>
		</div>

		<div class="row pl-1 pr-1">
			<div class="input-field col s12">
				<textarea  maxlength="2000" data-length="2000" id="observacoes" name="observacoes" class="materialize-textarea">{{ !isset($individuo) ? old('observacoes') : $individuo->observacoes }}</textarea>
				<label for="observacoes" class="active">@lang('controller/individuo.field_observacoes')</label>
			</div>
		</div>
		
		
		@include('layouts/partials/form-buttons')
	</form>

	<div class="hide" id="form-endereco">
		@php
		$LOCAL 		= 'endereco';
		$ID_INPUT 	= '{ID_INPUT}';
		@endphp
		@include('individuo/form-endereco')
	</div>

	<div class="hide" id="form-telefone">
		
		@php
		$LOCAL 		= 'telefone';
		$ID_INPUT 	= '{ID_INPUT}';
		@endphp
		
		@include('individuo/form-telefone')

	</div>
	<div class="hide" id="form-tatuagem">
		@php
		$LOCAL 		= 'tatuagem';
		$ID_INPUT 	= '{ID_INPUT}';
		@endphp
		@include('individuo/form-tatuagem')
	</div>
</div>

@endsection

@section('js')

{!! Theme::js('vendors/dropify/js/dropify.min.js') !!}
{!!Theme::js('js/scripts/cleave.min.js')!!}
{!!Theme::js('js/scripts/cleave-phone.br.js')!!}
{!!Theme::js('js/scripts/mascaras.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}
{!!Theme::js('js/custom/modal.js')!!}

@include('layouts/partials/dropify')

@include('individuo/chip-natureza-js')
@include('individuo/chip-vinculo-js')

@include('layouts/partials/add-delete-elementos')
@include('layouts/partials/unique')

<script type="text/javascript">
	$(document).ready(function() {
		
		$.ajaxSetup(
		{
			headers:
			{
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		initChipNatureza();
		initChipIndividuo();

		@if(isset($individuo))
		configEndereco();
		ativaFormSelect('endereco');
		configTatuagem();
		ativaFormSelect('tatuagem');
		configNatureza();
		configIndividuo();
		@endif

	});

	function configEndereco()
	{
		$('#form-linhas-endereco select').each(function (i)
		{
			var events = $._data(this, "events")
			
			if($(this).hasClass('select-estado') && ((events === undefined || events.change === undefined) || (!$(this).hasClass('altera-estado')) ))
			{
				$(this).on('change', function() {
					buscaEstado($(this));
				}).addClass('altera-estado');
			}
		});
	}

	function configTelefone()
	{
		$('#form-linhas-telefone .mask-fone').not('.has-mask-fone').toArray().forEach(function(field)
		{
			mascaraTelefone(field);
			$(field).addClass('has-mask-fone');
		});

	}

	function configTatuagem()
	{
		$('#form-linhas-tatuagem textarea').not('.has-counter').toArray().forEach(function(field)
		{
			M.CharacterCounter.init(field);
			$(field).addClass('has-counter');
		});

		$('#form-linhas-tatuagem .not-dropify').not('.dropify').toArray().forEach(function(field)
		{
			initDrops(field);

			var events = $._data($(field), "events");
			
			if((events === undefined || events.change === undefined))
			{
				$(field).on('change', function(e) {
					inputCrop($(this), e)
				});
			}

			$(field).addClass('dropify');
			$(field).removeClass('not-dropify');
		});
	}

	function buscaEstado(elemento)
	{
		let estado = $(elemento);
		let linha = elemento.parent().parent();

		let cidade = linha.find('.select-cidade');
		
		$.ajax(
		{
			type: "POST",
			url: "/estado/"+estado.val()+"/lista-cidades",
			data: {estado: estado.val()},
			success: function (data)
			{
				$(cidade).html('');
				$.each(data, function (key, item)
				{
					var option = $("<option>").attr("value",item.id).text(item.nome)
					$(cidade).append(option);
				});

				makeSelectBuscavel(cidade)
			},

		});
	}


</script>


@endsection