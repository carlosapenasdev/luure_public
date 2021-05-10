<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividuoProtocoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuo_protocolo', function (Blueprint $table) {
            $table->unsignedBigInteger('protocolo_id');
            $table->unsignedBigInteger('individuo_id');

            $table->foreign('protocolo_id')->references('id')->on('protocolos')->onDelete('cascade');
            $table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');

            $table->primary(['protocolo_id', 'individuo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuo_protocolo');
    }
}
