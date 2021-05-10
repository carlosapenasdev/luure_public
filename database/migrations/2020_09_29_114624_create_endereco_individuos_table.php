<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecoIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('endereco_individuos', function (Blueprint $table) {
    		$table->bigIncrements('id');

    		$table->unsignedBigInteger('individuo_id');
    		$table->unsignedBigInteger('estado_id');
    		$table->unsignedBigInteger('cidade_id');


    		$table->string('rua')->nullable();
    		$table->string('numero')->nullable();
    		$table->string('bairro')->nullable();
    		$table->string('observacao')->nullable();

    		$table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');
    		$table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
    		$table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
    		
    		$table->timestamps();
    		$table->softDeletes();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('endereco_individuos');
    }
}
