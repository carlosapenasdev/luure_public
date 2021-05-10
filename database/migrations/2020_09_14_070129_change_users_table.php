<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('users', function (Blueprint $table)
    	{
    		$table->integer('antiguidade')->default(99)->after('id');
    		$table->unsignedBigInteger('posto_graduacao_id')->default(1)->after('antiguidade');
    		$table->unsignedBigInteger('escolaridade_id')->default(1)->after('posto_graduacao_id');
    		$table->unsignedBigInteger('area_formacao_id')->default(1)->after('escolaridade_id');

    		if (Schema::hasColumn('users','name'))
    			$table->dropColumn('name');

    		$table->string('nome_guerra')->nullable()->after('area_formacao_id');
    		$table->string('nome_completo')->nullable()->after('nome_guerra');
    		$table->string('rg')->nullable()->after('nome_completo');
    		$table->string('cpf')->nullable()->after('rg');
    		$table->string('titulo_eleitor')->nullable()->after('cpf');
    		$table->string('endereco')->nullable()->after('titulo_eleitor');
    		$table->string('bairro')->nullable()->after('endereco');
    		$table->string('cidade')->nullable()->after('bairro');

    		$table->string('fone_celular')->nullable()->after('cidade');
    		$table->string('fone_residencial')->nullable()->after('fone_celular');
    		$table->string('fone_recado')->nullable()->after('fone_residencial');
    		$table->string('email_secundario')->nullable()->after('fone_recado');
    		
    		$table->string('arma_01_modelo')->nullable()->after('email_secundario');
    		$table->string('arma_01_serie')->nullable()->after('arma_01_modelo');
    		$table->string('arma_01_patrimonio')->nullable()->after('arma_01_serie');

    		$table->string('arma_02_modelo')->nullable()->after('arma_01_patrimonio');
    		$table->string('arma_02_serie')->nullable()->after('arma_02_modelo');
    		$table->string('arma_02_patrimonio')->nullable()->after('arma_02_serie');
    		
    		$table->boolean('ciai')->default(0)->comment('0 = nao; 1 = sim')->after('arma_02_patrimonio');
    		$table->string('ciclo_ano')->nullable()->after('ciai');
    		$table->boolean('operacoes_inteligencia')->default(0)->comment('0 = nao; 1 = sim')->after('ciclo_ano');
    		$table->string('operacoes_local_ano')->default(0)->comment('0 = nao; 1 = sim')->after('operacoes_inteligencia');
    		$table->boolean('mpc')->default(0)->comment('0 = nao; 1 = sim')->after('operacoes_local_ano');
    		$table->string('mpc_local_ano')->nullable()->after('mpc');
    		$table->boolean('sem_nivelamento')->default(0)->comment('0 = nao; 1 = sim')->after('mpc_local_ano');

    		$table->date('data_ingresso')->nullable()->after('sem_nivelamento');
    		$table->date('data_saida')->nullable()->after('data_ingresso');
    		$table->boolean('status')->default(0)->comment('0 = ativo; 1 = inativo')->after('data_saida');

    		$table->foreign('posto_graduacao_id')->references('id')->on('posto_graduacaos')->onDelete('cascade');
    		$table->foreign('escolaridade_id')->references('id')->on('escolaridades')->onDelete('cascade');
    		$table->foreign('area_formacao_id')->references('id')->on('area_formacaos')->onDelete('cascade');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('users', function (Blueprint $table)
    	{
    		$table->dropForeign(['posto_graduacao_id']);
    		$table->dropForeign(['escolaridade_id']);
    		$table->dropForeign(['area_formacao_id']);

    		$table->dropColumn('antiguidade');
    		$table->dropColumn('posto_graduacao_id');
    		$table->dropColumn('escolaridade_id');
    		$table->dropColumn('area_formacao_id');
    		$table->dropColumn('nome_guerra');
    		$table->dropColumn('nome_completo');
    		$table->dropColumn('rg');
    		$table->dropColumn('cpf');
    		$table->dropColumn('titulo_eleitor');
    		$table->dropColumn('endereco');
    		$table->dropColumn('bairro');
    		$table->dropColumn('cidade');
    		$table->dropColumn('fone_celular');
    		$table->dropColumn('fone_residencial');
    		$table->dropColumn('fone_recado');
    		$table->dropColumn('email_secundario');
    		$table->dropColumn('arma_01_modelo');
    		$table->dropColumn('arma_01_serie');
    		$table->dropColumn('arma_01_patrimonio');
    		$table->dropColumn('arma_02_modelo');
    		$table->dropColumn('arma_02_serie');
    		$table->dropColumn('arma_02_patrimonio');
    		$table->dropColumn('ciai');
    		$table->dropColumn('ciclo_ano');
    		$table->dropColumn('operacoes_inteligencia');
    		$table->dropColumn('operacoes_local_ano');
    		$table->dropColumn('mpc');
    		$table->dropColumn('mpc_local_ano');
    		$table->dropColumn('sem_nivelamento');
    		$table->dropColumn('data_ingresso');
    		$table->dropColumn('data_saida');
    		$table->dropColumn('status');
    	});
    }
}
