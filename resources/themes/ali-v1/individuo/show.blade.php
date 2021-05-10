@extends('layouts/browse')

@section('css')

{!! Theme::css('vendors/magnific-popup/magnific-popup.css') !!}
{!! Theme::css('vendors/animate/animate.min.css') !!}

@endsection

@section('content')

<div class="card-content">
	<div class="section" id="user-profile">

		<div class="row">
			<div class="col s12 m4 l4 user-section-negative-margin">
				<div class="popup-gallery">
					@if($individuo->hasFoto01())
					<div class="row">
						<div class="col s12 center-align">
							<a href="{{url($individuo->perfil)}}" title="{{$individuo->nome}}" class="link-galeria">
								<img class="responsive-img circle z-depth-5" src="{{url($individuo->perfil)}}" alt="" width="200">
							</a>
						</div>
					</div>
					@endif

					@if($individuo->hasFoto02() || $individuo->hasFoto03() )
					<div class="row user-projects">

						@if($individuo->hasFoto02())
						<div class="col offset-s2 s4">
							<a href="{{url($individuo->getFoto(2))}}" title="{{$individuo->nome}}" class="link-galeria">
								<img class="responsive-img photo-border mt-10" alt="" src="{{url($individuo->getFoto(2))}}">
							</a>
						</div>
						@endif

						@if($individuo->hasFoto03() )
						<div class="col s4">
							<a href="{{url($individuo->getFoto(3))}}" title="{{$individuo->nome}}" class="link-galeria">
								<img class="responsive-img photo-border mt-10" alt="" src="{{url($individuo->getFoto(3))}}">
							</a>
						</div>
						@endif

					</div>
					@endif

					@if($individuo->hasFoto01() || $individuo->hasFoto02() || $individuo->hasFoto03() )
					<hr class="mt-8 mb-8">
					@endif

					@if($individuo->crimes->count() > 0)

					<div class="chip-crimes">
						@foreach($individuo->crimes as $k => $crime)

						<div class="chip chip-crime mb-2">
							{{$crime->codigo_name}}
						</div>
						@endforeach	
					</div>
					<hr class="mt-8 mb-8">
					@endif

					@if($individuo->tatuagens->count() > 0)

					<div class="" id="galeria-tatoo">
						<div class="popup-gallery">
							<div class="row">
								@foreach($individuo->tatuagens as $k => $tatuagem)
								<div class="col s6 m6 l6 xl4">
									<div class="card">
										<div class="card-image">
											<div>
												<a href="{{url($tatuagem->getArquivo())}}" title="{{$tatuagem->padraoDesenho->name}} | {{$tatuagem->regiaoCorpo->name}} | {{$tatuagem->detalhamento}}" class="link-galeria">
													<img src="{{url($tatuagem->getArquivo())}}" class="responsive-img mb-10" alt="">
												</a>
											</div>
										</div>
										<div class="card-content card-legenda-tatoo">
											<p class="uppercase truncate">{{$tatuagem->padraoDesenho->name}}</p>
											<p class="uppercase truncate">{{$tatuagem->regiaoCorpo->name}}</p>
											<p class="truncate">{{$tatuagem->detalhamento}}</p>
										</div>
									</div>
								</div>
								@endforeach

							</div>
						</div>
					</div>
					@endif

					@if($individuo->vinculos->count() > 0)
					<div class="row">
						<div class="col s12">
							
							<p class="xxl black-text">@lang('controller/individuo.vinculos')</p>
						</div>
					</div>
					
					@foreach($individuo->vinculos as $vinculo)
					<div class="row mt-2">
						<div class="col s2 mt-2 pr-0 circle">
							<a href="{{route('individuo.show', $vinculo)}}" class="link-pmpr">
								<img class="responsive-img circle" src="{{url($vinculo->perfil)}}" alt="">
							</a>
						</div>
						<div class="col s9">
							<a href="{{route('individuo.show', $vinculo)}}" class="link-pmpr">
								<p class="m-0">{{$vinculo->id_nome}}</p>
							</a>

							@if($vinculo->hasAlcunha())
							<p class="m-0 grey-text lighten-3">@lang('controller/individuo.field_alcunha'): {{$vinculo->alcunha}}</p>
							@endif

						</div>
					</div>
					@endforeach
					@endif
				</div>
			</div>

			<div class="col s12 m8 l8">
				<div class="row">

					<div class="card-content card-border-gray pt-0">
						<div class="row">
							<div class="col s12">
								<div>
									<h4 class="uppercase left">{{$individuo->nome}}</h4>

									<a data-html2canvas-ignore class="btn btn-floating btn-large waves-effect waves-light breadcrumbs-btn right tooltipped grey darken-4 mr-1 modal-trigger reduzir80" href="javascript:pdfPage($('#user-profile')[0], '{{$printName}}.pdf');" data-position="top" data-tooltip="{{Lang::get('common.controller_print')}}">
										<i class="material-icons dossier-icons dp48">print</i>
									</a>
									@if(request()->is('individuo*'))
									<a data-html2canvas-ignore class="btn btn-floating btn-large waves-effect waves-light green darken-1 tooltipped reduzir80 right" href="{{route('individuo.edit', ($individuo->slug()))}}" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
										<i class="material-icons dossier-icons dp48">create</i>
									</a>
									@else
									<a data-html2canvas-ignore class="btn btn-floating btn-large waves-effect waves-light green darken-1 tooltipped reduzir80 right" href="{{route('publico-interno.edit', ($individuo->slug()))}}" data-position="top" data-tooltip="{{Lang::get('common.controller_edit')}}">
										<i class="material-icons dossier-icons dp48">create</i>
									</a>
									@endif

								</div>

								@if($individuo->hasAlcunha())
								<p class="left width-100">@lang('controller/individuo.field_alcunha'): {{$individuo->alcunha}}</p>
								@endif

							</div>
						</div>

						@if(request()->is('publico-interno*'))
						<div class="row mt-2">
							<div class="col s6 xl black-text">
								@lang('controller/individuo.field_tipo_militar_'.$individuo->tipo_militar)
							</div>
							<div class="col s6 xl black-text">
								{{$individuo->opm->nome}}
							</div>
						</div>
						@endif

						<div class="row mt-2">
							<div class="col s12 mb-3">
								<p class="m-0 xxl black-text">@lang('controller/individuo.dados_pessoais')</p>
							</div>
							@if($individuo->hasMae())
							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_mae')</p>
								<p class="m-0 mb-5">
									{{$individuo->mae}}
								</p>
							</div>
							@endif

							@if($individuo->hasPai())
							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_pai')</p>
								<p class="m-0 mb-5">
									{{$individuo->pai}}
								</p>
							</div>
							@endif

							@if($individuo->hasRg())
							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_rg')</p>
								<p class="m-0 mb-5">
									{{$individuo->rg}}
								</p>
							</div>
							@endif

							@if($individuo->hasCpf())
							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_cpf')</p>
								<p class="m-0 mb-5">
									{{$individuo->cpf}}
								</p>
							</div>
							@endif

							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_estabelecimento_prisional_id')</p>
								<p class="m-0 mb-5">
									{{$individuo->estabelecimentoPrisional->name}}
								</p>
							</div>

							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_faccao_criminosa_id')</p>
								<p class="m-0 mb-5">
									{{$individuo->faccaoCriminosa->name}}
								</p>
							</div>

							@if($individuo->hasFuncaoFaccao())
							<div class="col s6">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_funcao_faccao')</p>
								<p class="m-0 mb-5">
									{{$individuo->funcao_faccao}}
								</p>
							</div>
							@endif

							@if(!empty($individuo->observacoes))
							<div class="col s12">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_observacoes')</p>
								<p class="m-0 mb-5">
									<span> {!! nl2br(e($individuo->observacoes))!!}</span>
								</p>
							</div>
							@endif
						</div>
						<hr class="mt-2 mb-3">

						@if($individuo->enderecos->count() > 0)
						<div class="row mt-2 mb-3">
							<div class="col s12 pl-1">
								<p class="m-0 xxl black-text">@lang('controller/individuo.endereco')</p>
							</div>
						</div>

						@foreach($individuo->enderecos as $k => $endereco)
						<div class="row m-0">
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_estado_id')</p>
								<p class="m-0 mb-5">
									{{$endereco->estado->nome}}
								</p>
							</div>
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_cidade_id')</p>
								<p class="m-0 mb-5">
									{{$endereco->cidade->nome}}
								</p>
							</div>
							@if(!empty($endereco->rua))
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_rua')</p>
								<p class="m-0 mb-5">
									{{$endereco->rua}}
								</p>
							</div>
							@endif

							@if(!empty($endereco->numero))
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_numero')</p>
								<p class="m-0 mb-5">
									{{$endereco->numero}}
								</p>
							</div>
							@endif

							@if(!empty($endereco->bairro))
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_bairro')</p>
								<p class="m-0 mb-5">
									{{$endereco->bairro}}
								</p>
							</div>
							@endif

							@if(!empty($endereco->observacao))
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_observacao')</p>
								<p class="m-0 mb-5">
									{{$endereco->observacao}}
								</p>
							</div>
							@endif

							@if(($k+1) < $individuo->enderecos->count())
							<div class="col s6 offset-s3">
								<hr class="mt-2 mb-3">
							</div>
							@endif
						</div>
						@endforeach

						<hr class="mt-2 mb-3">
						@endif

						@if($individuo->telefones->count() > 0)
						<div class="row mt-2 mb-3">
							<div class="col s12 pl-1">
								<p class="m-0 xxl black-text">@lang('controller/individuo.telefone')</p>
							</div>
						</div>

						@foreach($individuo->telefones as $k => $telefone)
						<div class="row m-0">
							@if(!empty($telefone->telefone))
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_telefone')</p>
								<p class="m-0 mb-5">
									{{$telefone->telefone}}
								</p>
							</div>
							@endif

							@if(!empty($telefone->observacao))
							<div class="col s4 p-0">
								<p class="m-0 xl black-text">@lang('controller/individuo.field_observacao')</p>
								<p class="m-0 mb-5">
									{{$telefone->observacao}}
								</p>
							</div>
							@endif

							@if(($k+1) < $individuo->telefones->count())
							<div class="col s6 offset-s3">
								<hr class="mt-2 mb-3">
							</div>
							@endif
						</div>
						@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
		<hr class="mt-2 mb-3">
		<div class="row">
			<div class="col s12">
				<div class="feed-individuos">
					<div class="row mt-0 mb-1 no-break">
						<div class="col s12 pl-1">
							<p class="m-0 xxl black-text left">@lang('historico.name')</p>

							<div class="left ml-2" data-html2canvas-ignore>
								<div class="switch">
									<label>
										<input type="checkbox" name="exibir_modificacoes" id="exibir_modificacoes">
										<span class="lever"></span>
										@lang('controller/individuo.exibir_modificacoes')
									</label>
								</div>
							</div>

						</div>
					</div>

					@if(!empty($individuo) && $individuo->historico()->isNotEmpty())

					@include('individuo/historico-atividade')

					@endif
					
				</div>
			</div>
		</div>

	</div>
