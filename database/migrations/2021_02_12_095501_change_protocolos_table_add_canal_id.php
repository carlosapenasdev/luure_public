<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProtocolosTableAddCanalId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('protocolos', function (Blueprint $table)
    	{
    		if (Schema::hasColumn('protocolos','canal_id'))
    			$table->dropColumn('canal_id');

    		$table->unsignedBigInteger('canal_id')->default(1)->after('agencia_id');
    		$table->foreign('canal_id')->references('id')->on('canals')->onDelete('cascade');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {    	
    	Schema::table('protocolos', function (Blueprint $table)
    	{
    		$table->dropForeign(['canal_id']);
    		$table->dropColumn('canal_id');
    	});
    }
}
