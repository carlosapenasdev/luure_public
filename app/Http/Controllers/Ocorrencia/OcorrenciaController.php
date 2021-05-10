<?php

namespace App\Http\Controllers\Ocorrencia;

use App\Http\Controllers\Controller;

use App\Models\Ocorrencia\Ocorrencia;
use Illuminate\Http\Request;

use App\Models\Management\Estado;
use App\Models\Management\Cidade;
use App\Models\Operacao\Operacao;
use App\Models\Management\Ambiente;
use App\Models\Individuo\Individuo;
use App\Models\Management\NaturezaCrime;
use App\Models\Management\Veiculo;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use App\Services\SespService;
use Lang;
use Alert;
use Auth;

class OcorrenciaController extends Controller
{
	protected $rules = [
		'bou' 			=> 'required|string|unique:ocorrencias,bou,NULL,id,deleted_at,NULL',
		'ambiente_id' 	=> 'required|exists:ambientes,id',
		'cidade_id' 	=> 'required|exists:cidades,id',
		'data'			=> 'required|date_format:"d/m/Y"',
		'hora'			=> 'required|date_format:"H:i"',
		'rua' 			=> 'required|string',
		'numero' 		=> 'required|string',
		'bairro' 		=> 'required|string',
		'natureza' 		=> 'required|array',
		'descritivo' 	=> 'string|required|min:30',
	];

