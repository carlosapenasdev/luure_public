<?php

namespace App\Http\Controllers\Individuo;

use App\Http\Controllers\Controller;

use App\Models\Individuo\Individuo;
use App\Models\Management\EstabelecimentoPrisional;
use App\Models\Management\FaccaoCriminosa;
use App\Models\Management\Estado;
use App\Models\Management\Cidade;
use App\Models\Management\PadraoDesenho;
use App\Models\Management\RegiaoCorpo;
use App\Models\Management\NaturezaCrime;
use App\Models\Individuo\EnderecoIndividuo;
use App\Models\Individuo\TelefoneIndividuo;
use App\Models\Individuo\TatuagemIndividuo;
use App\Services\UploadService;
use Illuminate\Support\Str;
use App\Models\Gestao\Opm\Opm;

use Illuminate\Http\Request;
use Lang;
use Alert;
use Auth;
use Image;

class IndividuoController extends Controller
{
	public function __construct()
	{
		parent::__construct('individuo');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if(request()->is('individuo*'))
    		$listaIndividuos = Individuo::elementos();
    	else
    		$listaIndividuos = Individuo::publicoInterno();

    	$estabPris      = EstabelecimentoPrisional::all();
    	$faccaos        = FaccaoCriminosa::all();

    	$estados        = Estado::all();
    	$estadoDefault  = Estado::getDefault();

    	$cidades        = Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault  = Cidade::getDefault();
    	$padraoDesenhos = PadraoDesenho::whereNotNull('id')->orderBy('name', 'asc')->get();
    	$regiaoCorpos   = RegiaoCorpo::all();
    	$crimes         = NaturezaCrime::listar()->pluck('codigo_name')->toJson();
    	$individuos     = Individuo::individuosToChip();
    	$tiposMilitar 	= Individuo::tiposMilitar();
    	$opms 			= Opm::all();

    	return $this->view('individuo/index', compact('listaIndividuos', 'individuos', 'estabPris', 'faccaos', 'estados', 'estadoDefault', 'cidades', 'cidadeDefault', 'padraoDesenhos', 'regiaoCorpos', 'crimes', 'tiposMilitar', 'opms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$estabPris 		= EstabelecimentoPrisional::all();
    	$faccaos 		= FaccaoCriminosa::all();
    	$estados 		= Estado::all();
    	$estadoDefault 	= Estado::getDefault();
    	$cidades 		= Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault 	= Cidade::getDefault();
    	$padraoDesenhos = PadraoDesenho::whereNotNull('id')->orderBy('name', 'asc')->get();
    	$regiaoCorpos 	= RegiaoCorpo::all();
    	$crimes 		= NaturezaCrime::listar()->pluck('codigo_name')->toJson();
    	$individuos 	= Individuo::individuosToChip();

    	$tiposMilitar 	= Individuo::tiposMilitar();
    	$opms 			= Opm::all();

    	return $this->view('individuo/form', compact('estabPris', 'faccaos', 'estados', 'estadoDefault', 'cidades', 'cidadeDefault', 'padraoDesenhos', 'regiaoCorpos', 'crimes', 'individuos', 'tiposMilitar', 'opms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$individuo = Individuo::create($request->all());

    	if (!empty($request->foto01_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('foto01', $request, $individuo);
    		
    		$individuo->foto01 	= $arquivoUrl;
    		$individuo->save();

    		$individuo->gerarThumb();
    	}

    	if (!empty($request->foto02_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('foto02', $request, $individuo);
    		
    		$individuo->foto02 	= $arquivoUrl;
    		$individuo->save();
    	}

    	if (!empty($request->foto03_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('foto03', $request, $individuo);
    		
    		$individuo->foto03 	= $arquivoUrl;
    		$individuo->save();
    	}

    	if ($request->has('endereco'))
    	{
    		foreach ($request->endereco as $endereco)
    		{
    			$endereco['individuo_id'] = $individuo->id;

    			EnderecoIndividuo::create($endereco);
    		}
    	}

    	if ($request->has('telefone'))
    	{
    		foreach ($request->telefone as $telefone)
    		{
    			$telefone['individuo_id'] = $individuo->id;

    			TelefoneIndividuo::create($telefone);
    		}
    	}

    	if ($request->has('natureza'))
    	{
    		foreach ($request->natureza as $i => $natureza)
    		{
    			$naturezas[] = NaturezaCrime::where('codigo', $natureza)->first()->id;
    		}

    		$individuo->crimes()->sync($naturezas);
    	}

    	if ($request->has('tatuagem'))
    	{
    		foreach ($request->tatuagem as $tatuagem)
    		{
    			$tatuagem['individuo_id'] 	= $individuo->id;
    			$tatoo 						= TatuagemIndividuo::create($tatuagem);

    			if (!empty($tatuagem['tatuagem_cropped']))
    			{
    				$arquivoUrl 		= $this->handleUploadTatoo($tatuagem, $request, $tatoo);

    				$tatoo->tatuagem 	= $arquivoUrl;
    				$tatoo->save();
    			}
    		}
    	}

    	if ($request->has('individuo'))
    	{
    		$individuo->vinculoIda()->sync($request->individuo);
    		$individuo->vinculoRetorno()->sync($request->individuo);
    	}
    	
    	if(request()->is('individuo*'))
    		return redirect()->route('individuo.show', $individuo)->withSuccess(Lang::get('common.sucess_inserted'));
    	else
    		return redirect()->route('publico-interno.show', $individuo)->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Management\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function show(Individuo $individuo)
    {	
    	$printName 	= Str::slug($individuo->slug().' '.$individuo->nome.' '.$individuo->alcunha.' '.$individuo->rg.' '.date('U'), '-');
    	return $this->view('individuo/show', compact('individuo', 'printName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Management\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function edit(Individuo $individuo)
    {
    	$estabPris 		= EstabelecimentoPrisional::all();
    	$faccaos 		= FaccaoCriminosa::all();
    	$estados 		= Estado::all();
    	$estadoDefault 	= Estado::getDefault();
    	$cidades 		= Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault 	= Cidade::getDefault();
    	$padraoDesenhos = PadraoDesenho::whereNotNull('id')->orderBy('name', 'asc')->get();
    	$regiaoCorpos 	= RegiaoCorpo::all();
    	$crimes 		= NaturezaCrime::listar()->pluck('codigo_name')->toJson();
    	$individuos 	= Individuo::individuosToChip($individuo);
    	$indInit 		= $individuo->vinculos->pluck('id_nome')->toJson();
    	$naturezaInit 	= $individuo->crimes->pluck('codigo_name')->toJson();

    	$tiposMilitar 	= Individuo::tiposMilitar();
    	$opms 			= Opm::all();

    	return $this->view('individuo/form', compact('individuo', 'estabPris', 'faccaos', 'estados', 'estadoDefault', 'cidades', 'cidadeDefault', 'padraoDesenhos', 'regiaoCorpos', 'crimes', 'individuos', 'indInit', 'naturezaInit', 'tiposMilitar', 'opms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Management\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Individuo $individuo)
    {
    	$individuoClone = clone $individuo;

    	$individuo->update($request->all());
    	$toUpdate = [];

    	if (!empty($request->foto01_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('foto01', $request, $individuoClone);
    		
    		$toUpdate['foto01'] 	= $arquivoUrl;
    	}

    	if (!empty($request->foto02_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('foto02', $request, $individuoClone);
    		
    		$toUpdate['foto02'] = $arquivoUrl;
    	}

    	if (!empty($request->foto03_cropped))
    	{
    		$arquivoUrl 		= $this->handleUpload('foto03', $request, $individuoClone);
    		
    		$toUpdate['foto03'] = $arquivoUrl;
    	}

    	$individuo->update($toUpdate);
    	
    	if (!empty($request->foto01_cropped))
    	{
    		$individuo->gerarThumb();
    	}

    	$this->editarEnderecos($individuo, $request);
    	$this->editarTelefones($individuo, $request);
    	$this->editarTatuagens($individuo, $request);

    	if ($request->has('natureza'))
    	{
    		foreach ($request->natureza as $i => $natureza)
    		{
    			$naturezas[] = NaturezaCrime::where('codigo', $natureza)->first()->id;
    		}

    		$individuo->crimes()->sync($naturezas);
    	}
    	else
    	{
    		$individuo->crimes()->delete();
    	}

    	if ($request->has('individuo'))
    	{

    		$individuo->vinculoIda()->sync($request->individuo);
    		$individuo->vinculoRetorno()->sync($request->individuo);
    	}
    	else
    	{
    		$individuo->vinculoIda()->detach();
    		$individuo->vinculoRetorno()->detach();
    	}

    	if(request()->is('individuo*'))
    		return redirect()->route('individuo.show', $individuo)->withSuccess(Lang::get('common.sucess_edited'));
    	else
    		return redirect()->route('publico-interno.show', $individuo)->withSuccess(Lang::get('common.sucess_edited'));
    }

    private function editarEnderecos($individuo, $request)
    {
    	$arrayEnderecos 	= $individuo->enderecos->pluck('id')->toArray();
    	$enderecosAtivos 	= array();
    	
    	if ($request->has('endereco'))
    	{
    		foreach ($request->endereco as $endereco)
    		{

    			if(isset($endereco['endereco_id']))
    			{
    				$enderecoIndividuo = EnderecoIndividuo::find($endereco['endereco_id']);
    				$enderecoIndividuo->update($endereco);
    			}
    			else
    			{
    				$endereco['individuo_id'] = $individuo->id;
    				$enderecoIndividuo = EnderecoIndividuo::create($endereco);
    			}

    			$enderecosAtivos[] = $enderecoIndividuo->id;
    		}
    	}

    	$enderecosDeletar = array_diff($arrayEnderecos, $enderecosAtivos);

    	if(count($enderecosDeletar) > 0)
    	{
    		$individuo->enderecos()->whereIn('id', $enderecosDeletar)->delete();
    	}
    }

    private function editarTelefones($individuo, $request)
    {
    	$arrayTelefones 	= $individuo->telefones->pluck('id')->toArray();
    	$telefonesAtivos	= array();

    	if ($request->has('telefone'))
    	{
    		
    		foreach ($request->telefone as $telefone)
    		{
    			if(isset($telefone['telefone_id']))
    			{
    				$telefoneIndividuo = TelefoneIndividuo::find($telefone['telefone_id']);
    				$telefoneIndividuo->update($telefone);
    			}
    			else
    			{
    				$telefone['individuo_id'] = $individuo->id;
    				$telefoneIndividuo = TelefoneIndividuo::create($telefone);
    			}

    			$telefonesAtivos[] = $telefoneIndividuo->id;
    		}
    	}

    	$telefonesDeletar = array_diff($arrayTelefones, $telefonesAtivos);

    	if(count($telefonesDeletar) > 0)
    	{
    		$individuo->telefones()->whereIn('id', $telefonesDeletar)->delete();
    	}
    }

    private function editarTatuagens($individuo, $request)
    {
    	$arrayTatoos 	= $individuo->tatuagens->pluck('id')->toArray();
    	$tatoosAtivos 	= array();

    	if ($request->has('tatuagem'))
    	{
    		
    		foreach ($request->tatuagem as $tatuagem)
    		{
    			if(isset($tatuagem['tatuagem_id']))
    			{
    				$tatoo = TatuagemIndividuo::find($tatuagem['tatuagem_id']);
    				$tatoo->update($tatuagem);
    			}
    			else
    			{
    				$tatuagem['individuo_id'] 	= $individuo->id;
    				$tatoo 						= TatuagemIndividuo::create($tatuagem);
    			}

    			$tatoosAtivos[] = $tatoo->id;

    			if (!empty($tatuagem['tatuagem_cropped']))
    			{
    				$arquivoUrl 		= $this->handleUploadTatoo($tatuagem, $request, $tatoo);

    				$tatoo->tatuagem 	= $arquivoUrl;
    				$tatoo->save();
    			}
    		}
    	}

    	$tatoosDeletar = array_diff($arrayTatoos, $tatoosAtivos);

    	if(count($tatoosDeletar) > 0)
    	{
    		$individuo->tatuagens()->whereIn('id', $tatoosDeletar)->delete();
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Management\Individuo  $individuo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individuo $individuo)
    {
    	$individuo->delete();

    	return redirect()->route('individuo.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    public function unique(Request $request)
    {
    	$individuos = Individuo::buscar($request);
    	
    	return response()->json([
    		'total' => $individuos->count(),
    	]);
    }

    public function buscar(Request $request)
    {
    	{

    		$keyword            = $request->keyword;

    		$listaIndividuos = Individuo::buscar($request);
    		
    		$estabPris      = EstabelecimentoPrisional::all();
    		$faccaos        = FaccaoCriminosa::all();

    		$estados        = Estado::all();
    		$estadoDefault  = Estado::getDefault();

    		$cidades        = Cidade::getByEstado($estadoDefault->id);
    		$cidadeDefault  = Cidade::getDefault();
    		$padraoDesenhos = PadraoDesenho::whereNotNull('id')->orderBy('name', 'asc')->get();
    		$regiaoCorpos   = RegiaoCorpo::all();
    		$crimes         = NaturezaCrime::listar()->pluck('codigo_name')->toJson();
    		$individuos     = Individuo::individuosToChip();
    		$tiposMilitar 	= Individuo::tiposMilitar();
    		$opms 			= Opm::all();

    		$indInit        = '[]';

    		if(!is_null($request->individuo))
    		{
    			$individuosInit = Individuo::whereIn('id', $request->individuo)->get();
    			$indInit        = $individuosInit->pluck('id_nome')->toJson();
    		}

    		$naturezaInit        = '[]';

    		if(!is_null($request->natureza))
    		{
    			$naturezasInit 	= NaturezaCrime::whereIn('codigo', $request->natureza)->get();
    			$naturezaInit 	= $naturezasInit->pluck('codigo_name')->toJson();
    		}

    		return $this->view('individuo/index', compact('keyword', 'listaIndividuos', 'individuos', 'estabPris', 'faccaos', 'estados', 'estadoDefault', 'cidades', 'cidadeDefault', 'padraoDesenhos', 'regiaoCorpos', 'crimes', 'indInit', 'naturezaInit', 'request', 'tiposMilitar', 'opms'));
    	}
    }

    protected function handleUpload($fileUpload, Request $request,Individuo $individuo = null)
    {
    	$oldFile 		= null;
    	
    	if(is_null($individuo))
    		$filename 	= Str::random(12);
    	else
    	{
    		if(!empty($individuo->$fileUpload))
    			$oldFile 	= $individuo->$fileUpload;

    		$filename 	= str_pad($individuo->id , 4 , '0' , STR_PAD_LEFT).'_'.$fileUpload.'_'.date('Y-m-d_H-i-s-U');
    	}

    	$folder 		= 'public/individuo';

    	$image_url 		= UploadService::saveImageBase64($request->get($fileUpload.'_cropped'), $folder, $filename);

    	$this->resizeImagem($image_url);
    	$this->deleteOldFile($oldFile);

    	$thumb = str_replace('_foto01_', '_thumb_', $oldFile);

    	if(file_exists(public_path($thumb)))
    		$this->deleteOldFile($thumb);
    	
    	return $image_url;
    }

    protected function handleUploadTatoo($tatooData, Request $request, TatuagemIndividuo $tatoo = null)
    {
    	$oldFile 		= null;
    	
    	if(is_null($tatoo))
    		$filename 	= Str::random(12);
    	else
    	{
    		if(!empty($tatoo->tatuagem))
    			$oldFile 	= $tatoo->tatuagem;

    		$filename 	= str_pad($tatoo->individuo_id , 4 , '0' , STR_PAD_LEFT).'_tatuagem_'.$tatoo->id.'_'.date('Y-m-d_H-i-s-U');
    	}

    	$folder 		= 'public/individuo';

    	$image_url 		= UploadService::saveImageBase64($tatooData['tatuagem_cropped'], $folder, $filename);

    	$this->resizeImagem($image_url);
    	$this->deleteOldFile($oldFile);
    	
    	return $image_url;
    }

    private function resizeImagem($image_url)
    {
    	$imageMaker = Image::make(public_path($image_url));
    	$imageMaker->fit(500, 500);
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
