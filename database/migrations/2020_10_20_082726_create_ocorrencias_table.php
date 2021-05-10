<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcorrenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('ocorrencias', function (Blueprint $table) {

    		$table->bigIncrements('id');

    		$table->string('bou');
    		
    		$table->unsignedBigInteger('operacao_id')->nullable();
    		$table->unsignedBigInteger('ambiente_id');

    		$table->unsignedBigInteger('cidade_id');
    		$table->string('bairro');
    		$table->string('rua');
    		$table->string('numero');
    		
    		$table->point('geolocalizacao')->nullable()->comment('lat Y / lng X');
    		$table->float('confianca_geo', 8, 3)->default(0);

    		$table->timestamp('datahora')->useCurrent();
    		$table->longText('descritivo');

    		$table->timestamps();
    		$table->softDeletes();

    		$table->foreign('operacao_id')->references('id')->on('operacaos')->onDelete('cascade');
    		$table->foreign('ambiente_id')->references('id')->on('ambientes')->onDelete('cascade');
    		$table->foreign('cidade_id')->references('id')->on('cidades')->onDelete('cascade');
    		
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('ocorrencias');
    }
}
