<?php

use Illuminate\Database\Seeder;
use App\Models\Gestao\Agencia\Agencia;

class AgenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$agencias 	= [

    		[
    			'nome' => 'CI',
    			'usavel' => 0,
    			'subagencias' => [
    				['nome' => 'S1'],
    				['nome' => 'S2'],
    				['nome' => 'S3'],
    				['nome' => 'S4'],
    				['nome' => 'S5'],
    				['nome' => 'S6'],
    				['nome' => 'S7'],
    				['nome' => 'Contrainteligencia'],
    			]
    		],
    		[
    			'nome' => 'ARI 1º CRPM',
    			'subagencias' => [
    				["nome" => "ALI 12º BPM"],
    				["nome" => "ALI 13º BPM"],
    				["nome" => "ALI 20º BPM"],
    				["nome" => "ALI 23º BPM"],
    				["nome" => "ALI RPMONT"],
    				["nome" => "ALI BPTRAN"]
    			]
    		],
    		[
    			'nome' => 'ARI 2º CRPM',
    			'subagencias' => [
    				["nome" => "ALI 2º BPM"],
    				["nome" => "ALI 5º BPM"],
    				["nome" => "ALI 10º BPM"],
    				["nome" => "ALI 15º BPM"],
    				["nome" => "ALI 18º BPM"],
    				["nome" => "ALI 4ª CIPM"],
    				["nome" => "ALI 6ª CIPM"],
    				["nome" => "ALI 7ª CIPM"],
    			]
    		],
    		[
    			'nome' => 'ARI 3º CRPM',
    			'subagencias' => [
    				["nome" => "ALI 4º BPM"],
    				["nome" => "ALI 7º BPM"],
    				["nome" => "ALI 8º BPM"],
    				["nome" => "ALI 11º BPM"],
    				["nome" => "ALI 25º BPM"],
    				["nome" => "ALI 3ª CIPM"],
    				["nome" => "ALI 5ª CIPM"],
    				["nome" => "ALI 9ª CIPM"],
    			]
    		],
    		[
    			'nome' => 'ARI 4º CRPM',
    			'subagencias' => [
    				["nome" => "ALI 1º BPM"],
    				["nome" => "ALI 16º BPM"],
    				["nome" => "ALI 26º BPM"],
    				["nome" => "ALI 28º BPM"],
    				["nome" => "ALI 27º BPM"],
    				["nome" => "ALI 8ª CIPM"],	
    			]
    		],
    		[
    			'nome' => 'ARI 5º CRPM',
    			'subagencias' => [
    				["nome" => "ALI 3º BPM"],
    				["nome" => "ALI 6º BPM"],
    				["nome" => "ALI 14º BPM"],
    				["nome" => "ALI 19º BPM"],
    				["nome" => "ALI 21º BPM"],
    			]
    		],
    		[
    			'nome' => 'ARI 6º CRPM',
    			'subagencias' => [
    				["nome" => "ALI 9º BPM"],
    				["nome" => "ALI 17º BPM"],
    				["nome" => "ALI 22º BPM"],
    				["nome" => "ALI BPGD"],
    			]
    		],

    		[
    			'nome' => 'Especializadas',
    			'usavel' => 0,
    			'subagencias' => [
    				['nome' => "ALI BPRv"],
    				['nome' => "ALI BPMA"],
    				['nome' => "ALI BPFRON"],
    				['nome' => "ALI BPEC"],
    				['nome' => "ALI BOPE"],
    				['nome' => "ALI BPMOA"],
    			]
    		], 
    	];

    	foreach ($agencias as $key => $unidade)
    	{
    		$usavel = (!isset($unidade['usavel']));
    		$this->criar($unidade['nome'], $usavel);
    	}

    	foreach ($agencias as $key => $unidade)
    	{
    		if(!empty($unidade['subagencias']))
    		{
    			$vinculo = Agencia::where('nome', $unidade['nome'])->first();

    			foreach ($unidade['subagencias'] as $key => $nova)
    			{
    				$usavel = (!isset($nova['usavel']));
    				$this->criar($nova['nome'], $usavel, $vinculo->id);
    			}
    		}
    	}
    }

    private function criar($nome, $usavel = true, $vinculo_id = null)
    {
    	$agenciaExiste = Agencia::where('nome',$nome)->first();

    	if(is_null($agenciaExiste))
    	{
    		$agencia = Agencia::create(['nome' => $nome, 'usavel' => $usavel, 'vinculo_id' => $vinculo_id]);
    		return $agencia->id;
    	}
    	else
    		return $agenciaExiste->id;
    }
}
