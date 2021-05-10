<?php

use Illuminate\Database\Seeder;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Models\Gestao\Estatistica\AcaoEstatistica;
use App\Models\Gestao\Estatistica\NaturezaEstatistica;
use App\Models\Gestao\Estatistica\OrigemEstatistica;

class EstatisticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$teste = array ();

    	foreach ($teste as $key => $value)
    	{
    		if(empty($value['natureza_estatistica_id']))
    			$teste[$key]['natureza_estatistica_id'] = 'Cumprimento de Mandado de Prisão';

    		$teste[$key]['data'] = getCarbonDate($value['data']);
    		$teste[$key]['acao_estatistica_id'] = AcaoEstatistica::where('name', 'LIKE', '%'.$value['acao_estatistica_id'].'%')->first()->id;
    		$teste[$key]['natureza_estatistica_id'] = NaturezaEstatistica::where('name', 'LIKE', '%'.$value['natureza_estatistica_id'].'%')->first()->id;
    		$teste[$key]['origem_estatistica_id'] = OrigemEstatistica::where('name', 'LIKE', '%'.$value['origem_estatistica_id'].'%')->first()->id;
    		$teste[$key]['numero_boletim'] = str_replace('.', ',', $value['numero_boletim']);

    		if(empty($value['operacao']) || $value['operacao'] == '-')
    			$teste[$key]['operacao'] = null;


    		if(isset($teste[$key]['Chave Primária']))
    			unset($teste[$key]['Chave Primária']);

    		if(isset($teste[$key]['Ano']))
    			unset($teste[$key]['Ano']);

    		if(isset($teste[$key]['Mês']))
    			unset($teste[$key]['Mês']);

    		foreach ($teste[$key] as $field => $valor)
    		{
    			if(empty($valor)){
    				if($field == 'natureza_estatistica_id')
    					dd($value, $valor, $field);

    				unset($teste[$key][$field]);
    			}
    		}

    		Estatistica::create($teste[$key]);
    	}

    }
}

