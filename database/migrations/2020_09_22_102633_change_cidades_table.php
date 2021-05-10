<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Management\Cidade;
use App\Models\Management\Estado;

class ChangeCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	if (!Schema::hasColumn('cidades','estado_id'))
    	{
    		Schema::table('cidades', function (Blueprint $table)
    		{
    			$table->unsignedBigInteger('estado_id')->nullable()->after('nome');
    			$table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
    		});

    		$cidades = Cidade::all();

    		foreach ($cidades as $cidade)
    		{
    			$estado 			= Estado::getByUf($cidade->uf)->first();

    			$cidade->estado_id 	= $estado->id;
    			$cidade->save();
    		}

    		if (Schema::hasColumn('cidades','uf'))
    		{
    			Schema::table('cidades', function (Blueprint $table)
    			{
    				$table->dropColumn('uf');
    				$table->unsignedBigInteger('estado_id')->nullable(false)->change();
    			});
    		}
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	
    }
}
