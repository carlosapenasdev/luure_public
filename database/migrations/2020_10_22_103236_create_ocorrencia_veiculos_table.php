<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcorrenciaVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocorrencia_veiculos', function (Blueprint $table) {
            $table->unsignedBigInteger('ocorrencia_id');
            $table->unsignedBigInteger('veiculo_id');

            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');
            $table->foreign('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade');

            $table->primary(['ocorrencia_id', 'veiculo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocorrencia_veiculos');
    }
}
