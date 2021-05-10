<?php

namespace App\Http\Controllers\Gestao\Efetivo;

use App\Efetivo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gestao\Efetivo\User;

use App\Models\Gestao\Efetivo\PostoGraduacao;
use App\Models\Gestao\Efetivo\Escolaridade;
use App\Models\Gestao\Efetivo\AreaFormacao;
use App\Models\Management\Role;
use Lang;
use App\Models\Gestao\Agencia\Agencia;

class EfetivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$users = User::todosAtivos();
    	return $this->view('efetivo/index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Efetivo  $efetivo
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    	if(auth()->user()->hasRole('root'))
    		$roles = Role::all();
    	else
    		$roles = Role::all()->except(Role::root()->id);

    	$postoGraduacaos 	= PostoGraduacao::all();
    	$escolaridades 		= Escolaridade::all();
    	$areaFormacaos 		= AreaFormacao::all();
    	$readonly 			= true;

    	$agencias 			= Agencia::usaveis();

    	return $this->view('management/user/form', compact('user', 'roles', 'postoGraduacaos', 'escolaridades', 'areaFormacaos', 'readonly', 'agencias'));
    }

    public function create()
    {
    	return redirect()->route('user.create');
    }

    public function download()
    {
    	$users = User::todosAtivos()->sortBy('antiguidade');
    	$users->makeHidden([
    		'id'
    		,'agencia_id'
    		,'created_at'
    		,'updated_at'
    		,'deleted_at'
    		,'posto_graduacao_id'
    		,'escolaridade_id'
    		,'area_formacao_id'
    		,'email_verified_at'
    		,'status'
    		,'name'
    	]);
    	
    	$csv = [];

    	foreach ($users as $key => $userBD)
    	{
    		$postoGraduacao = $userBD->posto_graduacao;
    		$escolaridade 	= $userBD->escolaridade;
    		$areaFormacao 	= $userBD->area_formacao;
    		$role 			= $userBD->roles->first();

    		$user = $userBD->toArray();
    		$user['ciai'] = Lang::get('controller/user.field_ciai_'.$user['ciai']);
    		$user['operacoes_inteligencia'] = Lang::get('controller/user.field_operacoes_inteligencia_'.$user['operacoes_inteligencia']);
    		$user['mpc'] = Lang::get('controller/user.field_mpc_'.$user['mpc']);
    		$user['sem_nivelamento'] = Lang::get('controller/user.field_sem_nivelamento_'.$user['sem_nivelamento']);

    		$toCsv["antiguidade"] 				= $user["antiguidade"];
    		$toCsv["posto_graduacao"] 			= $user["posto_graduacao"]["name"];
    		$toCsv["nome_guerra"] 				= $user["nome_guerra"];
    		$toCsv["nome_completo"]				= $user["nome_completo"];
    		$toCsv["rg"] 						= " ".$user["rg"]." ";
    		$toCsv["cpf"] 						= $user["cpf"];
    		$toCsv["titulo_eleitor"]			= " ".$user["titulo_eleitor"]." ";
    		$toCsv["endereco"] 					= $user["endereco"];
    		$toCsv["bairro"] 					= $user["bairro"];
    		$toCsv["cidade"] 					= $user["cidade"];
    		$toCsv["fone_celular"] 				= $user["fone_celular"];
    		$toCsv["fone_residencial"] 			= $user["fone_residencial"];
    		$toCsv["fone_recado"] 				= $user["fone_recado"];
    		$toCsv["email"] 					= $user["email"];
    		$toCsv["email_secundario"] 			= $user["email_secundario"];
    		
    		$toCsv["funcao"] 					= !is_null($role) ? $role->name : '';
    		$toCsv["escolaridade"] 				= !is_null($escolaridade) ? $escolaridade->name : '';
    		$toCsv["area_formacao"] 			= !is_null($areaFormacao) ? $areaFormacao->name : '';

    		$toCsv["arma_01_modelo"] 			= $user["arma_01_modelo"];
    		$toCsv["arma_01_serie"] 			= $user["arma_01_serie"];
    		$toCsv["arma_01_patrimonio"] 		= $user["arma_01_patrimonio"];
    		$toCsv["arma_02_modelo"] 			= $user["arma_02_modelo"];
    		$toCsv["arma_02_serie"] 			= $user["arma_02_serie"];
    		$toCsv["arma_02_patrimonio"] 		= $user["arma_02_patrimonio"];
    		$toCsv["ciai"] 						= $user["ciai"];
    		$toCsv["ciclo_ano"] 				= $user["ciclo_ano"];
    		$toCsv["operacoes_inteligencia"] 	= $user["operacoes_inteligencia"];
    		$toCsv["operacoes_local_ano"] 		= $user["operacoes_local_ano"];
    		$toCsv["mpc"] 						= $user["mpc"];
    		$toCsv["mpc_local_ano"] 			= $user["mpc_local_ano"];
    		$toCsv["sem_nivelamento"] 			= $user["sem_nivelamento"];
    		$toCsv["data_ingresso"] 			= !is_null($userBD->data_ingresso) ? formatar_data($userBD->data_ingresso) : $userBD->data_ingresso;
    		$toCsv["data_saida"] 				= !is_null($userBD->data_saida) ? formatar_data($userBD->data_saida) : $userBD->data_saida;
    		$csv[] = $toCsv;
    	}

    	$columns = array_keys($csv[0]);

    	$callback = function() use ($csv, $columns)
    	{
    		$file = fopen('php://output', 'w');
    		fputcsv($file, $columns, ';');

    		foreach($csv as $line)
    		{
    			fputcsv($file, $line, ';');
    		}
    		fclose($file);
    	};
    	$headers = [
    		'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
    		,   'Content-type'        => 'text/csv'
    		,   'Content-Disposition' => 'attachment; filename=efetivo_'.date('Y-m-d_H.i.s').'.csv'
    		,   'Expires'             => '0'
    		,   'Pragma'              => 'public'
    	];
    	return response()->stream($callback, 200, $headers);
    }
}
