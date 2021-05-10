<?php

namespace App\Http\Controllers\Protocolo;

use App\Http\Controllers\Controller;
use App\Models\Protocolo\ContraInteligencia;
use Illuminate\Http\Request;
use App\Http\Requests\ContraInteligenciaRequest;
use App\Models\Gestao\Agencia\Agencia;
use App\Models\Protocolo\Protocolo;
use Lang;

class ContraInteligenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContraInteligenciaRequest $request)
    {
    	$contrasSemDestino = ContraInteligencia::abertosSemDestino();
    	$contrasComDestino = ContraInteligencia::abertosComDestino();

    	return $this->view('protocolo/contrainteligencia/index', compact('contrasSemDestino', 'contrasComDestino'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ContraInteligenciaRequest $request)
    {
    	return redirect()->route('contrainteligencia.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContraInteligenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContraInteligenciaRequest $request)
    {
    	return redirect()->route('contrainteligencia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Protocolo\ContraInteligencia  $contra
     * @return \Illuminate\Http\Response
     */
    public function show(ContraInteligenciaRequest $request, ContraInteligencia $contra)
    {
    	return redirect()->route('contrainteligencia.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protocolo\ContraInteligencia  $contra
     * @return \Illuminate\Http\Response
     */
    public function edit(ContraInteligenciaRequest $request, ContraInteligencia $contra)
    {
    	$agenciasDe 		= Agencia::usaveis();
    	$agenciasPara 	= Agencia::ci()->vinculos;

    	$agenciasPara 	= $agenciasPara->filter(function($agencia) use ($request)
    	{
    		if(!$agencia->isContraIn())
    			return $agencia;
    	});
    	$protocolo 		= $contra->getProtocoloBase();

    	$documento 		= $contra->documento;
    	return $this->view('protocolo/contrainteligencia/form', compact('contra', 'agenciasDe', 'agenciasPara', 'protocolo', 'documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ContraInteligenciaRequest  $request
     * @param  \App\Models\Protocolo\ContraInteligencia  $contra
     * @return \Illuminate\Http\Response
     */
    public function update(ContraInteligenciaRequest $request, ContraInteligencia $contra)
    {
    	if($request->has('agencia_para_id'))
    	{
    		$contra->agencia_para_id = $request->agencia_para_id;
    		
    		$request->merge([
    			"assunto" 					=> $contra->assunto_contra
    			,"agencias" 				=> [ $request->agencia_para_id ]
    			,"documento-selecionado" 	=> $contra->documento->slug()
    			,"agencia_origem_id" 		=> $contra->agencia_de_id
    		]);

    		Protocolo::clonarParaOutraAgencia($request, $contra->protocolo);
    	}
    	
        $contra->validado = ContraInteligencia::VALIDADO;
        $contra->save();

        return redirect()->route('contrainteligencia.index')->withSuccess(Lang::get('controller/contrainteligencia.mensagem_validacao'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protocolo\ContraInteligencia  $contra
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContraInteligenciaRequest $request, ContraInteligencia $contra)
    {
    	return redirect()->route('contrainteligencia.index');
    }
}
