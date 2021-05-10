<?php

use Illuminate\Database\Seeder;
use App\Models\Gestao\Canal\Canal;

class CanalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$canais = ['Luure', 'E-mail', 'E-Protocolo'];
    	
        foreach ($canais as $key => $canal)
    	{
    		$canal 		= Canal::create(['name' => $canal]);
    	}
    }
}
