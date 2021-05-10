<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\Ambiente;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class AmbienteController extends Controller
{
    protected $rules = [
        'name' => 'string|required|min:2',
        'codigo' => 'string|required|min:9|max:9|unique:ambientes',
    ];

    public function __construct()
    {
        parent::__construct('ambiente');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambientes = Ambiente::all();
        return $this->view('management/ambiente/index', compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/ambiente/form');
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
        
        $ambiente = Ambiente::create($request->all());
        
        return redirect()->route('ambiente.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function show(Ambiente $ambiente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambiente $ambiente)
    {
        return $this->view('management/ambiente/form', compact('ambiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambiente $ambiente)
    {
    	$this->rules['codigo'] .= ',codigo,'.$ambiente->id;
    	
    	$validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        if(!$request->has('destaque'))
        	$request->merge(['destaque' => 0]);

        $ambiente->update($request->all());
        return redirect()->route('ambiente.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\Ambiente  $ambiente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambiente $ambiente)
    {
        $ambiente->delete();

        return redirect()->route('ambiente.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
