<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\DocumentoTipo;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class DocumentoTipoController extends Controller
{
	protected $rules = [
		'nome' => 'string|required|min:2',
		'tipo' => 'boolean|required',
	];

	public function __construct()
	{
		parent::__construct('documentotipo');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$documentotipos = DocumentoTipo::all();
    	return $this->view('management/documentotipo/browse', compact('documentotipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('management/documentotipo/form');
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

    	$documentotipo = DocumentoTipo::create($request->all());

    	return redirect()->route('documentotipo.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\DocumentoTipo  $documentotipo
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentoTipo $documentotipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\DocumentoTipo  $documentotipo
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentoTipo $documentotipo)
    {
    	return $this->view('management/documentotipo/form', compact('documentotipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\DocumentoTipo  $documentotipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentoTipo $documentotipo)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$documentotipo->update($request->all());
    	return redirect()->route('documentotipo.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\DocumentoTipo  $documentotipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentoTipo $documentotipo)
    {
    	$documentotipo->delete();

    	return redirect()->route('documentotipo.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    public function numeracao(DocumentoTipo $documentotipo)
    {
    	$numero = $documentotipo->ultimoNumero()->numero;
    	
    	return response()->json([
    		'numero' => $numero+1,
    	]);
    }
}
