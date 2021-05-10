<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIndividuosTableAddPublicInterno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('individuos', function (Blueprint $table) {
    		
    		if (Schema::hasColumn('individuos','tipo_militar'))
    			$table->dropColumn('tipo_militar');
    		
    		if (Schema::hasColumn('individuos','opm_id'))
    		{
    			$table->dropForeign(['opm_id']);
    			$table->dropColumn('opm_id');
    		}
    	});
    	
    	Schema::table('individuos', function (Blueprint $table) {
    		$table->integer('tipo_militar')->default(0)->after('foto03');
    		$table->unsignedBigInteger('opm_id')->nullable()->after('tipo_militar');

    		$table->foreign('opm_id')->references('id')->on('opms')->onDelete('cascade');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('individuos', function (Blueprint $table) {
    		$table->dropForeign(['opm_id']);
    		$table->dropColumn('opm_id');
    		$table->dropColumn('tipo_militar');
    	});
    }
}
