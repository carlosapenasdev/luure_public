<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\Origin;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;

class OriginController extends Controller
{
    protected $rules = [
        'name' => 'string|required|min:2',
    ];

    public function __construct()
    {
        parent::__construct('origin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $origins = Origin::all();
        return $this->view('management/origin/browse', compact('origins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/origin/form');
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

        $origin = Origin::create($request->all());
        
        return redirect()->route('origin.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function show(Origin $origin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function edit(Origin $origin)
    {
        return $this->view('management/origin/form', compact('origin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Origin $origin)
    {
        $validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        $origin->update($request->all());
        return redirect()->route('origin.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\Origin  $origin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Origin $origin)
    {
        $origin->delete();

        return redirect()->route('origin.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
