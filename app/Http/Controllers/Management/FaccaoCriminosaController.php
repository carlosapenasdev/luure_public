<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\FaccaoCriminosa;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class FaccaoCriminosaController extends Controller
{
    protected $rules = [
        'name' => 'string|required|min:2',
    ];

    public function __construct()
    {
        parent::__construct('faccao-criminosa');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faccaos = FaccaoCriminosa::all();
        return $this->view('management/faccao-criminosa/index', compact('faccaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/faccao-criminosa/form');
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

        $faccao = FaccaoCriminosa::create($request->all());
        
        return redirect()->route('faccao-criminosa.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\FaccaoCriminosa  $faccao
     * @return \Illuminate\Http\Response
     */
    public function show(FaccaoCriminosa $faccao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\FaccaoCriminosa  $faccao
     * @return \Illuminate\Http\Response
     */
    public function edit(FaccaoCriminosa $faccao)
    {
        return $this->view('management/faccao-criminosa/form', compact('faccao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\FaccaoCriminosa  $faccao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FaccaoCriminosa $faccao)
    {
        $validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        $faccao->update($request->all());
        return redirect()->route('faccao-criminosa.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\FaccaoCriminosa  $faccao
     * @return \Illuminate\Http\Response
     */
    public function destroy(FaccaoCriminosa $faccao)
    {
        $faccao->delete();

        return redirect()->route('faccao-criminosa.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
