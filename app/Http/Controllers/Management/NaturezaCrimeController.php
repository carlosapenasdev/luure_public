<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\NaturezaCrime;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class NaturezaCrimeController extends Controller
{
    protected $rules = [
        'name' => 'string|required|min:2',
        'codigo' => 'string|required|min:10|max:10|unique:natureza_crimes',
    ];

    public function __construct()
    {
        parent::__construct('naturezacrime');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crimes = NaturezaCrime::all();
        return $this->view('management/natureza-crime/index', compact('crimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/natureza-crime/form');
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

        if(!$request->has('destaque'))
        	$request->merge(['destaque' => 0]);
        
        $crime = NaturezaCrime::create($request->all());
        
        return redirect()->route('natureza-crime.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\NaturezaCrime  $crime
     * @return \Illuminate\Http\Response
     */
    public function show(NaturezaCrime $crime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\NaturezaCrime  $crime
     * @return \Illuminate\Http\Response
     */
    public function edit(NaturezaCrime $crime)
    {
        return $this->view('management/natureza-crime/form', compact('crime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\NaturezaCrime  $crime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NaturezaCrime $crime)
    {
    	$this->rules['codigo'] .= ',codigo,'.$crime->id;
    	
    	$validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        if(!$request->has('destaque'))
        	$request->merge(['destaque' => 0]);

        $crime->update($request->all());
        return redirect()->route('natureza-crime.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\NaturezaCrime  $crime
     * @return \Illuminate\Http\Response
     */
    public function destroy(NaturezaCrime $crime)
    {
        $crime->delete();

        return redirect()->route('natureza-crime.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
