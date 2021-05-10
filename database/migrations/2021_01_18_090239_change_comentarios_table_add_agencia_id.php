<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeComentariosTableAddAgenciaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('comentarios', function (Blueprint $table) 
    	{
    		if (!Schema::hasColumn('comentarios','agencia_id'))
    		{
    			$table->unsignedBigInteger('agencia_id')->default(1)->after('id');

    			$table->foreign('agencia_id')->references('id')->on('agencias')->onDelete('cascade');
    		}
    	});
    	
    	$ali = \App\Models\Gestao\Agencia\Agencia::where('nome', 'LIKE', '%ALI 1º BPM%')->first();
    	
    	$pdo = \DB::connection('mysql')->getPdo();
    	$pdo->exec("UPDATE `comentarios` SET `agencia_id` = '{$ali->id}'");
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
