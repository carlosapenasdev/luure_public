<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\EstabelecimentoPrisional;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class EstabelecimentoPrisionalController extends Controller
{
    protected $rules = [
        'name' => 'string|required|min:2',
    ];

    public function __construct()
    {
        parent::__construct('estabelecimento-prisional');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estabPris = EstabelecimentoPrisional::all();
        return $this->view('management/estabelecimento-prisional/index', compact('estabPris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/estabelecimento-prisional/form');
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

        $estabPri = EstabelecimentoPrisional::create($request->all());
        
        return redirect()->route('estabelecimento-prisional.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\EstabelecimentoPrisional  $estabPri
     * @return \Illuminate\Http\Response
     */
    public function show(EstabelecimentoPrisional $estabPri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\EstabelecimentoPrisional  $estabPri
     * @return \Illuminate\Http\Response
     */
    public function edit(EstabelecimentoPrisional $estabPri)
    {
        return $this->view('management/estabelecimento-prisional/form', compact('estabPri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\EstabelecimentoPrisional  $estabPri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstabelecimentoPrisional $estabPri)
    {
        $validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        $estabPri->update($request->all());
        return redirect()->route('estabelecimento-prisional.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\EstabelecimentoPrisional  $estabPri
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstabelecimentoPrisional $estabPri)
    {
        $estabPri->delete();

        return redirect()->route('estabelecimento-prisional.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
