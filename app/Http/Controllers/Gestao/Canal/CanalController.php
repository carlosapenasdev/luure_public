<?php

namespace App\Http\Controllers\Gestao\Canal;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Canal\Canal;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class CanalController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('canal');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$canais = Canal::all();
    	return $this->view('gestao/canal/index', compact('canais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('gestao/canal/form');
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

    	Canal::create($request->all());
    	
    	return redirect()->route('canal.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function show(Canal $canal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function edit(Canal $canal)
    {
    	return $this->view('gestao/canal/form', compact('canal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Canal $canal)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$canal->update($request->all());
    	return redirect()->route('canal.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Canal  $canal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Canal $canal)
    {
    	$canal->delete();

    	return redirect()->route('canal.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
