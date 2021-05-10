<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeContraInteligenciasTableAddAssuntoContra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('contra_inteligencias', function (Blueprint $table) 
    	{
    		if (!Schema::hasColumn('contra_inteligencias','assunto_contra'))
    		{
    			$table->longText('assunto_contra')->nullable()->after('agencia_para_id');
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
