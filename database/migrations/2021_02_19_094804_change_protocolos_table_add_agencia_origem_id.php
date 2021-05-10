<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProtocolosTableAddAgenciaOrigemId extends Migration
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
    		if (!Schema::hasColumn('protocolos','agencia_origem_id'))
    		{
    			$table->unsignedBigInteger('agencia_origem_id')->nullable()->after('agencia_id');

    			$table->foreign('agencia_origem_id')->references('id')->on('agencias')->onDelete('cascade');
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
