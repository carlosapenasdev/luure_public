<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;

use App\Models\Management\PadraoDesenho;
use Illuminate\Http\Request;
use App\Services\UploadService;
use Lang;
use Alert;
use Auth;
use Image;

class PadraoDesenhoController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
		'arquivo' => 'sometimes|image',
	];

	public function __construct()
	{
		parent::__construct('padraodesenho');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$padraoDesenhos = PadraoDesenho::all();
    	return $this->view('management/padrao-desenho/index', compact('padraoDesenhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->view('management/padrao-desenho/form');
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

    	$padraoDesenho = PadraoDesenho::create($request->except('arquivo'));

    	if ($request->hasFile('arquivo') || ($request->has('arquivo_cropped') && !is_null($request->arquivo_cropped)))
    	{
    		$arquivoUrl       		= $this->handleUpload($request, $padraoDesenho);
    		
    		$padraoDesenho->arquivo = $arquivoUrl;
    		$padraoDesenho->save();
    	}


    	return redirect()->route('padrao-desenho.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\PadraoDesenho  $padraoDesenho
     * @return \Illuminate\Http\Response
     */
    public function show(PadraoDesenho $padraoDesenho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\PadraoDesenho  $padraoDesenho
     * @return \Illuminate\Http\Response
     */
    public function edit(PadraoDesenho $padraoDesenho)
    {
    	return $this->view('management/padrao-desenho/form', compact('padraoDesenho'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\PadraoDesenho  $padraoDesenho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PadraoDesenho $padraoDesenho)
    {    	
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$padraoDesenho->update($request->except('arquivo'));

    	if ($request->hasFile('arquivo') || $request->hasFile('arquivo_cropped'))
    	{
    		$arquivoUrl       		= $this->handleUpload($request, $padraoDesenho);
    		$padraoDesenho->arquivo = $arquivoUrl;
    		$padraoDesenho->save();
    	}

    	return redirect()->route('padrao-desenho.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\PadraoDesenho  $padraoDesenho
     * @return \Illuminate\Http\Response
     */
    public function destroy(PadraoDesenho $padraoDesenho)
    {
    	$padraoDesenho->delete();

    	return redirect()->route('padrao-desenho.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    protected function handleUpload($request, PadraoDesenho $padraoDesenho = null)
    {
    	$oldFile 		= null;
    	
    	if(is_null($padraoDesenho))
    		$filename 	= Str::random(12);
    	else
    	{
    		$oldFile 	= $padraoDesenho->arquivo;
    		$filename 	= str_pad($padraoDesenho->id , 4 , '0' , STR_PAD_LEFT).'_'.date('Y-m-d_H-i-s-U');
    	}

    	$folder 		= 'public/padrao-desenho';

    	$image_url 		= UploadService::saveImageBase64($request->arquivo_cropped, $folder, $filename);

    	$imageMaker = Image::make(public_path($image_url));
    	$imageMaker->fit(100, 100);
    	$imageMaker->save();

    	if(!is_null($oldFile)){
    		unlink(public_path($oldFile));
    	}
    	
    	return $image_url;
    }
}
