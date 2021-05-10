<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDifusaoProtocoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difusao_protocolo', function (Blueprint $table) {
            $table->unsignedBigInteger('protocolo_in_id');
            $table->unsignedBigInteger('protocolo_out_id');

            $table->foreign('protocolo_in_id')->references('id')->on('protocolos')->onDelete('cascade');
            $table->foreign('protocolo_out_id')->references('id')->on('protocolos')->onDelete('cascade');

            $table->primary(['protocolo_in_id','protocolo_out_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('difusao_protocolo');
    }
}
