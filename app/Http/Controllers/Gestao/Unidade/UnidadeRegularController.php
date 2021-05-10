<?php

namespace App\Http\Controllers\Gestao\Unidade;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Unidade\UnidadeRegular;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class UnidadeRegularController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('unidaderegular');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$unidadesRegular = UnidadeRegular::all();
    	return $this->view('management/unidade/regular/index', compact('unidadesRegular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('management/unidade/regular/form');
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

    	UnidadeRegular::create($request->all());
    	
    	return redirect()->route('unidade-regular.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnidadeRegular  $unidadeRegular
     * @return \Illuminate\Http\Response
     */
    public function show(UnidadeRegular $unidadeRegular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnidadeRegular  $unidadeRegular
     * @return \Illuminate\Http\Response
     */
    public function edit(UnidadeRegular $unidadeRegular)
    {
    	return $this->view('management/unidade/regular/form', compact('unidadeRegular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnidadeRegular  $unidadeRegular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnidadeRegular $unidadeRegular)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$unidadeRegular->update($request->all());
    	return redirect()->route('unidade-regular.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnidadeRegular  $unidadeRegular
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnidadeRegular $unidadeRegular)
    {
    	$unidadeRegular->delete();

    	return redirect()->route('unidade-regular.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
