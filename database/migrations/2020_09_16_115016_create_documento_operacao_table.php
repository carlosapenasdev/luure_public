<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoOperacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_operacao', function (Blueprint $table)
        {
            $table->unsignedBigInteger('documento_id');
            $table->unsignedBigInteger('operacao_id');

            $table->foreign('documento_id')->references('id')->on('documentos')->onDelete('cascade');
            $table->foreign('operacao_id')->references('id')->on('operacaos')->onDelete('cascade');

            $table->primary(['documento_id','operacao_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_operacao');
    }
}
