<?php

namespace App\Http\Controllers\Gestao\Efetivo;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Efetivo\Escolaridade;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class EscolaridadeController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('escolaridade');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$escolaridades = Escolaridade::all();
    	return $this->view('gestao/efetivo/escolaridade/index', compact('escolaridades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('gestao/efetivo/escolaridade/form');
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

    	Escolaridade::create($request->all());
    	
    	return redirect()->route('escolaridade.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Escolaridade  $escolaridade
     * @return \Illuminate\Http\Response
     */
    public function show(Escolaridade $escolaridade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Escolaridade  $escolaridade
     * @return \Illuminate\Http\Response
     */
    public function edit(Escolaridade $escolaridade)
    {
    	return $this->view('gestao/efetivo/escolaridade/form', compact('escolaridade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Escolaridade  $escolaridade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Escolaridade $escolaridade)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$escolaridade->update($request->all());
    	return redirect()->route('escolaridade.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Escolaridade  $escolaridade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Escolaridade $escolaridade)
    {
    	
    	$escolaridade->delete();

    	return redirect()->route('escolaridade.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
