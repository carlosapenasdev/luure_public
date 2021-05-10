<?php

use Illuminate\Database\Seeder;
use App\Models\Gestao\Opm\Opm;

class OpmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$unidades[] 	= [
    		'nome' => 'SCG',
    		'subunidades' => [
    			["nome" => "BPRv"],
    			["nome" => "BPMA"],
    			["nome" => "BPFRON"],
    			["nome" => "BPEC"],
    			["nome" => "BOPE"],
    			["nome" => "COPOM"],
    			["nome" => "BPMOA"]
    		]
    	];
    	
    	$unidades[] 	= [
    		'nome' => '1º CRPM',
    		'subunidades' => [
    			["nome" => "12º BPM"],
    			["nome" => "13º BPM"],
    			["nome" => "20º BPM"],
    			["nome" => "23º BPM"],
    			["nome" => "RPMONT"],
    			["nome" => "BPTRAN"]
    		]
    	];
    	
    	$unidades[] 	= [
    		'nome' => '2º CRPM',
    		'subunidades' => [
    			["nome" => "2º BPM"],
    			["nome" => "5º BPM"],
    			["nome" => "10º BPM"],
    			["nome" => "15º BPM"],
    			["nome" => "18º BPM"],
    			["nome" => "4ª CIPM"],
    			["nome" => "6ª CIPM"],
    			["nome" => "7ª CIPM"],
    		]
    	];
    	
    	$unidades[] 	= [
    		'nome' => '3º CRPM',
    		'subunidades' => [
    			["nome" => "4º BPM"],
    			["nome" => "7º BPM"],
    			["nome" => "8º BPM"],
    			["nome" => "11º BPM"],
    			["nome" => "25º BPM"],
    			["nome" => "3ª CIPM"],
    			["nome" => "5ª CIPM"],
    			["nome" => "9ª CIPM"],
    		]
    	];
    	
    	$unidades[] 	= [
    		'nome' => '4º CRPM',
    		'subunidades' => [
    			["nome" => "1º BPM"],
    			["nome" => "16º BPM"],
    			["nome" => "26º BPM"],
    			["nome" => "28º BPM"],
    			["nome" => "27º BPM"],
    			["nome" => "8ª CIPM"],	
    		]
    	];
    	
    	$unidades[] 	= [
    		'nome' => '5º CRPM',
    		'subunidades' => [
    			["nome" => "3º BPM"],
    			["nome" => "6º BPM"],
    			["nome" => "14º BPM"],
    			["nome" => "19º BPM"],
    			["nome" => "21º BPM"],
    		]
    	];
    	
    	$unidades[] 	= [
    		'nome' => '6º CRPM',
    		'subunidades' => [
    			["nome" => "9° BPM"],
    			["nome" => "17º BPM"],
    			["nome" => "22º BPM"],
    			["nome" => "BPGD"],
    		]
    	];

    	foreach ($unidades as $key => $unidade)
    	{
    		$opm 		= Opm::create(['nome' => $unidade['nome']]);
    		$unidades[$key]['id'] 	= $opm->id;
    	}

    	foreach ($unidades as $key => $unidade)
    	{
    		foreach ($unidade['subunidades'] as $key => $subUnidade)
    		{
    			Opm::create(['opm_id' => $unidade['id'], 'nome' => $subUnidade['nome']]);
    		}
    	}
    }
}
