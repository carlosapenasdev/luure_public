<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Gestao\Estatistica\Estatistica;

class ChangeEstatisticasTableAddVeiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('estatisticas', function (Blueprint $table) {

    		if (!Schema::hasColumn('estatisticas','veiculo_fr'))
    		{
    			$table->integer('veiculo_fr')->default(0)->after('veiculos');
    		}

    		if (!Schema::hasColumn('estatisticas','veiculo_transito'))
    		{
    			$table->integer('veiculo_transito')->default(0)->after('veiculos');
    		}

    		if (!Schema::hasColumn('estatisticas','veiculo_ocorrencia'))
    		{
    			$table->integer('veiculo_ocorrencia')->default(0)->after('veiculos');
    		}
    	});

    	Schema::table('estatisticas', function (Blueprint $table) {

    		if (Schema::hasColumn('estatisticas','veiculos'))
    		{
    			$estatisticas = Estatistica::where('veiculos', '>', 0)->get();

    			foreach ($estatisticas as $key => $estatistica)
    			{
    				$estatistica->veiculo_ocorrencia = $estatistica->veiculos;
    				$estatistica->save();
    			}
    		}
    	});

    	Schema::table('estatisticas', function (Blueprint $table) {

    		if (Schema::hasColumn('estatisticas','veiculos'))
    		{
    			$table->dropColumn('veiculos');
    		}
    	});
    	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
