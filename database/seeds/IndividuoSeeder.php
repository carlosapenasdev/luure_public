<?php

use Illuminate\Database\Seeder;
use App\Models\Individuo\Individuo;
use App\Models\Individuo\EnderecoIndividuo;
use App\Models\Individuo\TelefoneIndividuo;
use App\Models\Individuo\TatuagemIndividuo;

use App\Models\Management\EstabelecimentoPrisional;
use App\Models\Management\FaccaoCriminosa;
use App\Models\Management\NaturezaCrime;
use App\Models\Operacao\Operacao;

use App\Models\Management\Estado;
use App\Models\Management\Cidade;

class IndividuoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$json 	= '[]';
    	$obj 	= json_decode($json);

    	foreach ($obj as $key => $item)
    	{
    		unset($data);
    		unset($naturezas);

    		$prisao = $this->getPrisao($item->prisao);
    		$faccao = $this->getFaccao($item->faccao);

    		$data['nome'] 							= $item->nome;
    		$data['alcunha'] 						= $item->alcunha;
    		$data['mae'] 							= $item->mae;
    		$data['rg'] 							= $item->rg;
    		$data['funcao_faccao'] 					= $item->funcao_faccao;

    		$data['estabelecimento_prisional_id'] 	= $prisao->id;
    		$data['faccao_criminosa_id'] 			= $faccao->id;

    		$individuo 								= Individuo::create($data);

    		$cidade = $this->getCidade($item->cidade1);

    		if(!empty($cidade))
    		{
    			unset($data);

    			$data['individuo_id'] 	= $individuo->id;
    			$data['estado_id'] 		= $cidade->estado_id;
    			$data['cidade_id'] 		= $cidade->id;
    			$data['rua'] 			= $item->rua1;
    			$data['numero'] 		= $item->numero1;
    			$data['bairro'] 		= $item->bairro1;

    			$endereco = EnderecoIndividuo::create($data);
    		}

    		$cidade = $this->getCidade($item->cidade2);

    		if(!empty($cidade))
    		{
    			unset($data);

    			$data['individuo_id'] 	= $individuo->id;
    			$data['estado_id'] 		= $cidade->estado_id;
    			$data['cidade_id'] 		= $cidade->id;
    			$data['rua'] 			= $item->rua2;
    			$data['numero'] 		= $item->numero2;
    			$data['bairro'] 		= $item->bairro2;

    			$endereco = EnderecoIndividuo::create($data);
    		}

    		if(!empty($item->telefone1))
    		{
    			unset($data);
    			$data['individuo_id'] 	= $individuo->id;
    			$data['telefone'] = $item->telefone1;
    			$telefone = TelefoneIndividuo::create($data);
    		}

    		if(!empty($item->telefone2))
    		{
    			unset($data);
    			$data['individuo_id'] 	= $individuo->id;
    			$data['telefone'] 		= $item->telefone2;
    			$telefone 				= TelefoneIndividuo::create($data);
    		}

    		if(!empty($item->crime1))
    		{
    			$natureza = $this->getCrime($item->crime1);

    			if(!empty($natureza))
    				$naturezas[] = $natureza->id;
    		}

    		if(!empty($item->crime2))
    		{
    			$natureza = $this->getCrime($item->crime2);

    			if(!empty($natureza))
    				$naturezas[] = $natureza->id;
    		}

    		if(!empty($item->crime3))
    		{
    			$natureza = $this->getCrime($item->crime3);

    			if(!empty($natureza))
    				$naturezas[] = $natureza->id;
    		}

    		if(!empty($naturezas))
    		{
    			$individuo->crimes()->sync($naturezas);
    		}
    	}

    	foreach ($obj as $key => $item)
    	{
    		unset($vinculos);
    		unset($individuo);

    		$individuo = Individuo::where('nome', $item->nome)->first();

    		if(!empty($individuo))
    		{
    			if(!empty($item->vinculo1))
    			{
    				$vinculo = Individuo::where('nome', $item->vinculo1)->first();

    				if(!empty($vinculo))
    				{
    					$vinculos[] = $vinculo->id;
    				}
    			}

    			if(!empty($item->vinculo2))
    			{
    				$vinculo = Individuo::where('nome', $item->vinculo2)->first();

    				if(!empty($vinculo))
    				{
    					$vinculos[] = $vinculo->id;
    				}
    			}


    			if(!empty($item->vinculo3))
    			{
    				$vinculo = Individuo::where('nome', $item->vinculo3)->first();

    				if(!empty($vinculo))
    				{
    					$vinculos[] = $vinculo->id;
    				}
    			}

    			if(isset($vinculos) && count($vinculos) > 0)
    			{
    				$individuo->vinculoIda()->sync($vinculos);
    				$individuo->vinculoRetorno()->sync($vinculos);
    			}
    		}
    	}

    }

    private function getPrisao($prisao)
    {
    	if(empty($prisao))
    		$prisao = 'Não';

    	$estabPri = EstabelecimentoPrisional::where('name', $prisao)->first();

    	if(empty($estabPri))
    		$estabPri = EstabelecimentoPrisional::create(['name' => $prisao]);

    	return $estabPri;
    }

    private function getFaccao($faccao)
    {
    	if(empty($faccao))
    		$faccao = 'Não';

    	$faccao = FaccaoCriminosa::where('name', $faccao)->first();

    	if(empty($faccao))
    		$faccao = EstabelecimentoPrisional::create(['name' => $faccao]);

    	return $faccao;
    }

    private function getCidade($cidade)
    {
    	$cidade = Cidade::where('nome', $cidade)->first();

    	return $cidade;
    }

    private function getCrime($crime)
    {
    	$natureza = NaturezaCrime::where('name', 'like', $crime)->first();

    	if(empty($natureza))
    	{
    		$codigo 	= rand ( 0 , 99999 );
    		$codigo 	= str_pad($codigo, 5, '0', STR_PAD_LEFT);

    		$ini 		= substr($codigo, 0,-2);
    		$fim 		= substr($codigo, -2);

    		$montado 	= '0P2.'.$ini.'.'.$fim;

    		$natureza 	= NaturezaCrime::where('codigo', 'like', $montado)->first();

    		if(empty($natureza)){
    			$natureza = NaturezaCrime::create(['name' => $crime, 'codigo' => $montado]);
    		}
    	}

    	return $natureza;
    }
}
