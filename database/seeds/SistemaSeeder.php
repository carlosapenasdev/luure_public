<?php

use Illuminate\Database\Seeder;
use App\Models\Gestao\Sistema\Sistema;

class SistemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$created_at = Carbon\Carbon::now();
    	$sistemas = [
    		['link' => 'https://projudi.tjpr.jus.br/projudi/','name' => 'PROJUDI', 'banner' => '/upload/sistemas/tjpr.jpg', 'created_at' => $created_at,'updated_at' => $created_at],
    		['link' => 'https://www.eprotocolo.pr.gov.br/spiweb/entrada.do  ','name' => 'E-Protocolo', 'banner' => '/upload/sistemas/eprotocolo.jpg', 'created_at' => $created_at,'updated_at' => $created_at],
    	];

    	Sistema::insert($sistemas);
    }
}
