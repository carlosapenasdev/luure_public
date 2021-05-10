<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuoOperacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuo_operacao', function (Blueprint $table) {
            $table->unsignedBigInteger('operacao_id');
            $table->unsignedBigInteger('individuo_id');

            $table->foreign('operacao_id')->references('id')->on('operacaos')->onDelete('cascade');
            $table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');

            $table->primary(['operacao_id', 'individuo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuo_operacao');
    }
}
