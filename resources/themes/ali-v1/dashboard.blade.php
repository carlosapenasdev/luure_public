@extends('layouts/dashboard')

@section('css')

{!!Theme::css('vendors/select2/select2.min.css')!!}

<style type="text/css">

	.section > div:nth-child(1)
	{
		background-color: #f2f4f8;
		border: none;
		box-shadow: none !important;
	}

	.subscription-table td
	{
		padding: 0;
	}

</style>


@endsection

@section('content')
<div class="card-content">

	@if (session('status'))
	<div class="alert alert-success" role="alert">
		{{ session('status') }}
	</div>
	@endif

	<div class="row">
		<div class="col s12">
			<form id="formulario" class="row" method="post" action="{{ route('dashboard.buscar-estatistica') }}" method="post">
				@csrf
				<input type="hidden" name="buscar-estatistica" value="1">
				<div class="col s3 offset-s2">
					<div class="card animate fadeLeft">
						<div class="card-content">
							<div class="row">
								<div class="col s12">
									<h6 class="lg">
										@lang('controller/dashboard.de')
									</h6>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field col s6">
										<select name="mes_de" id="mes_de" class="no-formSelect select-buscavel">
											<option value="" disabled selected>@lang('common.select')</option>
											@foreach(getMeses() as $mes => $mesExtenso)
											<option {{(isset($requestData) && $requestData['mes_de'] == $mes ) ? 'selected="selected"' : ''}} value="{{$mes}}">{{$mesExtenso}}</option>
											@endforeach
										</select>
										<label class="label-select2">@lang('common.mes')</label>
									</div>
									<div class="input-field col s6">
										<select name="ano_de" id="ano_de" class="no-formSelect select-buscavel">
											<option value="" disabled selected>@lang('common.select')</option>
											@foreach($anos as $ano)
											<option {{(isset($requestData) && $requestData['ano_de'] == $ano ) ? 'selected="selected"' : ''}} value="{{$ano}}">{{$ano}}</option>
											@endforeach
										</select>
										<label class="label-select2">@lang('common.ano')</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col s3">
					<div class="card animate fadeLeft">
						<div class="card-content">
							<div class="row">
								<div class="col s12">
									<h6 class="lg">
										@lang('controller/dashboard.ate')
									</h6>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field col s6">
										<select name="mes_ate" id="mes_ate" class="no-formSelect select-buscavel">
											<option value="" disabled selected>@lang('common.select')</option>
											@foreach(getMeses() as $mes => $mesExtenso)
											<option {{(isset($requestData) && $requestData['mes_ate'] == $mes ) ? 'selected="selected"' : ''}} value="{{$mes}}">{{$mesExtenso}}</option>
											@endforeach
										</select>
										<label class="label-select2">@lang('common.mes')</label>
									</div>
									<div class="input-field col s6">
										<select name="ano_ate" id="ano_ate" class="no-formSelect select-buscavel">
											<option value="" disabled selected>@lang('common.select')</option>
											@foreach($anos as $ano)
											<option {{(isset($requestData) && $requestData['ano_ate'] == $ano ) ? 'selected="selected"' : ''}} value="{{$ano}}">{{$ano}}</option>
											@endforeach
										</select>
										<label class="label-select2">@lang('common.ano')</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s2">
					<div class="card animate fadeLeft">
						<div class="card-content">
							<div class="row">
								<div class="col s12">
									<h6 class="lg">
										@lang('controller/estatistica.field_operacao')
									</h6>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<div class="input-field col s12">
										<select name="operacao_id" id="operacao_id" class="no-formSelect select-buscavel">
											<option value="" selected>@lang('common.todos')</option>
											@foreach($operacaos->sortBy('nome') as $operacao)
											<option {{(isset($requestData['operacao_id']) && $requestData['operacao_id'] == $operacao->id ) ? 'selected="selected"' : ''}} value="{{$operacao->id}}">{{$operacao->nome}}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m4 l4">
			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">@lang('controller/dashboard.resultado_total')</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<table class="subscription-table responsive-table">
								<tbody>
									@foreach($totaisApreensao as $key => $total)
									<tr>
										<td>@lang('controller/estatistica.field_'.$key)</td>
										<td>{{$total}}</td>
									</tr>
									
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			@unlessrole('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
			</div>
			<div class="col s12 m4 l8 animate fadeRight">
			@endunlessrole
			
			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">@lang('controller/dashboard.documentos_produzidos')</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<table class="subscription-table responsive-table">
								<tbody>
									@foreach($totaisDocumentos as $key => $documento)
									<tr>
										<td>{{$documento['tipo']}}</td>
										<td>{{$documento['total']}}</td>
									</tr>
									
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			@unlessrole('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
			</div>
			<div class="col s12 m4 l8 animate fadeRight">
			@endunlessrole

			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">@lang('controller/dashboard.operacoes')</h5>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<table class="subscription-table responsive-table">
								<tbody>
									@foreach($totaisOperacoes['abertas'] as $operacao)
									<tr>
										<td>{{$operacao}}</td>
										<td class="uppercase">@lang('controller/dashboard.operacao_ativa')</td>
									</tr>
									
									@endforeach

									@foreach($totaisOperacoes['finalizadas'] as $operacao)
									<tr>
										<td>{{$operacao}}</td>
										<td class="uppercase">@lang('controller/dashboard.operacao_finalizada')</td>
									</tr>
									
									@endforeach

									<tr>
										<td class="right pr-5"><strong>@lang('controller/dashboard.total')</strong></td>
										<td class="uppercase">
											{{$totaisOperacoes['abertas']->count() + $totaisOperacoes['finalizadas']->count()}}
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			@unlessrole('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
			</div>
			@endunlessrole

		</div>

		@role('root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')
		<div class="col s12 m8 l8 animate fadeRight">
			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">
								@lang('controller/dashboard.protocolo_por_situacao')
							</h5>
							<h6 class="sm">
								@lang('controller/dashboard.total_protocolos', ['total' => $porStatusVencimento['total']])
							</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<div id="chart_protocolo_por_situacao" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">
								@lang('controller/dashboard.protocolo_por_tematica')
							</h5>
							<h6 class="sm">
								@lang('controller/dashboard.total_protocolos', ['total' => $porTematica->sum('total')])
							</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<div id="chart_protocolo_por_tematica" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">
								@lang('controller/dashboard.protocolo_por_analista')
							</h5>
							<h6 class="sm">
								@lang('controller/dashboard.total_protocolos', ['total' => $porResponsaveis['analista']->sum('total')])
							</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<div id="chart_protocolo_por_analista" >
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card animate fadeLeft">
				<div class="card-content">
					<div class="row">
						<div class="col s12">
							<h5 class="">
								@lang('controller/dashboard.protocolo_por_elo')
							</h5>
							<h6 class="sm">
								@lang('controller/dashboard.total_protocolos', ['total' => $porResponsaveis['elo']->sum('total')])
							</h6>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<div id="chart_protocolo_por_elo" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endrole
	</div>
</div>
@endsection

@section('js')

{!!Theme::js('vendors/select2/select2.min.js')!!}
{!!Theme::js('vendors/apexcharts/apexcharts.min.js')!!}
{!!Theme::js('js/scripts/form-elements.js')!!}



<script type="text/javascript">

	var chartOptions = {
		responsive 					: true,
		maintainAspectRatio 		: false,
		responsiveAnimationDuration : 500,
		legend  					: {
			display: true
		},
		title: {
			display: true
		}
	};

	$( document ).ready(function()
	{
		$('select').on('change', function()
		{
			$(this).closest('form').submit();
		});

		gerarGraficoStatusVencimento();
		gerarGraficoTematicas();
		gerarGraficoAnalistas();
		gerarGraficoElos();


	});

	function gerarGraficoStatusVencimento()
	{
		let  series = [{
			name: "@lang('controller/dashboard.protocolo_no_prazo')",
			data: [{{$porStatusVencimento['abertos']['emDia']}}, {{$porStatusVencimento['finalizados']['emDia']}}]
		}, {
			name: "@lang('controller/dashboard.protocolo_vencido')",
			data: [{{$porStatusVencimento['abertos']['atrasado']}}, {{$porStatusVencimento['finalizados']['atrasado']}}]
		}];

		let categories 	= ["@lang('controller/dashboard.protocolo_por_situacao_aberto')", "@lang('controller/dashboard.protocolo_por_situacao_finalizado')"];
		let element 	= document.querySelector("#chart_protocolo_por_situacao");

		gerarGrafico(series, categories, element, 170);
	}

	function gerarGraficoTematicas()
	{
		let  series = [
		{
			name: "@lang('controller/dashboard.protocolo_no_prazo')",
			data: [
			@foreach($porTematica as $tematica)
			"{{$tematica['emDia']}}",
			@endforeach
			]
		},
		{
			name: "@lang('controller/dashboard.protocolo_vencido')",
			data: [
			@foreach($porTematica as $tematica)
			"{{$tematica['atrasado']}}",
			@endforeach
			]
		},

		];

		let categories 	= [

		@foreach($porTematica as $tematica)

		"{{$tematica['tema']}}",

		@endforeach

		];

		let element 	= document.querySelector("#chart_protocolo_por_tematica");

		gerarGrafico(series, categories, element, 500);
	}

	function gerarGraficoAnalistas()
	{
		let  series = [
		{
			name: "@lang('controller/dashboard.protocolo_no_prazo')",
			data: [
			@foreach($porResponsaveis['analista'] as $user)
			"{{$user['emDia']}}",
			@endforeach
			]
		},
		{
			name: "@lang('controller/dashboard.protocolo_vencido')",
			data: [
			@foreach($porResponsaveis['analista'] as $user)
			"{{$user['atrasado']}}",
			@endforeach
			]
		},

		];

		let categories 	= [

		@foreach($porResponsaveis['analista'] as $user)

		"{{$user['name']}}",

		@endforeach

		];

		let element 	= document.querySelector("#chart_protocolo_por_analista");

		gerarGrafico(series, categories, element, 250);
	}

	function gerarGraficoElos()
	{
		let  series = [
		{
			name: "@lang('controller/dashboard.protocolo_no_prazo')",
			data: [
			@foreach($porResponsaveis['elo'] as $user)
			"{{$user['emDia']}}",
			@endforeach
			]
		},
		{
			name: "@lang('controller/dashboard.protocolo_vencido')",
			data: [
			@foreach($porResponsaveis['elo'] as $user)
			"{{$user['atrasado']}}",
			@endforeach
			]
		},

		];

		let categories 	= [

		@foreach($porResponsaveis['elo'] as $user)

		"{{$user['name']}}",

		@endforeach

		];

		let element 	= document.querySelector("#chart_protocolo_por_elo");

		gerarGrafico(series, categories, element, 500);
	}

	function gerarGrafico(series, categories, element, altura)
	{
		let chart;

		const options = {
			series,
			chart: {
				type: "bar",
				height: altura,
				stacked: true,
				events: {
					mounted: (chartContext, config) => {
						setTimeout(() => {
							addAnnotations(config);
						});
					},
					updated: (chartContext, config) => {
						setTimeout(() => {
							addAnnotations(config);
						});
					}
				}
			},
			dataLabels: {
				enabled: true,
				formatter: function(value, { seriesIndex, dataPointIndex, w})
				{
					let percent = (value*100) / w.globals.stackedSeriesTotals[dataPointIndex];
					return percent.toFixed(0)+'%';
				}
			},
			plotOptions: {
				bar: {
					columnWidth: '100%',
					horizontal: true,
					dataLabels: {
						maxItems: 2
					}
				}
			},
			xaxis: {
				categories,
				axisTicks: {
					show: true
				},
				axisBorder: {
					show: true
				},
				labels: {
					hideOverlappingLabels: false,
				}
			},
			yaxis: {
				axisTicks: {
					show: true
				},
				axisBorder: {
					show: true
				},
				labels: {
					hideOverlappingLabels: true,
				}
			},
			fill: {
				opacity: 1
			},
			legend: {
				position: "top",
				horizontalAlign: "left"
			},
			colors: ['#43a047', '#ff5252'],
		};

		const addAnnotations = (config) => {
			
			const seriesTotals 	= config.globals.stackedSeriesTotals;
			const isHorizontal 	= options.plotOptions.bar.horizontal;
			const totalChart 	= seriesTotals.reduce((a, b) => a + b, 0);

			chart.clearAnnotations();

			try {
				categories.forEach((category, index) => {
					
					const pointText 	= seriesTotals[index] + ' / ' +((100*seriesTotals[index]) / totalChart).toFixed(0)+'%';
					
					let point 			= {
						y: isHorizontal ? calcHorizontalY(config, index) : seriesTotals[index],
						x: isHorizontal ? 0 : category,
						label: {
							text: `${pointText}`
						}
					};

					chart.addPointAnnotation( point);

					if (isHorizontal) {
						adjustPointAnnotationXCoord(config, index);
					}
				});
			} catch (error) {
			}
		};

		const calcHorizontalY = (config, index) => {
			const catLength 	= categories.length;
			const yRange 		= config.globals.yRange[0];
			const minY 			= config.globals.minY;
			const halfBarHeight = yRange / catLength / 2;

			return minY + halfBarHeight + 2 * halfBarHeight * (catLength - 1 - index);
		};

		const adjustPointAnnotationXCoord = (config, index) => {
			const gridWidth 	= config.globals.gridWidth;
			const seriesTotal 	= config.globals.stackedSeriesTotals[index];
			const minY 			= Math.abs(config.globals.minY);
			const yRange 		= config.globals.yRange[0];
			const xOffset 		= (gridWidth * (seriesTotal + minY)) / yRange;
			const chartId 		= config.globals.dom.baseEl.id;
			
			const circle 		= document.querySelector(
			                                        `#${chartId} .apexcharts-point-annotations circle:nth-of-type(${index + 1})`
			                                        );
			const labelField = document.querySelector(
			                                          `#${chartId} .apexcharts-point-annotations rect:nth-of-type(${index + 1}`
			                                          );
			const labelFieldXCoord = parseFloat(labelField.getAttribute("x"));
			const text = document.querySelector(
			                                    `#${chartId} .apexcharts-point-annotations text:nth-of-type(${index + 1}`
			                                    );

			labelField.setAttribute("x", labelFieldXCoord + xOffset);
			text.setAttribute("x", xOffset);
			circle.setAttribute("cx", xOffset);
		};

		chart = new ApexCharts(element, options);
		chart.render();
	}


</script>

@endsection