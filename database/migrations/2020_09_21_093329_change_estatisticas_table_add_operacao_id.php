<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Models\Operacao\Operacao;
use App\Models\Management\Cidade;
use Illuminate\Support\Facades\Lang;

class ChangeEstatisticasTableAddOperacaoId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('estatisticas', function (Blueprint $table)
    	{
    		$table->unsignedBigInteger('operacao_id')->nullable()->after('operacao');
    		$table->foreign('operacao_id')->references('id')->on('operacaos')->onDelete('cascade');
    	});

    	$estatisticas = Estatistica::all();
    	
    	foreach ($estatisticas->sortBy('operacao') as $key => $estatistica)
    	{
    		if(!empty($estatistica->operacao))
    		{
    			$operacao = Operacao::where('nome', 'LIKE', '%'.$estatistica->operacao.'%')->first();
    			
    			if(empty($operacao))
    			{
    				$operacao = Operacao::create([
    					'user_cadastro_id' 	=> 1,
    					'nome' 				=> $estatistica->operacao,
    					'cidade_id' 		=> Cidade::getDefault()->id,
    					'data_inicio' 		=> '01/01/'.date('Y'),
    					'data_termino' 		=> '01/01/'.date('Y'),
    					'resumo' 			=> Lang::get('controller/operacao.criado_para_estatistica', ['operacao' => $estatistica->operacao]),
    					'status' 			=> 1
    				]);
    			}

    			$estatistica->operacao_id = $operacao->id;
    			$estatistica->save();
    		}
    	}

    	Schema::table('estatisticas', function (Blueprint $table)
    	{
    		$table->dropColumn('operacao');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('estatisticas', function (Blueprint $table) {
    		$table->dropForeign(['operacao_id']);
    		$table->dropColumn('operacao_id');
    	});
    }
}
