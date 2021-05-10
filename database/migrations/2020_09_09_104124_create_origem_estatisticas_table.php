<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Estatistica\OrigemEstatistica;
use Carbon\Carbon;

class CreateOrigemEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('origem_estatisticas', function (Blueprint $table) {
    		$table->bigIncrements('id');

    		$table->string('name');

    		$table->timestamps();
    		$table->softDeletes();
    	});

    	$now = Carbon::now();

    	$insert = ['name' => 'Operação Interceptação', 'created_at' => $now, 'updated_at' => $now];
    	OrigemEstatistica::insert($insert);
    	
    	$insert = ['name' => 'Operação MBA/MP', 'created_at' => $now, 'updated_at' => $now];
    	OrigemEstatistica::insert($insert);
    	
    	$insert = ['name' => 'Análise Criminal', 'created_at' => $now, 'updated_at' => $now];
    	OrigemEstatistica::insert($insert);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('origem_estatisticas');
    }
}
