<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operacaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_cadastro_id');

            $table->string('nome');
            $table->unsignedBigInteger('cidade_id');
            $table->string('vara');
            $table->string('juiz');
            $table->string('promotor');

            $table->date('data_inicio');
            $table->date('data_termino')->nullable();

            $table->longText('resumo');
            
            $table->boolean('status')->default(0)->comment('0 = ativa; 1 = finalizada');
            
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_cadastro_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('operacaos');
    }
}
