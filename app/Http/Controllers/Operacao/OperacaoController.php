<?php

namespace App\Http\Controllers\Operacao;

use App\Http\Controllers\Controller;
use App\Http\Requests\OperacaoRequest;

use App\Models\Management\Estado;
use App\Models\Management\Cidade;
use App\Models\Management\DocumentoTipo;
use App\Models\Operacao\Operacao;
use App\Models\Protocolo\Documento;
use App\Models\Individuo\Individuo;
use App\Models\Management\DocumentoNumero;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Lang;

class OperacaoController extends Controller
{


	public function __construct()
	{
		parent::__construct('operacao');

		$this->middleware('auth');

		$this->middleware('role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')->only('index', 'create', 'store', 'edit', 'update', 'destroy', 'buscar', 'terminar', 'uploadDocumento');
	}

	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		$operacaos 				= Operacao::ativas();
		$operacaosFinalizadas 	= Operacao::finalizadas();
		
		$estado 				= Estado::getDefault();
		$cidades 				= Cidade::getByEstado($estado->id);
		$cidadeDefault 			= Cidade::getDefault();

		return $this->view('operacoes/operacao/index', compact('operacaos', 'operacaosFinalizadas', 'cidades', 'cidadeDefault'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$estado 				= Estado::getDefault();
    	$cidades 				= Cidade::getByEstado($estado->id);
    	$cidadeDefault 			= Cidade::getDefault();
    	$individuos 			= Individuo::individuosToChip();

    	return $this->view('operacoes/operacao/form', compact('cidades', 'cidadeDefault', 'individuos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperacaoRequest $request)
    {
    	$operacao = Operacao::create($request->all());

    	if ($request->has('individuo'))
    	{
    		$operacao->alvos()->sync($request->individuo);
    	}

    	return redirect()->route('operacao.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operacao  $operacao
     * @return \Illuminate\Http\Response
     */
    public function show(Operacao $operacao)
    {
    	$documentos = $operacao->documentos;
    	
    	if(!(auth()->user()->hasRole('root','chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local')))
    		$addDocs 	= false;
    	else
    		$addDocs 	= true;

    	$documentoTipos = DocumentoTipo::tiposProduzido(false);
    	$documentoAnexos = DocumentoTipo::tiposEntrada();
    	
    	return $this->view('operacoes/operacao/show', compact('operacao', 'documentos', 'addDocs', 'documentoTipos', 'documentoAnexos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operacao  $operacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Operacao $operacao)
    {
    	$estado 				= Estado::getDefault();
    	$cidades 				= Cidade::getByEstado($estado->id);
    	$cidadeDefault 			= Cidade::getDefault();
    	$individuos 			= Individuo::individuosToChip();
    	$indInit 				= $operacao->alvos->pluck('id_nome')->toJson();

    	return $this->view('operacoes/operacao/form', compact('cidades', 'cidadeDefault', 'operacao', 'individuos', 'indInit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operacao  $operacao
     * @return \Illuminate\Http\Response
     */
    public function update(OperacaoRequest $request, Operacao $operacao)
    {
    	$operacao->update($request->all());
    	
    	if ($request->has('individuo'))
    	{
    		$operacao->alvos()->sync($request->individuo);
    	}
    	else
    	{
    		$operacao->alvos()->detach();
    	}

    	return redirect()->route('operacao.show', $operacao)->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operacao  $operacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operacao $operacao)
    {
    	$operacao->delete();

    	return redirect()->route('operacao.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    public function buscar(Request $request)
    {
    	$keyword 			= $request->keyword;
    	$operacaos			= Operacao::buscar($request);

    	$estado 				= Estado::getDefault();
    	$cidades 				= Cidade::getByEstado($estado->id);
    	$cidadeDefault 		= Cidade::getDefault();

    	$viewResultadoBusca = Lang::get('controller/operacao.busca_title');

    	return $this->view('operacoes/operacao/resultado-busca', compact('viewResultadoBusca', 'keyword', 'operacaos', 'request', 'cidades', 'cidadeDefault'));

    }

    public function terminar(Operacao $operacao)
    {
    	$operacao->terminar();
    	return redirect()->route('operacao.index')->withSuccess(Lang::get('controller/operacao.sucess_fim'));
    }

    public function reabrir(Operacao $operacao)
    {
    	$operacao->reabrir();
    	return redirect()->route('operacao.index')->withSuccess(Lang::get('controller/operacao.sucess_reabrir'));
    }
    
    public function uploadDocumento(Request $request, Operacao $operacao)
    {
    	$data = $request->all();
    	
    	foreach ($request->file('arquivo') as $i => $file)
    	{

    		$documento = $this->handleDocumento($i, $request, $operacao);

    		$operacao->documentos()->attach($documento);
    	}

    	return redirect()->route('operacao.show', $operacao)->withSuccess(Lang::get('common.sucess_upload'));
    }
    public function uploadDelete(Operacao $operacao, Documento $documento)
    {
    	$operacao->documentos()->detach($documento->id);
    	$this->comentarDocumento($documento, $operacao, 'deleted');
    	return redirect()->route('operacao.show', $operacao)->withSuccess(Lang::get('common.sucess_deleted'));
    }

    protected function handleDocumento($i, Request $request, Operacao $operacao)
    {
    	$data 			= $request->all();

    	$documento  	= Documento::create([
    		'agencia_id' 		=> auth()->user()->agencia_id,
    		'user_id'			=> auth()->user()->id,
    		'numero' 			=> $data['numero'][$i],
    		'documento_tipo_id'	=> $data['documento_tipo_id'][$i],
    		'arquivo'			=> $data['arquivo'][$i],
    	]);

    	if ($request->hasFile('arquivo'))
    	{
    		$documentUrl        = $this->handleUpload($request->file('arquivo')[$i], $operacao);
    		$this->comentarDocumento($documento, $operacao);
    		$documento->arquivo = $documentUrl;
    		$documento->save();
    	}

    	if (!$request->has('is_anexo'))
    	{
    		$numero  	= DocumentoNumero::create([
    			'agencia_id' 			=> auth()->user()->agencia_id
    			,'documento_id' 		=> $documento->id
    			,'documento_tipo_id' 	=> $documento->documento_tipo_id
    			,'numero' 				=> $data['numero'][$i]
    			,'ano' 					=> Carbon::now()->year
    		]);
    	}

    	return $documento;
    }

    protected function handleUpload(UploadedFile $fileSended, Operacao $operacao = null)
    {
    	if(is_null($operacao))
    		$filename 	= Str::random(12);
    	else
    		$filename 	= str_pad($operacao->id , 4 , '0' , STR_PAD_LEFT).'_'.date('Y-m-d_H-i-s-U');

    	$extension 	= $fileSended->getClientOriginalExtension();

    	$path = $fileSended->storeAs('public/operacao', $filename.'.'.$extension);
    	return 'storage/'.substr($path, strlen('public/'));
    }

    private function comentarDocumento($documento, $operacao, $log = 'updated')
    {
    	activity()->performedOn($operacao)
    	->useLog('operacao')
    	->causedBy(auth()->user())
    	->withProperties([
    		'relationship_change' 	=> true
    		,'model_class' 			=> get_class($documento)
    		,'model_title' 			=> $documento->documentoTipo->nome
    		,'model_subject' 		=> $documento->numero
    		,'id' 					=> $documento->id
    	])
    	->log($log);
    }

}
