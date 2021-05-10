<?php

namespace App\Http\Controllers\Gestao\Estatistica;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Estatistica\NaturezaEstatistica;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class NaturezaEstatisticaController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('natureza-estatistica');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$naturezaEstatisticas = NaturezaEstatistica::all();
    	return $this->view('management/natureza-estatistica/index', compact('naturezaEstatisticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('management/natureza-estatistica/form');
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

    	NaturezaEstatistica::create($request->all());
    	
    	return redirect()->route('natureza-estatistica.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NaturezaEstatistica  $naturezaEstatistica
     * @return \Illuminate\Http\Response
     */
    public function show(NaturezaEstatistica $naturezaEstatistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NaturezaEstatistica  $naturezaEstatistica
     * @return \Illuminate\Http\Response
     */
    public function edit(NaturezaEstatistica $naturezaEstatistica)
    {
    	return $this->view('management/natureza-estatistica/form', compact('naturezaEstatistica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NaturezaEstatistica  $naturezaEstatistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NaturezaEstatistica $naturezaEstatistica)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$naturezaEstatistica->update($request->all());
    	return redirect()->route('natureza-estatistica.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NaturezaEstatistica  $naturezaEstatistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(NaturezaEstatistica $naturezaEstatistica)
    {
    	$naturezaEstatistica->delete();

    	return redirect()->route('natureza-estatistica.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
