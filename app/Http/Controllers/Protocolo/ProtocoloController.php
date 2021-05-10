<?php

namespace App\Http\Controllers\Protocolo;

use App\Http\Controllers\Controller;

use App\Models\Protocolo\Protocolo;
use App\Models\Protocolo\Documento;
use App\Models\Protocolo\Estagio;
use App\Models\Comentario;
use App\Models\Protocolo\ComentarioProtocolo;
use App\Models\Protocolo\ContraInteligencia;

use App\Models\Management\Role;
use App\Models\Gestao\Efetivo\User;
use App\Models\Gestao\Canal\Canal;
use App\Models\Management\Origin;
use App\Models\Management\Thematic;
use App\Models\Management\DocumentoNumero;
use App\Models\Management\DocumentoTipo;
use App\Models\Individuo\Individuo;

use Illuminate\Http\Request;
use App\Http\Requests\ProtocoloCreateRequest;
use Lang;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use App\Models\Operacao\MissaoOperacao;
use DB;
use Alert;
use Illuminate\Http\UploadedFile;
use App\Models\Gestao\Agencia\Agencia;

class ProtocoloController extends Controller
{

	public function __construct()
	{
		parent::__construct('protocolo');

		$this->middleware('auth');

		$this->middleware('role:root|sysadmin|chefe-subsecao|chefe-regional|chefe-local|adjunto')->only('index', 'create', 'store');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$estagios 			= Estagio::estagiosInterativos();
    	$finalizados		= Estagio::finalizado()->protocolos;

    	$thematics 			= Thematic::all();
    	$users 				= User::getUsersToProtocolInChefia();
    	$documentoTipoOrigens = DocumentoTipo::tiposEntrada();
    	$documentoTipos     = DocumentoTipo::tiposProduzido();
    	$individuos 		= Individuo::individuosToChip();
    	
    	return $this->view('protocolo/browse', compact('estagios', 'finalizados', 'thematics', 'users', 'documentoTipoOrigens', 'documentoTipos', 'individuos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return $this->viewCriarMissao();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function store(Request $request)
    {
        
    }*/

    public function store(ProtocoloCreateRequest $request)
    {
    	$user 		= auth()->user();
    	$user_id 	= $user->id;
    	$request->request->add(['agencia_id' 	=> $user->agencia_id]);
    	$request->request->add(['user_cadastro_id' 	=> $user_id]);
    	$request->request->add(['estagio_id' 		=> Estagio::chefia()->id]);

    	$protocolo = Protocolo::create($request->all());

    	$documento = $this->handleDocumento($request, $protocolo);

    	$protocolo->documentos()->sync($documento);

    	ComentarioProtocolo::comentar([
    		'agencia_id' 			=> $user->agencia_id
    		,'user_id'				=> $user_id
    		,'protocolo_id'			=> $protocolo->id
    		,'estagio_atual_id'		=> $protocolo->estagio_id
    		,'descricao'			=> 'controller/protocolo.criou_protocolo'
    	]);

    	return redirect()->route('protocolo.show', $protocolo->slug())->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Protocolo\Protocolo  $protocolo
     * @return \Illuminate\Http\Response
     */
    public function show(Protocolo $protocolo)
    {
    	$documentos = $protocolo->documentos;
    	$individuos = Individuo::individuosToChip();
    	$indInit 	= $protocolo->pessoas->pluck('id_nome')->toJson();

    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local')))
    		$addDocs 	= false;
    	else
    		$addDocs 	= true;

    	$documentoTipos = DocumentoTipo::tiposProduzido(false);

    	if(auth()->user()->hasRole('elo'))
    		$documentoTipos = DocumentoTipo::tiposProduzidoElo();

    	$documentoAnexos = DocumentoTipo::tiposEntrada();
    	
    	$canView = $protocolo->canView();

    	if(!$canView)
    		return $this->naoPossivelVisualizar();
    	else
    		return $this->view('protocolo/browse-protocolo', compact('protocolo', 'documentos', 'individuos', 'indInit', 'addDocs', 'documentoTipos', 'documentoAnexos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Protocolo\Protocolo  $protocolo
     * @return \Illuminate\Http\Response
     */
    public function edit(Protocolo $protocolo)
    {
    	if($protocolo->canCriarMissao())
    	{
    		return $this->viewCriarMissao($protocolo);
    	}
    	elseif($protocolo->canDespachoChefeParaAnalista())
    	{
    		return $this->viewDespachoChefeParaAnalista($protocolo);
    	}
    	elseif($protocolo->canDespachoEloConcluir() || $protocolo->canAnalistaEdit())
    	{
    		return $this->viewDespachoAnalistaParaElo($protocolo);
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
     * @param  App\Models\Protocolo\Protocolo  $protocolo
     * @return \Illuminate\Http\Response
     */
    public function update(ProtocoloCreateRequest $request, Protocolo $protocolo)
    {
    	$protocolo->update($request->all());

    	ComentarioProtocolo::comentar([
    		'agencia_id'			=> auth()->user()->agencia_id
    		,'user_id'				=> auth()->user()->id
    		,'protocolo_id'			=> $protocolo->id
    		,'estagio_atual_id'		=> $protocolo->estagio_id
    		,'descricao'			=> 'controller/protocolo.editou_protocolo'
    	]);

    	$documento 				= $this->handleDocumento($request, $protocolo);
    	$documentosProtocolo 	= $protocolo->documentos;

    	foreach($documentosProtocolo as $key => $docProto)
    	{
    		if($docProto->id == $documento->id)
    			$documentosProtocolo[$key] = $documento;
    	}
    	
    	$protocolo->documentos()->sync($documentosProtocolo);

    	return redirect()->route('protocolo.show', $protocolo->slug())->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Protocolo\Protocolo  $protocolo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protocolo $protocolo)
    {
        //
    }


    public function paramim()
    {
    	$minhasMissoes 			= new Collection();
    	$minhasMissoes->put('protocolo', Protocolo::minhasMissoes());
    	$minhasMissoes->put('operacao', MissaoOperacao::minhasMissoes());

    	$minhasMissoesComElo 	= new Collection();
    	$minhasMissoesComElo->put('protocolo', Protocolo::minhasMissoesComElo());
    	$minhasMissoesComElo->put('operacao', MissaoOperacao::minhasMissoesComElo());
    	
    	return $this->viewMinhasMissoes($minhasMissoes, $minhasMissoesComElo);
    }

    public function despacho(Protocolo $protocolo)
    {
    	/*despacho de ida*/
    	if($protocolo->canCriarMissao())
    	{
    		return $this->viewDespachoChefeParaAnalista($protocolo);
    	}
    	elseif($protocolo->canDespachoAnalistaParaElo())
    	{
    		return $this->viewDespachoAnalistaParaElo($protocolo);
    	}
    	/*despacho de conclusao*/
    	elseif($protocolo->canDespachoEloConcluir())
    	{
    		return $this->viewDespachoEloConcluir($protocolo);
    	}
    	elseif($protocolo->canDespachoAnalistaConcluir())
    	{
    		return $this->viewDespachoAnalistaConcluir($protocolo);
    	}
    	elseif($protocolo->canDespachoChefeConcluir())
    	{
    		return $this->viewDespachoChefiaConcluir($protocolo);
    	}
    	elseif($protocolo->canDespachoAdministrativoConcluir())
    	{
    		return $this->viewDespachoAdministrativoConcluir($protocolo);
    	}
    	else
    	{
    		return $this->naoPossivel();
    	}
    }

    public function despachar(Request $request, Protocolo $protocolo)
    {
    	$estagio_atual_id = $protocolo->estagio_id;

    	if($protocolo->deDifusao())
    	{
    		if($request->dias_prazo_protocolo > $protocolo->dias_prazo_protocolo)
    		$request->merge([
    			"dias_prazo_protocolo" 		=> $protocolo->dias_prazo_protocolo
    		]);
    	}

    	$protocolo->update($request->all());

    	$tipoComentario = Comentario::IS_SISTEMA;
    	
    	if($request->has('comentario'))
    		$tipoComentario = Comentario::IS_USER;

    	if($request->has('user_analista_id'))
    	{
    		$estagio_destino_id = Estagio::analista()->id;
    		$protocolo->enviarAnalista();
    	}

    	elseif($request->has('user_elo_id'))
    	{
    		if(!$request->has('elabora_ob'))
    		{
    			$protocolo->elabora_ob = false;
    			$protocolo->save();
    		}

    		$estagio_destino_id = Estagio::elo()->id;
    		$protocolo->enviarElo();
    	}

    	elseif($request->has('conclusao_elo'))
    	{
    		$this->handleRelatorioBusca($protocolo, $request);

    		$estagio_destino_id = Estagio::analista()->id;
    		$protocolo->conclusaoElo();
    	}

    	elseif($request->has('conclusao_analista'))
    	{
    		$estagio_destino_id = Estagio::chefia()->id;
    		$protocolo->conclusaoAnalista();
    	}

    	elseif($request->has('conclusao_chefe'))
    	{
    		$estagio_destino_id = Estagio::administrativo()->id;
    		$protocolo->conclusaoChefia();
    	}

    	elseif($request->has('conclusao_adm'))
    	{
    		$estagio_destino_id = Estagio::finalizado()->id;
    		
    		if($request->has('retorno_difusao') || $request->has('local_para_ci'))
    		{

    			$docSelecionado		= Documento::getDocumentoParaClone($request->get('documento-selecionado'));
    			
    			if($request->has('retorno_difusao'))
    			{
    				$agenciaDestinoConclusao = $protocolo->difundidoDe()->agencia;
    				$contra = ContraInteligencia::retornoProcoloDeDifusao($protocolo, $docSelecionado);
    			}
    			elseif($request->has('local_para_ci'))
    			{
    				$agenciaDestinoConclusao = Agencia::ci();
    				$contra = ContraInteligencia::disparaProtocoloParaCI($protocolo, $docSelecionado, $request->assunto);
    			}
    			
    			ComentarioProtocolo::comentar([
    				'agencia_id'			=> auth()->user()->agencia_id
    				,'user_id'				=> auth()->user()->id
    				,'tipo'					=> $tipoComentario
    				,'protocolo_id'			=> $protocolo->id
    				,'estagio_atual_id'		=> $estagio_atual_id
    				,'descricao'			=> Lang::get('controller/protocolo.retorno_difusao_documento', [
    					'documento' => $docSelecionado->documentoTipo->nome,
    					'numero' 	=> $docSelecionado->numero,
    					'local' 	=> $agenciaDestinoConclusao->nome,
    				])
    			]);
    		}

    		if($request->has('local_para_ari'))
    		{
    			$requestAri 				= clone $request;
    			$requestAri->request->remove('conclusao_adm');
    			
    			$docSelecionado				= Documento::getDocumentoParaClone($requestAri->get('documento-selecionado'));
    			$agenciaDestinoConclusao 	= auth()->user()->agencia->vinculada;
    			
    			if(!$requestAri->has('assunto'))
    				$requestAri->merge(['assunto' => $protocolo->assunto_principal]);

    			$requestAri->merge([
    				"assunto" 					=> $requestAri->assunto
    				,"agencias" 				=> [ $agenciaDestinoConclusao->id ]
    				,"documento-selecionado" 	=> $docSelecionado->slug()
    				,"agencia_origem_id" 		=> auth()->user()->agencia->id
    			]);

    			Protocolo::clonarParaOutraAgencia($requestAri, $protocolo);

    			ComentarioProtocolo::comentar([
    				'agencia_id'			=> auth()->user()->agencia_id
    				,'user_id'				=> auth()->user()->id
    				,'tipo'					=> $tipoComentario
    				,'protocolo_id'			=> $protocolo->id
    				,'estagio_atual_id'		=> $estagio_atual_id
    				,'descricao'			=> Lang::get('controller/protocolo.retorno_difusao_documento', [
    					'documento' => $docSelecionado->documentoTipo->nome,
    					'numero' 	=> $docSelecionado->numero,
    					'local' 	=> $agenciaDestinoConclusao->nome,
    				])
    			]);
    		}

    		$protocolo->conclusaoAdministrativo();
    	}
    	elseif($request->has('enviar_agencias'))
    	{
    		$estagio_destino_id = $protocolo->estagio_id;

    		Protocolo::clonarParaOutraAgencia($request, $protocolo);

    		$descricao = 'controller/protocolo.difundiu_protocolo';
    	}

    	elseif($request->has('conclusao_arquivese'))
    	{
    		$estagio_destino_id = Estagio::finalizado()->id;

    		$protocolo->conclusao_elo 			= 1;
    		$protocolo->conclusao_analista 		= 1;
    		$protocolo->conclusao_chefe 		= 1;
    		$protocolo->prazo_final 			= Carbon::now()->toDateString();
    		$protocolo->save();

    		$protocolo->conclusaoAdministrativo();
    	}
    	
    	if($request->has('comentario'))
    	{
    		ComentarioProtocolo::comentar([
    			'agencia_id'			=> auth()->user()->agencia_id
    			,'user_id'				=> auth()->user()->id
    			,'tipo'					=> $tipoComentario
    			,'protocolo_id'			=> $protocolo->id
    			,'estagio_atual_id'		=> $estagio_atual_id
    			,'descricao'			=> $request->comentario
    		]);
    	}

    	if(!isset($descricao))
    	{
    		if($estagio_atual_id == $estagio_destino_id)
    			$descricao = 'controller/protocolo.despachou_editou';
    		else
    			$descricao = 'controller/protocolo.despachou_protocolo';
    	}

    	ComentarioProtocolo::comentar([
    		'agencia_id'			=> auth()->user()->agencia_id
    		,'user_id'				=> auth()->user()->id
    		,'protocolo_id'			=> $protocolo->id
    		,'estagio_atual_id'		=> $estagio_atual_id
    		,'estagio_destino_id'	=> $estagio_destino_id
    		,'descricao'			=> $descricao
    	]);

    	return redirect()->route('protocolo.index')->withSuccess(Lang::get('controller/protocolo.despacho_sucess'));
    }

    public function diretochefia(Protocolo $protocolo)
    {

    	if($protocolo->isInAnalista() && !$protocolo->hasAnalistaConcluiu())
    	{
    		if(!$protocolo->hasEloConcluiu())
    			$protocolo->conclusaoElo();
    		
    		ComentarioProtocolo::comentar([
    			'agencia_id'			=> auth()->user()->agencia_id
    			,'user_id'				=> auth()->user()->id
    			,'protocolo_id'			=> $protocolo->id
    			,'estagio_atual_id'		=> $protocolo->estagio_id
    			,'descricao'			=> 'controller/protocolo.comment_diretochefe'
    		]);
    		
    		return redirect()->route('protocolo.despacho', $protocolo->slug());
    	}
    	else
    		return $this->naoPossivel();
    }

    public function diretoelo(Protocolo $protocolo)
    {

    	if($protocolo->isInAnalista())
    	{
    		$protocolo->elabora_ob = 1;
    		$protocolo->save();

    		ComentarioProtocolo::comentar([
    			'agencia_id'			=> auth()->user()->agencia_id
    			,'user_id'				=> auth()->user()->id
    			,'protocolo_id'			=> $protocolo->id
    			,'estagio_atual_id'		=> $protocolo->estagio_id
    			,'descricao'			=> 'controller/protocolo.comment_diretoelo'
    		]);

    		return redirect()->route('protocolo.despacho', $protocolo->slug());
    	}
    	else
    		return $this->naoPossivel();
    }

    public function devolucao(Protocolo $protocolo)
    {
    	return $this->viewDevolucao($protocolo);
    }

    public function devolver(Request $request, Protocolo $protocolo)
    {
    	$estagio 							= $protocolo->estagio;
    	$novoEstagio 						= $protocolo->devolverQuem();
    	
    	if($estagio->isAnalista() && $protocolo->hasEloConcluiu())
    	{
    		$protocolo->data_elo_encerrou 	= null;
    		$protocolo->conclusao_elo 		= null;
    	}
    	elseif($estagio->isChefia() && $protocolo->hasAnalistaConcluiu())
    	{
    		$protocolo->conclusao_analista 	= null;
    		
    		if(is_null($protocolo->data_recebeu_elo))
    		{
    			$protocolo->data_elo_encerrou 	= null;
    			$protocolo->conclusao_elo 		= null;
    		}
    	}
    	elseif($estagio->isAdministrativo() && $protocolo->hasChefeConcluiu())
    	{
    		$protocolo->conclusao_chefe 	= null;
    	}

    	$protocolo->save();

    	if(!is_null($novoEstagio))
    	{
    		ComentarioProtocolo::comentar([
    			'agencia_id'			=> auth()->user()->agencia_id
    			,'user_id'				=> auth()->user()->id
    			,'protocolo_id'			=> $protocolo->id
    			,'estagio_atual_id'		=> $protocolo->estagio_id
    			,'estagio_destino_id'	=> $novoEstagio->id
    			,'tipo'					=> Comentario::IS_USER
    			,'descricao'			=> $request->comentario
    		]);

    		$protocolo->estagio_id = $novoEstagio->id;
    		$protocolo->save();
    	}

    	return redirect()->route('protocolo.index')->withSuccess(Lang::get('controller/protocolo.devolver_sucess'));
    }

    public function buscar(Request $request)
    {
    	return $this->viewResultadoBusca($request);
    }

    public function pessoas(Request $request, Protocolo $protocolo)
    {
    	$sync = [];

    	if ($request->has('individuo'))
    		$sync = $request->individuo;

    	$protocolo->pessoas()->sync($sync);

    	return redirect()->route('protocolo.show', $protocolo->slug())->withSuccess(Lang::get('controller/protocolo.pessoas_sucess'));
    }

    public function visibilidade(Request $request, Protocolo $protocolo)
    {
    	$protocolo->update($request->all());

    	Alert::success(Lang::get('controller/protocolo.visibilidade'));

    	return response()->json([], 200);
    }

    public function arquive(Request $request, Protocolo $protocolo)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')))
    		return $this->naoPossivel();

    	$arquive = Lang::get('controller/protocolo.arquivar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	return $this->view('protocolo/estagio/form-arquive', compact('arquive', 'protocolo'));
    }

    public function documentoUpload(Request $request, Protocolo $protocolo)
    {
    	$data = $request->all();
    	
    	foreach ($request->file('arquivo') as $i => $file)
    	{

    		$documento = $this->createDocumento($i, $request, $protocolo);

    		$protocolo->documentos()->attach($documento);
    	}

    	return redirect()->route('protocolo.show', $protocolo)->withSuccess(Lang::get('common.sucess_upload'));
    }

    public function showDocumentoEdit(Protocolo $protocolo, Documento $documento)
    {
    	$showDocumentoEdit = Lang::get('controller/protocolo.documento_editar', ['documento' => $documento->documentoTipo->nome, 'numero' => $documento->numero]);

    	return $this->view('protocolo/estagio/form-editar-documento', compact('showDocumentoEdit', 'protocolo', 'documento'));
    }

    public function documentoChange(Request $request, Protocolo $protocolo, Documento $documento)
    {
    	foreach ($request->file('arquivo') as $i => $file)
    	{
    		$documento = $this->changeDocumento($i, $request, $protocolo, $documento);
    	}

    	return redirect()->route('protocolo.show', $protocolo)->withSuccess(Lang::get('common.sucess_upload'));
    }

    public function enviarAgencias(Request $request, Protocolo $protocolo)
    {
    	if(!$protocolo->showEnviarAgencias())
    		return $this->naoPossivelVisualizar();

    	$agencias = Agencia::agenciasDistribuicao();

    	$enviarAgencias = Lang::get('controller/protocolo.enviar_agencias');

    	return $this->view('protocolo/estagio/form-enviar-agencias', compact('enviarAgencias', 'protocolo', 'agencias'));
    }

    protected function handleUpload(UploadedFile $fileSended, Protocolo $protocolo = null)
    {
    	if(is_null($protocolo))
    		$filename 	= Str::random(12);
    	else
    		$filename 	= getFileNameProtocolo($protocolo);

    	$extension 	= $fileSended->getClientOriginalExtension();

    	$path = $fileSended->storeAs('public/protocolo', $filename.'.'.$extension);
    	return 'storage/'.substr($path, strlen('public/'));
    }

    protected function viewCriarMissao(Protocolo $protocolo = null)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')))
    		return $this->naoPossivel();

    	if(is_null($protocolo))
    		$viewCriarMissao = Lang::get('common.controller_create');
    	else
    		$viewCriarMissao = Lang::get('common.controller_edit').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	$canais            	= Canal::all();
    	$origins            = Origin::all();
    	$thematics          = Thematic::all();
    	$documentoTipos     = DocumentoTipo::tiposEntrada();

    	return $this->view('protocolo/estagio/form-administrativo', compact('viewCriarMissao', 'protocolo', 'origins', 'thematics', 'documentoTipos', 'canais'));
    }

    protected function viewDespachoChefeParaAnalista(Protocolo $protocolo)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')))
    		return $this->naoPossivel();

    	$viewDespachoChefeParaAnalista = Lang::get('controller/protocolo.btn_despachar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	$users 				= User::getUsersToProtocolInChefia();
    	$documentoTipos     = DocumentoTipo::tiposProduzido();

    	return $this->view('protocolo/estagio/form-chefia', compact('viewDespachoChefeParaAnalista', 'protocolo', 'users', 'documentoTipos'));
    }

    protected function viewDespachoAnalistaParaElo(Protocolo $protocolo)
    {
    	if(!$protocolo->canAnalistaEdit())
    		return $this->naoPossivel();

    	$viewDespachoAnalistaParaElo = Lang::get('controller/protocolo.btn_despachar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	$users = User::getUsersToProtocolInAnalista();
    	$tipoOB 			= DocumentoTipo::ordemBusca();

    	return $this->view('protocolo/estagio/form-analista', compact('viewDespachoAnalistaParaElo', 'protocolo', 'users', 'tipoOB'));
    }

    protected function viewDespachoEloConcluir(Protocolo $protocolo)
    {
    	$viewDespachoEloConcluir = Lang::get('controller/protocolo.btn_despachar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);
    	$tipoRelBusca 			= DocumentoTipo::relatorioBusca();

    	return $this->view('protocolo/estagio/form-elo-conclusao', compact('viewDespachoEloConcluir', 'protocolo', 'tipoRelBusca'));
    }

    protected function viewDespachoAnalistaConcluir(Protocolo $protocolo)
    {
    	$viewDespachoAnalistaConcluir = Lang::get('controller/protocolo.btn_despachar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	$docSerProduzido = $protocolo->documentoSerProduzido;

    	return $this->view('protocolo/estagio/form-analista-conclusao', compact('viewDespachoAnalistaConcluir', 'protocolo', 'docSerProduzido'));
    }

    protected function viewDespachoChefiaConcluir(Protocolo $protocolo)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')))
    		return $this->naoPossivel();

    	$viewDespachoChefiaConcluir = Lang::get('controller/protocolo.btn_despachar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	return $this->view('protocolo/estagio/form-chefe-conclusao', compact('viewDespachoChefiaConcluir', 'protocolo'));
    }

    protected function viewDespachoAdministrativoConcluir(Protocolo $protocolo)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')))
    		return $this->naoPossivel();

    	$viewDespachoAdministrativoConcluir = Lang::get('controller/protocolo.btn_despachar').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	$docSerProduzido 			= $protocolo->documentoSerProduzido;

    	$agenciaDestinoConclusao 	= Agencia::ci();

    	if( $protocolo->deDifusao())
    		$agenciaDestinoConclusao = $protocolo->difundidoDe()->agencia;

    	return $this->view('protocolo/estagio/form-administrativo-conclusao', compact('viewDespachoAdministrativoConcluir', 'protocolo', 'docSerProduzido', 'agenciaDestinoConclusao'));
    }

    protected function viewDevolucao(Protocolo $protocolo)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto')))
    	{
    		$minhasMissoes = Protocolo::minhasMissoes();

    		if(!$minhasMissoes->contains('id', $protocolo->id))
    			return $this->naoPossivel();
    	}

    	$viewDevolucao = Lang::get('controller/protocolo.btn_devolver').' '.
    	Lang::get('controller/protocolo.protocolo_id', ['protocolo' => $protocolo->id]);

    	return $this->view('protocolo/estagio/form-devolucao', compact('viewDevolucao', 'protocolo'));
    }

    protected function viewMinhasMissoes($missoes, $missoesComElo)
    {
    	$viewMinhasMissoes 	= Lang::get('controller/protocolo.paramim');

    	$thematics 			= Thematic::all();
    	$users 				= User::getUsersToProtocolInChefia();
    	$documentoTipoOrigens = DocumentoTipo::tiposEntrada();
    	$documentoTipos     = DocumentoTipo::tiposProduzido();
    	$individuos 		= Individuo::individuosToChip();
    	
    	return $this->view('protocolo/minhas-missoes', compact('viewMinhasMissoes', 'missoes', 'missoesComElo', 'thematics', 'users', 'documentoTipoOrigens', 'documentoTipos', 'individuos'));
    }

    protected function viewResultadoBusca($request)
    {
    	if(!(auth()->user()->hasRole('root', 'sysadmin', 'chefe-subsecao', 'chefe-regional', 'chefe-local', 'adjunto', 'analista-subsecao', 'analista-regional', 'analista-local')))
    		return $this->naoPossivel();

    	$keyword 			= $request->keyword;
    	$protocolos			= Protocolo::buscar($request);

    	$thematics 			= Thematic::all();
    	$users 				= User::getUsersToProtocolInChefia();
    	$documentoTipoOrigens = DocumentoTipo::tiposEntrada();
    	$documentoTipos     = DocumentoTipo::tiposProduzido();
    	$individuos 		= Individuo::individuosToChip();

    	$indInit 			= '[]';

    	if(!is_null($request->individuo))
    	{
    		$individuosInit = Individuo::whereIn('id', $request->individuo)->get();
    		$indInit 		= $individuosInit->pluck('id_nome')->toJson();
    	}


    	$viewResultadoBusca = Lang::get('controller/protocolo.busca_title');

    	return $this->view('protocolo/resultado-busca', compact('viewResultadoBusca', 'keyword', 'protocolos', 'thematics', 'users', 'documentoTipoOrigens', 'documentoTipos', 'request', 'individuos', 'indInit'));
    }

    protected function handleDocumento(ProtocoloCreateRequest $request, Protocolo $protocolo)
    {
    	$documento  = $protocolo->documento();

    	if(!$request->has('user_id'))
    		$request->merge(['user_id' => auth()->user()->id]);

    	if(is_null($documento))
    	{
    		$documento  = Documento::create($request->all());
    	}
    	else
    	{
    		if ($request->hasFile('arquivo'))
    			Documento::deletarArquivo($documento);

    		$documento->update($request->all());
    	}

    	if ($request->hasFile('arquivo'))
    	{
    		$documentUrl        = $this->handleUpload($request->file('arquivo'), $protocolo);
    		$documento->arquivo = $documentUrl;
    		$documento->save();
    	}

    	return $documento;
    }

    protected function createDocumento($i, Request $request, Protocolo $protocolo)
    {
    	$data 			= $request->all();
    	$user 			= auth()->user();
    	
    	$documento  	= Documento::create([
    		'agencia_id'			=> $user->agencia_id,
    		'user_id'				=> $user->id,
    		'numero' 			=> $data['numero'][$i],
    		'documento_tipo_id'	=> $data['documento_tipo_id'][$i],
    		'arquivo'			=> $data['arquivo'][$i],
    	]);

    	if ($request->hasFile('arquivo'))
    	{
    		$documentUrl        = $this->handleUpload($request->file('arquivo')[$i], $protocolo);
    		
    		ComentarioProtocolo::comentar([
    			'agencia_id'			=> auth()->user()->agencia_id
    			,'user_id'				=> auth()->user()->id
    			,'protocolo_id'			=> $protocolo->id
    			,'estagio_atual_id'		=> $protocolo->estagio_id
    			,'descricao'			=> Lang::get('controller/protocolo.documento_enviado', ['documento' => $documento->documentoTipo->nome, 'numero' => $documento->numero])
    		]);

    		if (!$request->has('is_anexo'))
    		{
    			$numero  	= DocumentoNumero::create([
    				'agencia_id' 			=> $user->agencia_id
    				,'documento_id' 		=> $documento->id
    				,'documento_tipo_id' 	=> $documento->documento_tipo_id
    				,'numero' 				=> $data['numero'][$i]
    				,'ano' 					=> Carbon::now()->year
    			]);
    		}

    		$documento->arquivo = $documentUrl;
    		$documento->save();
    	}

    	return $documento;
    }

    protected function changeDocumento($i, Request $request, Protocolo $protocolo, Documento $documento)
    {
    	$data 			= $request->all();
    	$user 			= auth()->user();
    	
    	if ($request->hasFile('arquivo'))
    	{
    		Documento::deletarArquivo($documento);

    		$documentUrl        = $this->handleUpload($request->file('arquivo')[0], $protocolo);
    		
    		ComentarioProtocolo::comentar([
    			'agencia_id'			=> auth()->user()->agencia_id
    			,'user_id'				=> auth()->user()->id
    			,'protocolo_id'			=> $protocolo->id
    			,'estagio_atual_id'		=> $protocolo->estagio_id
    			,'descricao'			=> Lang::get('controller/protocolo.documento_editou', ['documento' => $documento->documentoTipo->nome, 'numero' => $documento->numero])
    		]);

    		$documento->arquivo = $documentUrl;
    		$documento->save();
    	}

    	return $documento;
    }

    protected function handleRelatorioBusca(Protocolo $protocolo, Request $request)
    {
    	$relatorioBusca = $protocolo->relatorioBusca();

    	if(is_null($relatorioBusca))
    	{
    		if($request->hasFile('arquivo'))
    		{
    			$documento = $this->gerarDocumentoNumero('relatorioBusca', $request, $protocolo);
    			$protocolo->documentos()->attach($documento);
    		}
    	}
    	elseif($request->hasFile('arquivo'))
    	{
    		$relatorioBusca = $this->substituirDocumento($relatorioBusca, $request, $protocolo);
    	}
    }

    protected function handleRelatorioAnalistaRemover(Protocolo $protocolo, Request $request)
    {
    	$relatorioAnalista = $protocolo->relatorioAnalista();

    	if(is_null($relatorioAnalista))
    	{
    		if($request->hasFile('arquivo'))
    		{
    			$documento = $this->gerarDocumentoNumero($protocolo->documento_tipo_ser_produzido_id, $request, $protocolo);
    			$protocolo->documentos()->attach($documento);
    		}
    	}
    	elseif($request->hasFile('arquivo'))
    	{
    		$relatorioAnalista = $this->substituirDocumento($relatorioAnalista, $request, $protocolo);
    	}
    }

    /*avaliar inatividade*/
    private function gerarDocumentoNumero($funcaoDocumentoTipo, $request, Protocolo $protocolo)
    {
    	$user 		= auth()->user();

    	if(is_numeric($funcaoDocumentoTipo))
    		$request->request->add(['documento_tipo_id' => $funcaoDocumentoTipo]);
    	else
    		$request->request->add(['documento_tipo_id' => DocumentoTipo::$funcaoDocumentoTipo()->id]);
    	
    	$request->request->add(['agencia_id' 	=> $user->agencia_id]);

    	$documento  = Documento::create($request->all());
    	$numero  	= DocumentoNumero::create([
    		'agencia_id' 			=> $user->agencia_id
    		,'documento_id' 		=> $documento->id
    		,'documento_tipo_id' 	=> $documento->documento_tipo_id
    		,'numero' 				=> $request->numero
    		,'ano' 					=> Carbon::now()->year
    	]);

    	$documentUrl        	= $this->handleUpload($request->file('arquivo'), $protocolo);
    	$documento->arquivo 	= $documentUrl;
    	$documento->save();  

    	return $documento;
    }

    private function substituirDocumento($documento, $request, Protocolo $protocolo)
    {
    	Documento::deletarArquivo($documento);

    	$documentUrl        	= $this->handleUpload($request->file('arquivo'), $protocolo);
    	$documento->arquivo 	= $documentUrl;
    	$documento->save();

    	return $documento;
    }

    private function naoPossivel()
    {
    	return redirect()->route('protocolo.index')->withSuccess(Lang::get('controller/protocolo.direto_naopossivel'));
    }

    private function naoPossivelVisualizar()
    {
    	return redirect()->back()->withSuccess(Lang::get('controller/protocolo.naopossivel_ver'));
    }
}
