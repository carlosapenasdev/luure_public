<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoMissaoOperacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_missao_operacao', function (Blueprint $table)
        {
            $table->unsignedBigInteger('documento_id');
            $table->unsignedBigInteger('missao_id');

            $table->foreign('documento_id')->references('id')->on('documentos')->onDelete('cascade');
            $table->foreign('missao_id')->references('id')->on('missao_operacaos')->onDelete('cascade');

            $table->primary(['documento_id','missao_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_missao_operacao');
    }
}