</div>

@endsection

@section('js')

{!!Theme::js('/vendors/magnific-popup/jquery.magnific-popup.min.js')!!}
{!!Theme::js('/vendors/magnific-popup/imagesloaded.pkgd.min.js')!!}

{!!Theme::js('/vendors/html2pdf/html2pdf.bundle.min.js')!!}
{!!Theme::js('/vendors/html2pdf/html2pdf.print.js')!!}


<script type="text/javascript">

	const animateCSS = (element, animation, prefix = 'animate__') =>
	new Promise((resolve, reject) => {
		const animationName = `${prefix}${animation}`;
		const node = element;


		node.classList.add(`${prefix}animated`, animationName);

		function handleAnimationEnd() {
			node.classList.remove(`${prefix}animated`, animationName);
			resolve('Animation ended');
		}

		node.addEventListener('animationend', handleAnimationEnd, {once: true});
	});


	$(function() {
		
		esconderModificacoes();

		$('.popup-gallery').each(function() {
			$(this).magnificPopup({
				delegate: 'a.link-galeria',
				type: 'image',
				closeOnContentClick: true,
				fixedContentPos: true,
				mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
				gallery: {
					enabled: true,
					preload: [0,2]
				},
				image: {
					verticalFit: true,
					zoom: {
						enabled: true,
						duration: 300
					}
				}
			});
		});


		$("#exibir_modificacoes").on("change",function() {
			var status = $(this).prop('checked');

			if(status)
			{
				exibirModificacoes();
			}
			else
			{
				esconderModificacoes();
			}
		});
	});

	function exibirModificacoes()
	{
		$('.historico-atividade').each(function (i)
		{
			let linha = $(this).closest('.row.mt-1');
			
			linha.removeClass('hide');

			animateCSS(linha[0], 'fadeInRight').then((message) => {
			});

		});
	}

	function esconderModificacoes()
	{
		$('.historico-atividade').each(function (i)
		{
			let linha = $(this).closest('.row.mt-1');

			linha.attr('data-html2canvas-ignore', '');

			animateCSS(linha[0], 'fadeOutRight').then((message) => {
				linha.addClass('hide');
			});

		});
	}

</script>

@endsection