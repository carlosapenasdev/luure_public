<?php

namespace App\Http\Controllers\Gestao\Estatistica;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Estatistica\OrigemEstatistica;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class OrigemEstatisticaController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('origem-estatistica');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$origemEstatisticas = OrigemEstatistica::all();
    	return $this->view('management/origem-estatistica/index', compact('origemEstatisticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('management/origem-estatistica/form');
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

    	OrigemEstatistica::create($request->all());
    	
    	return redirect()->route('origem-estatistica.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrigemEstatistica  $origemEstatistica
     * @return \Illuminate\Http\Response
     */
    public function show(OrigemEstatistica $origemEstatistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrigemEstatistica  $origemEstatistica
     * @return \Illuminate\Http\Response
     */
    public function edit(OrigemEstatistica $origemEstatistica)
    {
    	return $this->view('management/origem-estatistica/form', compact('origemEstatistica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrigemEstatistica  $origemEstatistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrigemEstatistica $origemEstatistica)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$origemEstatistica->update($request->all());
    	return redirect()->route('origem-estatistica.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrigemEstatistica  $origemEstatistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrigemEstatistica $origemEstatistica)
    {
    	$origemEstatistica->delete();

    	return redirect()->route('origem-estatistica.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
