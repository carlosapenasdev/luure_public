<?php

namespace App\Http\Controllers\Gestao\Efetivo;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Efetivo\AreaFormacao;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class AreaFormacaoController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('areaformacao');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$areaFormacaos = AreaFormacao::all();
    	return $this->view('gestao/efetivo/area-formacao/index', compact('areaFormacaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('gestao/efetivo/area-formacao/form');
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

    	AreaFormacao::create($request->all());
    	
    	return redirect()->route('area-formacao.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AreaFormacao  $areaFormacao
     * @return \Illuminate\Http\Response
     */
    public function show(AreaFormacao $areaFormacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AreaFormacao  $areaFormacao
     * @return \Illuminate\Http\Response
     */
    public function edit(AreaFormacao $areaFormacao)
    {
    	return $this->view('gestao/efetivo/area-formacao/form', compact('areaFormacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AreaFormacao  $areaFormacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AreaFormacao $areaFormacao)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$areaFormacao->update($request->all());
    	return redirect()->route('area-formacao.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AreaFormacao  $areaFormacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(AreaFormacao $areaFormacao)
    {
    	
    	$areaFormacao->delete();

    	return redirect()->route('area-formacao.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
