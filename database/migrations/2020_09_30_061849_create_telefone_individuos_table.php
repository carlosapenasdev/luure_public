<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefoneIndividuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefone_individuos', function (Blueprint $table) {
            $table->bigIncrements('id');

    		$table->unsignedBigInteger('individuo_id');

    		$table->string('telefone')->nullable();
    		$table->string('observacao')->nullable();

    		$table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');
    		
    		$table->timestamps();
    		$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telefone_individuos');
    }
}
