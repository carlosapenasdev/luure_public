<?php

use Illuminate\Database\Seeder;
use App\Models\Management\FaccaoCriminosa;

class FaccaoCriminosaSeeder extends Seeder
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
    		['name' => 'MP','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'PCC','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'PGC','created_at' => $created_at,'updated_at' => $created_at],
    		['name' => 'Não','created_at' => $created_at,'updated_at' => $created_at],
    	];

    	FaccaoCriminosa::insert($ep);
    }
}
