<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Management\Thematic;
use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;


class ThematicController extends Controller
{
    protected $rules = [
        'motif' => 'string|required|min:3',
    ];

    public function __construct()
    {
        parent::__construct('thematic');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thematics = Thematic::all();
        return $this->view('management/thematic/browse', compact('thematics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view('management/thematic/form');
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

        $thematic = Thematic::create($request->all());
        
        return redirect()->route('thematic.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thematic  $thematic
     * @return \Illuminate\Http\Response
     */
    public function show(Thematic $thematic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thematic  $thematic
     * @return \Illuminate\Http\Response
     */
    public function edit(Thematic $thematic)
    {
        return $this->view('management/thematic/form', compact('thematic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thematic  $thematic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thematic $thematic)
    {
        $validator = $this->validar($request);

        if(!is_null($validator))
            return $validator;

        $thematic->update($request->all());
        return redirect()->route('thematic.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thematic  $thematic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thematic $thematic)
    {
        $thematic->delete();

        return redirect()->route('thematic.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }
}
