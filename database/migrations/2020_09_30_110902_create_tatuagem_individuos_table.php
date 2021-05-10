<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTatuagemIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tatuagem_individuos', function (Blueprint $table) {
            $table->bigIncrements('id');

    		$table->unsignedBigInteger('individuo_id');
    		$table->unsignedBigInteger('padrao_desenho_id');
    		$table->unsignedBigInteger('regiao_corpo_id');

    		$table->longText('detalhamento')->nullable();
    		$table->string('tatuagem')->nullable();

    		$table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');
    		$table->foreign('padrao_desenho_id')->references('id')->on('padrao_desenhos')->onDelete('cascade');
    		$table->foreign('regiao_corpo_id')->references('id')->on('regiao_corpos')->onDelete('cascade');
    		
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
        Schema::dropIfExists('tatuagem_individuos');
    }
}