	public function __construct()
	{
		parent::__construct('ocorrencia');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$estadoDefault 	= Estado::getDefault();
    	$cidades 		= Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault 	= Cidade::getDefault();
    	$operacaos 		= Operacao::all();
    	$ambientes 		= Ambiente::listar();
    	$individuos 	= Individuo::individuos();
    	$crimes 		= NaturezaCrime::listar();

    	$ocorrencias 	= Ocorrencia::all();

    	return $this->view('ocorrencia/index', compact('cidades', 'cidadeDefault', 'operacaos', 'ambientes', 'individuos', 'crimes', 'ocorrencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    	return redirect()->route('ocorrencias.importar-sesp');
    }

    public function criar(Request $request)
    {
    	$estadoDefault 	= Estado::getDefault();
    	$cidades 		= Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault 	= Cidade::getDefault();
    	$operacaos 		= Operacao::all();
    	$ambientes 		= Ambiente::listar();
    	$individuos 	= Individuo::individuosToChip();
    	$crimes 		= NaturezaCrime::listar()->pluck('codigo_name')->toJson();

    	if(count($request->all()) == 0)
    	{
    		return $this->view('ocorrencia/form', compact('cidades', 'cidadeDefault', 'operacaos', 'ambientes', 'individuos', 'crimes')); 
    	}
    	else
    	{
    		$ocorrencia 	= new Ocorrencia();

    		foreach ($request->all() as $key => $value)
    			$ocorrencia->$key = $value;

    		$geoY = 0;
    		$geoX = 0;

    		if (isset($ocorrencia->geolocalizacao))
    		{
    			$geo = explode(' ', $ocorrencia->geolocalizacao);

    			if(count($geo) > 0)
    			{	
    				$geoY = $geo[0];
    				$geoX = $geo[1];
    			}
    		}

    		$ocorrencia->geolocalizacao = new Point($geoY, $geoX);

    		return $this->view('ocorrencia/form', compact('cidades', 'cidadeDefault', 'operacaos', 'ambientes', 'individuos', 'crimes', 'ocorrencia'));
    	}
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

    	$datahora = $this->handleDataHora($request);
    	$request->merge(['datahora' => $datahora]);
    	
    	$request->request->add(['agencia_id' 	=> auth()->user()->agencia_id]);

    	$ocorrencia 				= Ocorrencia::create($request->all());
    	$ocorrencia->geolocalizacao = new Point($request->geoY, $request->geoX);
    	$ocorrencia->save();

    	if ($request->has('natureza'))
    	{
    		foreach ($request->natureza as $i => $natureza)
    		{
    			$naturezas[] = NaturezaCrime::where('codigo', $natureza)->first()->id;
    		}

    		$ocorrencia->crimes()->sync($naturezas);
    	}

    	if ($request->has('individuo'))
    	{
    		$ocorrencia->presos()->sync($request->individuo);
    	}

    	if ($request->has('veiculo'))
    	{
    		$veiculos = [];

    		foreach ($request->veiculo as $dataVeiculo)
    		{
    			$veiculo = Veiculo::byUpdateOrCreate($dataVeiculo);
    			$veiculos[] = $veiculo->id;    			
    		}

    		$ocorrencia->veiculos()->sync($veiculos);
    	}

    	return redirect()->route('ocorrencias.index')->withSuccess(Lang::get('common.sucess_inserted'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Ocorrencia\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencia $ocorrencia)
    {
    	return $this->edit($ocorrencia, false);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Ocorrencia\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ocorrencia $ocorrencia, $editar = true)
    {
    	$estadoDefault 	= Estado::getDefault();
    	$cidades 		= Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault 	= Cidade::getDefault();
    	$operacaos 		= Operacao::all();
    	$ambientes 		= Ambiente::listar();
    	$individuos 	= Individuo::individuosToChip();
    	$crimes 		= NaturezaCrime::listar()->pluck('codigo_name')->toJson();
    	$indInit 		= $ocorrencia->presos->pluck('id_nome')->toJson();
    	$naturezaInit 	= $ocorrencia->crimes->pluck('codigo_name')->toJson();
    	
    	return $this->view('ocorrencia/form', compact('ocorrencia', 'cidades', 'cidadeDefault', 'operacaos', 'ambientes', 'individuos', 'crimes', 'indInit', 'naturezaInit', 'editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Ocorrencia\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ocorrencia $ocorrencia)
    {
    	#dd($request->all());
    	$this->rules['bou'] .= ',bou,'.$ocorrencia->id;
    	$validator = $this->validar($request);

    	if(!is_null($validator))
    		return $validator;

    	$datahora = $this->handleDataHora($request);
    	$request->merge(['datahora' => $datahora]);

    	$ocorrencia->update($request->all());
    	$ocorrencia->geolocalizacao = new Point($request->geoY, $request->geoX);
    	$ocorrencia->save();

    	if ($request->has('natureza'))
    	{
    		foreach ($request->natureza as $i => $natureza)
    		{
    			$naturezas[] = NaturezaCrime::where('codigo', $natureza)->first()->id;
    		}

    		$ocorrencia->crimes()->sync($naturezas);
    	}

    	if ($request->has('individuo'))
    	{
    		$ocorrencia->presos()->sync($request->individuo);
    	}
    	else
    	{
    		$ocorrencia->presos()->detach();
    	}

    	if ($request->has('veiculo'))
    	{
    		$veiculos = [];

    		foreach ($request->veiculo as $dataVeiculo)
    		{
    			$veiculo = Veiculo::byUpdateOrCreate($dataVeiculo);
    			$veiculos[] = $veiculo->id;    			
    		}

    		$ocorrencia->veiculos()->sync($veiculos);
    	}
    	else
    	{
    		$ocorrencia->veiculos()->detach();
    	}

    	return redirect()->route('ocorrencias.index')->withSuccess(Lang::get('common.sucess_edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Ocorrencia\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ocorrencia $ocorrencia)
    {
    	$ocorrencia->delete();

    	return redirect()->route('ocorrencias.index')->withSuccess(Lang::get('common.sucess_deleted'));
    }

    public function buscar(Request $request)
    {
    	$estadoDefault 	= Estado::getDefault();
    	$cidades 		= Cidade::getByEstado($estadoDefault->id);
    	$cidadeDefault 	= Cidade::getDefault();
    	$operacaos 		= Operacao::all();
    	$ambientes 		= Ambiente::listar();
    	$individuos 	= Individuo::individuos();
    	$crimes 		= NaturezaCrime::listar();
    	$ocorrencias 	= Ocorrencia::buscar($request);

    	return $this->view('ocorrencia/index', compact('cidades', 'cidadeDefault', 'operacaos', 'ambientes', 'individuos', 'crimes', 'ocorrencias', 'request'));
    }

    public function unique(Request $request)
    {
    	$ocorrencias 	= Ocorrencia::buscar($request);
    	
    	return response()->json([
    		'total' => $ocorrencias->count(),
    	]);
    }

    public function importarSesp(Request $request)
    {
    	$userSesp = SespService::getUser();

    	return $this->view('ocorrencia/importar-sesp', compact('userSesp'));
    }

    private function handleDataHora(Request $request)
    {
    	return getByDataHora($request->data, $request->hora);
    }
}
