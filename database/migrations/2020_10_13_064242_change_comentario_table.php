<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('comentarios', function (Blueprint $table) {

    		if (Schema::hasColumn('comentarios','protocolo_id'))
    		{	
    			$table->dropForeign(['protocolo_id']);
    			$table->dropColumn('protocolo_id');
    		}

    		if (Schema::hasColumn('comentarios','estagio_atual_id'))
    		{	
    			$table->dropForeign(['estagio_atual_id']);
    			$table->dropColumn('estagio_atual_id');
    		}
    		
    		if (Schema::hasColumn('comentarios','estagio_destino_id'))
    		{	
    			$table->dropForeign(['estagio_destino_id']);
    			$table->dropColumn('estagio_destino_id');
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
    }
}
