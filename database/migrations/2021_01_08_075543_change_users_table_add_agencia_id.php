<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Agencia\Agencia;

class ChangeUsersTableAddAgenciaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('users', function (Blueprint $table) 
    	{
    		if (!Schema::hasColumn('users','agencia_id'))
    		{
    			$table->unsignedBigInteger('agencia_id')->default(1)->after('id');

    			$table->foreign('agencia_id')->references('id')->on('agencias')->onDelete('cascade');
    		}
    	});
    	
    	$ali = Agencia::where('nome', 'LIKE', '%ALI 1º BPM%')->first();
    	
    	$pdo = \DB::connection('mysql')->getPdo();
    	$pdo->exec("UPDATE `users` SET `agencia_id` = '{$ali->id}'");
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
