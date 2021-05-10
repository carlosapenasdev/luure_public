<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioIndividuoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_individuo', function (Blueprint $table) {
            $table->unsignedBigInteger('comentario_id');
            $table->unsignedBigInteger('individuo_id');

            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');

            $table->primary(['comentario_id', 'individuo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_individuo');
    }
}
