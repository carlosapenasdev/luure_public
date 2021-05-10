<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuoOcorrenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuo_ocorrencia', function (Blueprint $table) {
            $table->unsignedBigInteger('individuo_id');
            $table->unsignedBigInteger('ocorrencia_id');

            $table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');

            $table->primary(['individuo_id', 'ocorrencia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuo_ocorrencia');
    }
}
