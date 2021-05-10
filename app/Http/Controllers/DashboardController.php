<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protocolo\Protocolo;
use App\Models\Protocolo\Documento;
use App\Models\Management\DocumentoTipo;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Models\Operacao\Operacao;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DashboardController extends Controller
{
	private $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('auth');
    	parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
    	return $this->handleView($request);
    }

    public function buscarEstatistica(Request $request)
    {
    	return $this->handleView($request);
    }

    private function totaisApreensao()
    {
    	$request 	= $this->request;
    	$anos 		= Estatistica::anos();
    	$dia_ini 	= '01';

    	if(!$request->has('ano_de'))
    		$ano_ini = $anos->first();
    	else
    		$ano_ini = $request->ano_de == '' ? $anos->last() : $request->ano_de;

    	
    	if(!$request->has('ano_ate'))
    		$ano_fim = $anos->first();
    	else
    		$ano_fim = $request->ano_ate == '' ? $anos->first() : $request->ano_ate;
    	

    	if(!$request->has('mes_de'))
    		$mes_ini = '01';
    	else
    		$mes_ini = $request->mes_de == '' ? '01' : $request->mes_de;
    	

    	if(!$request->has('mes_ate'))
    	{
    		$mes_fim = '12';
    		$dia_fim = '31';
    	}
    	else
    	{
    		$mes_fim = $request->mes_ate == '' ? '12' : $request->mes_ate;
    		$dia_fim = $request->mes_ate == '' ? '31' : getCarbondate($dia_ini.'/'.$mes_fim.'/'.$ano_fim)->endOfMonth()->format('d');
    	}

    	
    	$periodo_de 	= $dia_ini.'/'.$mes_ini.'/'.$ano_ini;
    	$periodo_ate 	= $dia_fim.'/'.$mes_fim.'/'.$ano_fim;
    	
    	$this->request->merge([
    		'periodo_de' 	=> $periodo_de,
    		'periodo_ate' 	=> $periodo_ate,
    	]);

    	if(!$request->has('buscar-estatistica'))
    	{
    		$this->request->merge([
    			'ano_de' 		=> $anos->first(),
    			'mes_de' 		=> '01',

    			'ano_ate' 		=> $anos->first(),
    			'mes_ate' 		=> '12',
    		]);
    	}

    	#dd($request->all());

    	
    	return Estatistica::totaisApreensao($request);
    }

    private function totaisDocumentos()
    {
    	$documentoTipo 	= DocumentoTipo::tiposProduzido(false)->pluck('nome', 'id');
    	$retorno 		= [];
    	
    	foreach ($documentoTipo as $idTipo => $tipo)
    	{
    		$request 	= clone $this->request;

    		$request->merge([
    			'documento_tipo_id' => $idTipo,
    		]);

    		$documentos = Documento::buscar($request);
    		
    		if($documentos->count() > 0)
    		{	
    			$docTipo 	= ['total' => $documentos->count(), 'tipo' => $tipo];
    			$retorno[] 	= collect($docTipo);
    		}
    	}
    	
    	return collect($retorno)->sortByDesc('total');

    }

    private function totaisOperacoes()
    {
    	$request 		= clone $this->request;
    	
    	$opAbertas 		= Operacao::buscar($request)->sortBy('nome')->pluck('nome', 'id');
    	
    	$request->merge([
    		'so_finalizados' 	=> 1,
    	]);

    	$opFinalizadas 	= Operacao::buscar($request)->sortBy('nome')->pluck('nome', 'id');
    	
    	return collect(['abertas' => $opAbertas, 'finalizadas' => $opFinalizadas]);
    }

    private function handleView($request)
    {
    	$this->request 			= $request;
    	$anos 					= Estatistica::anos();
    	$operacaos 				= Operacao::all();
    	$totaisApreensao 		= $this->totaisApreensao();
    	$totaisDocumentos 		= $this->totaisDocumentos();
    	$totaisOperacoes 		= $this->totaisOperacoes();
    	
    	$request 				= $this->request;
    	$requestData 			= $request->all();

    	$porStatusVencimento 	= Protocolo::totaisPorStatusVencimento(clone $request);
    	$porTematica 			= Protocolo::totaisPorTematica(clone $request);
    	$porResponsaveis 		= Protocolo::totaisPorResponsaveis(clone $request);
    	
    	return $this->view('dashboard', compact('totaisApreensao', 'totaisDocumentos', 'totaisOperacoes','anos','requestData','operacaos', 'porStatusVencimento', 'porTematica', 'porResponsaveis'));
    }

}
