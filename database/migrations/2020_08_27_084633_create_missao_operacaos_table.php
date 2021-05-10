<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissaoOperacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('missao_operacaos', function (Blueprint $table)
    	{
    		$table->bigIncrements('id');
    		$table->unsignedBigInteger('operacao_id')->comment('SISTEMA PREENCHE');

    		#ANALISTA
    		$table->longText('assunto_principal')->comment('ANALISTA PREENCHE');
    		$table->boolean('elabora_ob')->nullable()->comment('ANALISTA PREENCHE');
    		$table->unsignedBigInteger('user_elo_id')->nullable()->comment('ANALISTA PREENCHE');
    		$table->integer('dias_prazo_elo')->nullable()->comment('ANALISTA PREENCHE');

			#ELO
    		$table->timestamp('data_recebeu_elo')->nullable()->comment('SISTEMA PREENCHE');
    		$table->timestamp('data_elo_encerrou')->nullable()->comment('SISTEMA PREENCHE');

    		#SISTEMA
    		$table->unsignedBigInteger('user_cadastro_id')->comment('SISTEMA PREENCHE');
    		$table->unsignedBigInteger('user_analista_id')->nullable()->comment('SISTEMA PREENCHE');
    		$table->timestamp('data_atribuiu_elo')->nullable()->comment('SISTEMA PREENCHE');
    		$table->timestamp('prazo_final')->nullable()->comment('SISTEMA PREENCHE');
    		$table->boolean('conclusao_elo')->nullable()->comment('SISTEMA PREENCHE');
    		$table->boolean('conclusao_analista')->nullable()->comment('SISTEMA PREENCHE');
    		$table->unsignedBigInteger('estagio_id')->nullable()->comment('SISTEMA PREENCHE');
    		$table->timestamp('data_adm_encerrou')->nullable()->comment('SISTEMA PREENCHE');

    		$table->timestamps();
    		$table->softDeletes();

    		$table->foreign('operacao_id')->references('id')->on('operacaos')->onDelete('cascade');
    		$table->foreign('user_cadastro_id')->references('id')->on('users')->onDelete('cascade');
    		$table->foreign('user_analista_id')->references('id')->on('users')->onDelete('cascade');
    		$table->foreign('user_elo_id')->references('id')->on('users')->onDelete('cascade');
    		$table->foreign('estagio_id')->references('id')->on('estagios')->onDelete('cascade');
    		
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('missao_operacaos');
    }
}
