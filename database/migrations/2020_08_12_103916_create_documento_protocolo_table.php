<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoProtocoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_protocolo', function (Blueprint $table) {
            $table->unsignedBigInteger('documento_id');
            $table->unsignedBigInteger('protocolo_id');

            $table->foreign('documento_id')->references('id')->on('documentos')->onDelete('cascade');
            $table->foreign('protocolo_id')->references('id')->on('protocolos')->onDelete('cascade');

            $table->primary(['documento_id','protocolo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_protocolo');
    }
}
