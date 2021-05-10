<?php

use Illuminate\Database\Seeder;
use App\Models\Gestao\Efetivo\User;
use App\Models\Historico;

class EfetivoSeeder extends Seeder
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
    		$teste[$key]['data_ingresso'] = getCarbonDate($value['data_ingresso']);

    		$user = User::where('email', 'LIKE', '%'.$value['email'].'%')->first();
    		
    		foreach ($teste[$key] as $field => $valor)
    		{
    			if(empty($valor))
    			{
    				unset($teste[$key][$field]);
    			}
    		}

    		if(!empty($user))
    			$user->update($teste[$key]);
    		else
    		{
    			$teste[$key]['password'] 	= bcrypt('123456');
    			User::create($teste[$key]);
    		}
    	}
    	
    	Historico::where('subject_type', 'App\Models\Management\User')->update(array('subject_type' =>'App\Models\Gestao\Efetivo\User'));
    	Historico::where('causer_type', 'App\Models\Management\User')->update(array('causer_type' =>'App\Models\Gestao\Efetivo\User'));
    }
}

