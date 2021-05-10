<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatisticaIndividuoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatistica_individuo', function (Blueprint $table) {
            $table->unsignedBigInteger('estatistica_id');
            $table->unsignedBigInteger('individuo_id');

            $table->foreign('estatistica_id')->references('id')->on('estatisticas')->onDelete('cascade');
            $table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');

            $table->primary(['estatistica_id', 'individuo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estatistica_individuo');
    }
}
