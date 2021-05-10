<?php

namespace App\Http\Controllers\Gestao\Agencia;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Agencia\Agencia;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class AgenciaController extends Controller
{
	protected $rules = [
		'nome' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('agencia');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$agencias = Agencia::all();
    	return $this->view('gestao/agencia/index', compact('agencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$agencias = Agencia::all();
    	return $this->view('gestao/agencia/form', compact('agencias'));
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

    	if(!$request->has('usavel')) $request->merge(['usavel' => 0]);
    	
    	Agencia::create($request->all());
    	
    	return redirect()->route('agencias.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestao\Agencia\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function show(Agencia $agencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestao\Agencia\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Agencia $agencia)
    {
    	$agencias = Agencia::all();
    	return $this->view('gestao/agencia/form', compact('agencias', 'agencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gestao\Agencia\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agencia $agencia)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	if(!$request->has('usavel')) $request->merge(['usavel' => 0]);

    	$agencia->update($request->all());
    	return redirect()->route('agencias.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestao\Agencia\Agencia  $agencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agencia $agencia)
    {
    	$agencia->delete();

    	return redirect()->route('agencias.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
