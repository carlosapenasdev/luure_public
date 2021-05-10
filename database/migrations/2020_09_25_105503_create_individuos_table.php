<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome');
            $table->string('rg')->nullable();
    		$table->string('cpf')->nullable();
            $table->string('mae')->nullable();
            $table->string('pai')->nullable();
            $table->string('alcunha')->nullable();

            $table->unsignedBigInteger('estabelecimento_prisional_id');
            $table->unsignedBigInteger('faccao_criminosa_id');

            $table->string('funcao_faccao')->nullable();
            $table->longText('observacoes')->nullable();

            $table->string('foto01')->nullable();
            $table->string('foto02')->nullable();
            $table->string('foto03')->nullable();

            $table->foreign('estabelecimento_prisional_id')->references('id')->on('estabelecimento_prisionals')->onDelete('cascade');
            $table->foreign('faccao_criminosa_id')->references('id')->on('faccao_criminosas')->onDelete('cascade');

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
        Schema::dropIfExists('individuos');
    }
}
