<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('estatisticas', function (Blueprint $table)
    	{
    		$table->bigIncrements('id');
    		
    		$table->unsignedBigInteger('acao_estatistica_id');
    		$table->unsignedBigInteger('natureza_estatistica_id');
    		$table->unsignedBigInteger('origem_estatistica_id');

    		$table->date('data');
    		$table->string('operacao')->nullable();
    		$table->string('documentacao')->nullable();
    		$table->string('numero_boletim');

    		$table->integer('pessoas_detidas')->default(0);
    		$table->float('maconha', 8, 3)->default(0);
    		$table->integer('maconha_planta')->default(0);
    		$table->float('crack', 8, 3)->default(0);
    		$table->float('cocaina', 8, 3)->default(0);
    		$table->integer('lsd')->default(0);
    		$table->integer('ecstasy')->default(0);
    		$table->integer('revolver')->default(0);
    		$table->integer('pistola')->default(0);
    		$table->integer('garrucha')->default(0);
    		$table->integer('espingarda')->default(0);
    		$table->integer('carabina')->default(0);
    		$table->integer('municoes')->default(0);
    		$table->float('dinheiro', 8, 2)->default(0);

    		$table->timestamps();
    		$table->softDeletes();

            $table->foreign('acao_estatistica_id')->references('id')->on('acao_estatisticas')->onDelete('cascade');
            $table->foreign('natureza_estatistica_id')->references('id')->on('natureza_estatisticas')->onDelete('cascade');
            $table->foreign('origem_estatistica_id')->references('id')->on('origem_estatisticas')->onDelete('cascade'); 
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('estatisticas');
    }
}
