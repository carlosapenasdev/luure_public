<?php

use Illuminate\Database\Seeder;
use App\Models\Management\EstabelecimentoPrisional;

class EstabelecimentoPrisionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$created_at = Carbon\Carbon::now();
    	$ep = [
    		['name' => 'CPHS','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'PEP 1','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'PEPG','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'Tornozeleira','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'Não','created_at' => $created_at,'updated_at' => $created_at],
    	];

    	EstabelecimentoPrisional::insert($ep);
    }
}
