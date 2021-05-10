<?php

namespace App\Http\Controllers\Gestao\Opm;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Opm\Opm;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class OpmController extends Controller
{
	protected $rules = [
		'nome' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('opm');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$opms = Opm::all();
    	return $this->view('gestao/opm/index', compact('opms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$opms = Opm::opmsChefia();
    	return $this->view('gestao/opm/form', compact('opms'));
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

    	Opm::create($request->all());
    	
    	return redirect()->route('opm.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function show(Opm $opm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function edit(Opm $opm)
    {
    	$opms = Opm::opmsChefia();
    	return $this->view('gestao/opm/form', compact('opms', 'opm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Opm $opm)
    {
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$opm->update($request->all());
    	return redirect()->route('opm.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Opm  $opm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opm $opm)
    {
    	$opm->delete();

    	return redirect()->route('opm.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
