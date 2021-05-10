<?php

namespace App\Http\Controllers\Gestao\Sistema;

use App\Http\Controllers\Controller;

use App\Models\Gestao\Sistema\Sistema;
use Illuminate\Http\Request;
use App\Services\UploadService;
use Lang;
use Alert;
use Auth;
use Image;

class SistemaController extends Controller
{
	protected $rules = [
		'name' => 'string|required|min:2',
	];

	public function __construct()
	{
		parent::__construct('sistema');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$sistemas = Sistema::all();
    	return $this->view('gestao/sistema/index', compact('sistemas'));
    }

    public function exibe()
    {
    	$sistemas = Sistema::all();
    	return $this->view('gestao/sistema/exibe', compact('sistemas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$sistemas = Sistema::all();
    	return $this->view('gestao/sistema/form', compact('sistemas'));
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

    	$sistema = Sistema::create($request->all());

    	if (!empty($request->banner_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('banner', $request, $sistema);
    		
    		$sistema->banner 	= $arquivoUrl;
    		$sistema->save();
    	}
    	
    	return redirect()->route('sistemas.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gestao\Sistema\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function show(Sistema $sistema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gestao\Sistema\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function edit(Sistema $sistema)
    {
    	$sistemas = Sistema::all();
    	return $this->view('gestao/sistema/form', compact('sistemas', 'sistema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gestao\Sistema\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sistema $sistema)
    {
    	$validator = $this->validar($request);
    	
    	if(!is_null($validator))
    		return $validator;

    	
    	if (!empty($request->banner_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('banner', $request, $sistema);
    		
    		$sistema->banner 	= $arquivoUrl;
    		$sistema->save();

    		$request->merge([
    			"banner" 					=> $arquivoUrl
    		]);
    	}

    	$sistema->update($request->all());
    	
    	return redirect()->route('sistemas.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gestao\Sistema\Sistema  $sistema
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sistema $sistema)
    {
    	$sistema->delete();

    	return redirect()->route('sistemas.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    protected function handleUpload($fileUpload, Request $request,Sistema $sistema = null)
    {
    	$oldFile 		= null;
    	
    	if(is_null($sistema))
    		$filename 	= Str::random(12);
    	else
    	{
    		if(!empty($sistema->$fileUpload))
    			$oldFile 	= $sistema->$fileUpload;

    		$filename 	= str_pad($sistema->id , 4 , '0' , STR_PAD_LEFT).'_'.$fileUpload.'_'.date('Y-m-d_H-i-s-U');
    	}

    	$folder 		= 'public/sistema';

    	$image_url 		= UploadService::saveImageBase64($request->get($fileUpload.'_cropped'), $folder, $filename);

    	$this->resizeImagem($image_url);
    	$this->deleteOldFile($oldFile);

    	return $image_url;
    }

    private function resizeImagem($image_url)
    {
    	$imageMaker = Image::make(public_path($image_url));
    	$imageMaker->fit(189, 60);
    	$imageMaker->save();
    }

    private function deleteOldFile($oldFile)
    {
    	if(!is_null($oldFile) && file_exists(public_path($oldFile)) && is_file(public_path($oldFile))  )
    	{
    		unlink(public_path($oldFile));
    	}
    }
}
