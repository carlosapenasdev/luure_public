<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Protocolo\Protocolo;

class CreateProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('protocolos', function (Blueprint $table) {
    		$table->bigIncrements('id');

            #ADJUNTO
    		$table->unsignedBigInteger('origin_id')->comment('ADJUNTO PREENCHE');
    		$table->unsignedBigInteger('thematic_id')->comment('ADJUNTO PREENCHE');
    		$table->unsignedBigInteger('user_cadastro_id')->comment('ADJUNTO PREENCHE');
    		$table->longText('assunto_principal')->comment('ADJUNTO PREENCHE');

			#CHEFE
    		$table->unsignedBigInteger('user_analista_id')->nullable()->comment('CHEFE PREENCHE');
    		$table->timestamp('data_atribuiu_analista')->nullable()->comment('SISTEMA PREENCHE');
    		$table->longText('necessidades_especificas')->nullable()->comment('CHEFE PREENCHE');
    		$table->unsignedBigInteger('documento_tipo_ser_produzido_id')->nullable()->comment('CHEFE PREENCHE');
    		$table->integer('dias_prazo_protocolo')->nullable()->comment('CHEFE PREENCHE');

			#ANALISTA
    		$table->timestamp('data_recebeu_analista')->nullable()->comment('SISTEMA PREENCHE');
    		$table->unsignedBigInteger('user_elo_id')->nullable()->comment('ANALISTA PREENCHE');
    		$table->timestamp('data_atribuiu_elo')->nullable()->comment('SISTEMA PREENCHE');
    		$table->boolean('elabora_ob')->nullable()->comment('ANALISTA PREENCHE');
    		$table->integer('dias_prazo_elo')->nullable()->comment('ANALISTA PREENCHE');
			#numero_documento_produzido_id

			#ELO
    		$table->timestamp('data_recebeu_elo')->nullable()->comment('SISTEMA PREENCHE');
    		$table->timestamp('data_elo_encerrou')->nullable()->comment('SISTEMA PREENCHE');

			#FINALIZAR
    		$table->boolean('conclusao_elo')->nullable()->comment('SISTEMA PREENCHE');
    		$table->boolean('conclusao_analista')->nullable()->comment('SISTEMA PREENCHE');
    		$table->boolean('conclusao_chefe')->nullable()->comment('SISTEMA PREENCHE');
    		$table->boolean('conclusao_adm')->nullable()->comment('SISTEMA PREENCHE');
    		$table->timestamp('data_adm_encerrou')->nullable()->comment('SISTEMA PREENCHE');

    		$table->timestamp('prazo_final')->nullable()->comment('SISTEMA PREENCHE');
    		$table->integer('status')->nullable()->default(Protocolo::$status['inChefia'])->comment('SISTEMA PREENCHE');
    		$table->unsignedBigInteger('estagio_id')->nullable()->comment('SISTEMA PREENCHE');

    		$table->timestamps();
    		$table->softDeletes();

    		$table->foreign('origin_id')->references('id')->on('origins')->onDelete('cascade');
    		$table->foreign('thematic_id')->references('id')->on('thematics')->onDelete('cascade');
    		$table->foreign('user_cadastro_id')->references('id')->on('users')->onDelete('cascade');
    		$table->foreign('user_analista_id')->references('id')->on('users')->onDelete('cascade');
    		$table->foreign('user_elo_id')->references('id')->on('users')->onDelete('cascade');
    		$table->foreign('documento_tipo_ser_produzido_id')->references('id')->on('documento_tipos')->onDelete('cascade');
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
    	Schema::dropIfExists('protocolos');
    }
}
