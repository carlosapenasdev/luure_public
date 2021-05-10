<?php

use Illuminate\Database\Seeder;
use App\Models\Management\DocumentoNumero;
use App\Models\Management\DocumentoTipo;
use Carbon\Carbon;

class DocumentoNumeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$tipos 		= DocumentoTipo::all()->where('tipo', 1);

    	foreach ($tipos as $tipo)
    	{
    		$documento						= new DocumentoNumero();
    		$documento->documento_tipo_id 	= $tipo->id;
    		$documento->numero 				= rand (0, 150);
    		$documento->ano 				= Carbon::now()->year;
    		$documento->save(); 
    	}

    }
}
