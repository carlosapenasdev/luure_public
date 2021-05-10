<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturezaCrimeOcorrenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('natureza_crime_ocorrencia', function (Blueprint $table) {
            $table->unsignedBigInteger('natureza_crime_id');
            $table->unsignedBigInteger('ocorrencia_id');

            $table->foreign('natureza_crime_id')->references('id')->on('natureza_crimes')->onDelete('cascade');
            $table->foreign('ocorrencia_id')->references('id')->on('ocorrencias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('natureza_crime_ocorrencia');
    }
}
