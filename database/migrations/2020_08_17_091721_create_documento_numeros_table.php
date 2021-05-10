<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoNumerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_numeros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('documento_id')->nullable();;
            $table->unsignedBigInteger('documento_tipo_id');
            
            $table->unsignedBigInteger('numero');
            $table->year('ano');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('documento_id')->references('id')->on('documentos')->onDelete('cascade');
            $table->foreign('documento_tipo_id')->references('id')->on('documento_tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_numeros');
    }
}
