<?php

namespace App\Http\Controllers\Gestao\Efetivo;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Efetivo\PostoGraduacao;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class PostoGraduacaoController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('postograduacao');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$postoGraduacaos = PostoGraduacao::all();
    	return $this->view('gestao/efetivo/posto-graduacao/index', compact('postoGraduacaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('gestao/efetivo/posto-graduacao/form');
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

    	PostoGraduacao::create($request->all());
    	
    	return redirect()->route('posto-graduacao.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostoGraduacao  $postoGraduacao
     * @return \Illuminate\Http\Response
     */
    public function show(PostoGraduacao $postoGraduacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostoGraduacao  $postoGraduacao
     * @return \Illuminate\Http\Response
     */
    public function edit(PostoGraduacao $postoGraduacao)
    {
    	return $this->view('gestao/efetivo/posto-graduacao/form', compact('postoGraduacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostoGraduacao  $postoGraduacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostoGraduacao $postoGraduacao)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$postoGraduacao->update($request->all());
    	return redirect()->route('posto-graduacao.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostoGraduacao  $postoGraduacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostoGraduacao $postoGraduacao)
    {
    	
    	$postoGraduacao->delete();

    	return redirect()->route('posto-graduacao.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
