<?php

namespace App\Http\Controllers\Operacao;

use Lang;
use \Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests\MissaoOperacaoRequest;
use App\Http\Controllers\Controller;

use App\Models\Operacao\Operacao;
use App\Models\Operacao\MissaoOperacao;

use App\Models\Protocolo\Documento;
use App\Models\Protocolo\Estagio;

use App\Models\Management\DocumentoNumero;
use App\Models\Management\DocumentoTipo;
use App\Models\Gestao\Efetivo\User;

class MissaoOperacaoController extends Controller
{
	public function __construct()
	{
		parent::__construct('operacao');

		$this->middleware('auth');

		$this->middleware('role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto|analista-subsecao|analista-regional|analista-local')->only('index', 'create', 'store', 'edit', 'update', 'destroy');
	}
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function index(Operacao $operacao, MissaoOperacao $missaoop)
	{
		return redirect()->route('operacao.show', [$operacao]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Operacao $operacao)
    {
    	return $this->viewCriarMissao($operacao);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MissaoOperacaoRequest $request, Operacao $operacao)
    {
    	$missaoop = MissaoOperacao::create($request->all());

    	$this->handleOrdemBusca($missaoop, $request);

    	$missaoop->enviarElo();

    	return redirect()->route('operacao.missaoop.show', [$operacao, $missaoop])->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MissaoOperacao  $missaoOperacao
     * @return \Illuminate\Http\Response
     */
    public function show(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	return $this->view('operacoes/missao/show', compact('operacao','missaoop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MissaoOperacao  $missaoOperacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	if($missaoop->canCriar())
    	{
    		return $this->viewCriarMissao($operacao, $missaoop);
    	}
    	else
    	{
    		return $this->naoPossivel();
    	}

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MissaoOperacao  $missaoOperacao
     * @return \Illuminate\Http\Response
     */
    public function update(MissaoOperacaoRequest $request, Operacao $operacao, MissaoOperacao $missaoop)
    {
    	if($missaoop->canCriar())
    	{
    		if($request->has('dias_prazo_elo'))
    		{
    			$request->merge(['prazo_final' => $missaoop->definirPrazo($request->dias_prazo_elo)]);
    		}


    		$missaoop->update($request->all());
    		
    		if($missaoop->estagio->isAnalista() && !$missaoop->hasEloConcluiu())
    		{
    			$missaoop->enviarElo();
    		}

    		$this->handleOrdemBusca($missaoop, $request);

    		return redirect()->route('operacao.missaoop.show', [$operacao, $missaoop])->withSuccess(Lang::get('common.sucess_edited'));
    	}
    	else
    	{
    		return $this->naoPossivel();
    	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MissaoOperacao  $missaoOperacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissaoOperacao $missaoop)
    {
        //
    }

    public function despacho(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	if($missaoop->canDespachoEloConcluir())
    	{
    		return $this->viewDespachoEloConcluir($operacao, $missaoop);
    	}
    	elseif($missaoop->canDespachoAnalistaConcluir())
    	{
    		return $this->viewDespachoAnalistaConcluir($operacao, $missaoop);
    	}
    	else
    	{
    		return $this->naoPossivel();
    	}
    }

    public function despachar(Request $request, Operacao $operacao, MissaoOperacao $missaoop)
    {
    	$estagio_atual_id = $missaoop->estagio_id;
    	
    	if($request->has('conclusao_elo'))
    	{
    		$this->handleRelatorioBusca($missaoop, $request);

    		$estagio_destino_id = Estagio::analista()->id;
    		$missaoop->conclusaoElo();
    	}
    	elseif($request->has('conclusao_analista'))
    	{
    		$missaoop->conclusaoAnalista();
    		$this->comentarioMissao($request->comentario, $missaoop);
    	}

    	return redirect()->route('operacao.show', [$operacao])->withSuccess(Lang::get('controller/missaooperacao.despacho_sucess'));
    }

    public function devolucao(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	return $this->viewDevolucao($operacao, $missaoop);
    }

    public function devolver(Request $request, Operacao $operacao, MissaoOperacao $missaoop)
    {
    	$estagio 							= $missaoop->estagio;
    	$novoEstagio 						= $missaoop->devolverQuem();
    	
    	if($estagio->isAnalista() && $missaoop->hasEloConcluiu())
    	{
    		$missaoop->data_elo_encerrou 	= null;
    		$missaoop->conclusao_elo 		= null;
    	}

    	if(!is_null($novoEstagio))
    	{
    		$missaoop->estagio_id = $novoEstagio->id;
    	}

    	$missaoop->save();

    	if(!is_null($novoEstagio))
    	{
    		$this->comentarioMissao(Lang::get('controller/missaooperacao.devolucao', [
    			'estagio_atual' 	=> $estagio->nome
    			,'estagio_destino' 	=> $novoEstagio->nome
    			,'comentario' 		=> $request->comentario
    		]), $missaoop);
    	}

    	return redirect()->route('operacao.missaoop.show', [$operacao, $missaoop])->withSuccess(Lang::get('controller/missaooperacao.devolver_sucess'));
    }

    protected function viewCriarMissao(Operacao $operacao, MissaoOperacao $missaoop = null)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local')))
    		return $this->naoPossivel();
    	
    	if(is_null($missaoop))
    		$viewCriarMissao = Lang::get('common.controller_create');
    	else
    		$viewCriarMissao = Lang::get('common.controller_edit').' '.
    	Lang::get('controller/missaooperacao.missao_id', ['missao' => $missaoop->id]);

    	$users 				= User::getUsersToProtocolInAnalista(true);
    	$tipoOB 			= DocumentoTipo::ordemBusca();

    	return $this->view('operacoes/missao/form-create', compact('viewCriarMissao', 'operacao','missaoop', 'users', 'tipoOB'));
    }

    protected function viewDespachoEloConcluir(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	if(!auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local','elo'))
    		return $this->naoPossivel();
    	
    	$viewDespachoEloConcluir = Lang::get('controller/missaooperacao.btn_despachar').' '.
    	Lang::get('controller/missaooperacao.missao_id', ['missaoop' => $missaoop->id]);
    	$tipoRelBusca 			= DocumentoTipo::relatorioBusca();

    	return $this->view('operacoes/missao/form-elo-conclusao', compact('viewDespachoEloConcluir', 'operacao', 'missaoop', 'tipoRelBusca'));
    }

    protected function viewDespachoAnalistaConcluir(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local')))
    		return $this->naoPossivel();
    	
    	$viewDespachoAnalistaConcluir = Lang::get('controller/missaooperacao.btn_despachar').' '.
    	Lang::get('controller/missaooperacao.missao_id', ['missaoop' => $missaoop->id]);
    	
    	return $this->view('operacoes/missao/form-analista-conclusao', compact('viewDespachoAnalistaConcluir', 'operacao', 'missaoop'));
    }

    protected function viewDevolucao(Operacao $operacao, MissaoOperacao $missaoop)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local')))
    	{
    		$minhasMissoes = MissaoOperacao::minhasMissoes();

    		if(!$minhasMissoes->contains('id', $missaoop->id))
    			return $this->naoPossivel();
    	}
    	
    	$viewDevolucao = Lang::get('controller/missaooperacao.btn_devolver').' '.
    	Lang::get('controller/missaooperacao.missao_id', ['missaoop' => $missaoop->id]);

    	return $this->view('operacoes/missao/form-devolucao', compact('viewDevolucao', 'operacao','missaoop'));
    }


    protected function handleOrdemBusca(MissaoOperacao $missaoop, Request $request)
    {
    	$ordemBusca 		= $missaoop->ordemBusca();
    	
    	if(is_null($ordemBusca))
    	{
    		if($request->hasFile('arquivo'))
    		{
    			$documento 	= $this->gerarDocumentoNumero('ordemBusca', $request, $missaoop);
    			$missaoop->documentos()->attach($documento);
    		}
    	}
    	elseif($request->hasFile('arquivo'))
    	{
    		$ordemBusca 	= $this->substituirDocumento($ordemBusca, $request, $missaoop);
    	}
    }

    protected function handleRelatorioBusca(MissaoOperacao $missaoop, Request $request)
    {
    	$relatorioBusca = $missaoop->relatorioBusca();

    	if(is_null($relatorioBusca))
    	{
    		if($request->hasFile('arquivo'))
    		{
    			$documento = $this->gerarDocumentoNumero('relatorioBusca', $request, $missaoop);
    			$missaoop->documentos()->attach($documento);
    		}
    	}
    	elseif($request->hasFile('arquivo'))
    	{
    		$relatorioBusca = $this->substituirDocumento($relatorioBusca, $request, $missaoop);
    	}
    }

    private function gerarDocumentoNumero($funcaoDocumentoTipo, $request, MissaoOperacao $missaoop)
    {
    	if(is_numeric($funcaoDocumentoTipo))
    		$request->request->add(['documento_tipo_id' => $funcaoDocumentoTipo]);
    	else
    		$request->request->add(['documento_tipo_id' => DocumentoTipo::$funcaoDocumentoTipo()->id]);
    	
    	$request->request->add(['agencia_id' 	=> auth()->user()->agencia_id]);

    	$documento  = Documento::create($request->all());
    	$numero  	= DocumentoNumero::create([
    		'agencia_id' 			=> auth()->user()->agencia_id
    		,'documento_id' 			=> $documento->id
    		,'documento_tipo_id' 	=> $documento->documento_tipo_id
    		,'numero' 				=> $request->numero
    		,'ano' 					=> Carbon::now()->year
    	]);

    	$documentUrl        	= $this->handleUpload($request, $missaoop);
    	$documento->arquivo 	= $documentUrl;
    	$documento->save();  

    	return $documento;
    }

    protected function handleUpload($request, MissaoOperacao $missaoop = null)
    {
    	if(is_null($missaoop))
    		$filename 	= Str::random(12);
    	else
    		$filename 	= str_pad($missaoop->id , 4 , '0' , STR_PAD_LEFT).'_'.date('Y-m-d_H-i-s-U');
    	
    	$extension 	= $request->file('arquivo')->getClientOriginalExtension();

    	$path = $request->file('arquivo')->storeAs('public/operacao', $filename.'.'.$extension);
    	return 'storage/'.substr($path, strlen('public/'));
    }

    private function substituirDocumento($documento, $request, MissaoOperacao $missaoop)
    {
    	$this->comentarDocumento($documento, $missaoop);

    	Documento::deletarArquivo($documento);

    	$documentUrl        	= $this->handleUpload($request, $missaoop);
    	$documento->arquivo 	= $documentUrl;
    	$documento->save();

    	return $documento;
    }

    private function naoPossivel()
    {
    	return redirect()->back()->withSuccess(Lang::get('controller/missaooperacao.direto_naopossivel'));
    }

    private function comentarDocumento($documento, $missaoop)
    {
    	activity()->performedOn($missaoop)
    	->useLog('operacao')
    	->causedBy(auth()->user())
    	->withProperties([
    		'relationship_change' 	=> true
    		,'model_class' 			=> get_class($documento)
    		,'model_title' 			=> $documento->documentoTipo->nome
    		,'model_subject' 		=> $documento->numero
    		,'id' 					=> $documento->id
    	])
    	->log('updated');
    }

    private function comentarioMissao($comentario, $missaoop)
    {
    	activity()->performedOn($missaoop)
    	->useLog('operacao')
    	->causedBy(auth()->user())
    	->withProperties([
    		'comentario' => $comentario
    	])
    	->log('comment');
    }
}
