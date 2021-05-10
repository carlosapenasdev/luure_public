<?php

namespace App\Http\Controllers\Gestao\Estatistica;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Estatistica\AcaoEstatistica;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class AcaoEstatisticaController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('acao-estatistica');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$acaoEstatisticas = AcaoEstatistica::all();
    	return $this->view('management/acao-estatistica/index', compact('acaoEstatisticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('management/acao-estatistica/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$validator = $this->validar($request);
    	
    	if(!is_null($validator))
    		return $validator;

    	AcaoEstatistica::create($request->all());
    	
    	return redirect()->route('acao-estatistica.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcaoEstatistica  $acaoEstatistica
     * @return \Illuminate\Http\Response
     */
    public function show(AcaoEstatistica $acaoEstatistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcaoEstatistica  $acaoEstatistica
     * @return \Illuminate\Http\Response
     */
    public function edit(AcaoEstatistica $acaoEstatistica)
    {
    	return $this->view('management/acao-estatistica/form', compact('acaoEstatistica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcaoEstatistica  $acaoEstatistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcaoEstatistica $acaoEstatistica)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$acaoEstatistica->update($request->all());
    	return redirect()->route('acao-estatistica.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcaoEstatistica  $acaoEstatistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcaoEstatistica $acaoEstatistica)
    {
    	$acaoEstatistica->delete();

    	return redirect()->route('acao-estatistica.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
