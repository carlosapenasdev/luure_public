<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('estatisticas', function (Blueprint $table) {
    		$table->integer('veiculos')->default(0)->after('dinheiro');
    		$table->integer('celulares')->default(0)->after('veiculos');
    		$table->integer('balancas')->default(0)->after('celulares');
    		$table->string('outros')->nullable()->after('balancas');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estatisticas', function (Blueprint $table) {
            $table->dropColumn('veiculos');
            $table->dropColumn('celulares');
            $table->dropColumn('balancas');
            $table->dropColumn('outros');
        });
    }
}
