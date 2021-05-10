<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Estatistica\NaturezaEstatistica;
use Carbon\Carbon;

class CreateNaturezaEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('natureza_estatisticas', function (Blueprint $table) {
    		$table->bigIncrements('id');

    		$table->string('name');

    		$table->timestamps();
    		$table->softDeletes();
    	});

    	$now = Carbon::now();

    	$naturezas = [
    		'Cumprimento de Mandado de Prisão',
    		'Cumprimento de Mandado de Busca e Apreensão',
    		'Roubo',
    		'Tráfico de Drogas',
    		'Furto',
    		'Posse/Porte Ilegal de Arma de Fogo',
    		'Violência Doméstica',
    		'Receptação',
    		'Perturbação do Sossego',
    		'Homicídio',
    	];

    	foreach ($naturezas as $natureza)
    	{
    		$insert = ['name' => $natureza, 'created_at' => $now, 'updated_at' => $now];
    		NaturezaEstatistica::insert($insert);
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('natureza_estatisticas');
    }
}
