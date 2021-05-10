<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('cidades', function (Blueprint $table) {

    		if (!Schema::hasColumn('cidades','codigoIbge'))
    		{
    			$table->unsignedBigInteger('codigoIbge')->nullable()->after('estado_id');
    		}
    	});

    	Artisan::call('db:seed', array('--class' => 'CidadeIbgeSeeder', '--force' => true));
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
