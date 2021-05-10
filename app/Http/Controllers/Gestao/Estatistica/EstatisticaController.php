<?php

namespace App\Http\Controllers\Gestao\Estatistica;

use App\Http\Controllers\Controller;
use App\Models\Gestao\Estatistica\AcaoEstatistica;
use App\Models\Gestao\Estatistica\NaturezaEstatistica;
use App\Models\Gestao\Estatistica\OrigemEstatistica;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Http\Requests\EstatisticaRequest;
use App\Models\Operacao\Operacao;
use Illuminate\Http\Request;
use App\Models\Individuo\Individuo;
use Lang;
use Alert;
use Auth;

class EstatisticaController extends Controller
{
	public function __construct()
	{
		parent::__construct('estatistica');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$request->merge([
    		'periodo_de' => '01/'.date('m').'/'.date('Y'),
    		'periodo_ate' => date('d').'/'.date('m').'/'.date('Y')
    	]);
    	
    	return $this->buscar($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$acaoEstatisticas 		= AcaoEstatistica::all();
    	$naturezaEstatisticas 	= NaturezaEstatistica::all();
    	$origemEstatisticas 	= OrigemEstatistica::all();
    	$operacaos 				= Operacao::all();
    	$individuos 			= Individuo::individuosToChip();

    	return $this->view('estatistica/form', compact('acaoEstatisticas', 'naturezaEstatisticas', 'origemEstatisticas', 'operacaos', 'individuos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstatisticaRequest $request)
    {

    	$estatistica = Estatistica::create($request->all());

    	if ($request->has('individuo'))
    	{
    		$estatistica->presos()->sync($request->individuo);
    	}
    	
    	return redirect()->route('estatistica.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estatistica  $estatistica
     * @return \Illuminate\Http\Response
     */
    public function show(Estatistica $estatistica)
    {
        return $this->edit($estatistica, false);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estatistica  $estatistica
     * @return \Illuminate\Http\Response
     */
    public function edit(Estatistica $estatistica, $editar = true)
    {
    	$acaoEstatisticas 		= AcaoEstatistica::all();
    	$naturezaEstatisticas 	= NaturezaEstatistica::all();
    	$origemEstatisticas 	= OrigemEstatistica::all();
    	$operacaos 				= Operacao::all();
    	$individuos 			= Individuo::individuosToChip();
    	$indInit 				= $estatistica->presos->pluck('id_nome')->toJson();
    	
    	return $this->view('estatistica/form', compact('estatistica', 'acaoEstatisticas', 'naturezaEstatisticas', 'origemEstatisticas', 'operacaos', 'individuos', 'indInit', 'editar'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estatistica  $estatistica
     * @return \Illuminate\Http\Response
     */
    public function update(EstatisticaRequest $request, Estatistica $estatistica)
    {
    	$estatistica->update($request->all());
    	
    	if ($request->has('individuo'))
    	{
    		$estatistica->presos()->sync($request->individuo);
    	}
    	else
    	{
    		$estatistica->presos()->detach();
    	}

    	return redirect()->route('estatistica.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estatistica  $estatistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estatistica $estatistica)
    {
    	$estatistica->delete();

    	return redirect()->route('estatistica.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    public function buscar(Request $request)
    {
    	$estatisticas 			= Estatistica::buscar($request);

    	$acaoEstatisticas 		= AcaoEstatistica::all();
    	$naturezaEstatisticas 	= NaturezaEstatistica::all();
    	$origemEstatisticas 	= OrigemEstatistica::all();
    	$operacaos 				= Operacao::all();

    	return $this->view('estatistica/index', compact('request', 'estatisticas', 'acaoEstatisticas', 'naturezaEstatisticas', 'origemEstatisticas', 'operacaos'));
    }
}
