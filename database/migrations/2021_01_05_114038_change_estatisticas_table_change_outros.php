<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Gestao\Estatistica\Estatistica;

class ChangeEstatisticasTableChangeOutros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('estatisticas', function (Blueprint $table) {

    		if (Schema::hasColumn('estatisticas','outros'))
    		{
    			$table->longText('outros')->change();
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
