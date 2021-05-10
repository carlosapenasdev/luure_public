<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\RegiaoCorpo;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class RegiaoCorpoController extends Controller
{
    protected $rules = [
        'name' => 'string|required|min:2',
    ];

    public function __construct()
    {
        parent::__construct('regiaocorpo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regiaoCorpos = RegiaoCorpo::all();
        return $this->view('management/regiao-corpo/index', compact('regiaoCorpos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/regiao-corpo/form');
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
        
        $regiaoCorpo = RegiaoCorpo::create($request->all());
        
        return redirect()->route('regiao-corpo.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\RegiaoCorpo  $regiaoCorpo
     * @return \Illuminate\Http\Response
     */
    public function show(RegiaoCorpo $regiaoCorpo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\RegiaoCorpo  $regiaoCorpo
     * @return \Illuminate\Http\Response
     */
    public function edit(RegiaoCorpo $regiaoCorpo)
    {
        return $this->view('management/regiao-corpo/form', compact('regiaoCorpo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\RegiaoCorpo  $regiaoCorpo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegiaoCorpo $regiaoCorpo)
    {    	
    	$validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        if(!$request->has('destaque'))
        	$request->merge(['destaque' => 0]);

        $regiaoCorpo->update($request->all());
        return redirect()->route('regiao-corpo.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\RegiaoCorpo  $regiaoCorpo
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegiaoCorpo $regiaoCorpo)
    {
        $regiaoCorpo->delete();

        return redirect()->route('regiao-corpo.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
