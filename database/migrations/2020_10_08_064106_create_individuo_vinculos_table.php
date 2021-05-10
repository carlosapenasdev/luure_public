<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuoVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuo_vinculos', function (Blueprint $table) {
            $table->unsignedBigInteger('individuo_id');
            $table->unsignedBigInteger('vinculo_id');

            $table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');
            $table->foreign('vinculo_id')->references('id')->on('individuos')->onDelete('cascade');

            $table->primary(['individuo_id','vinculo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuo_vinculos');
    }
}
