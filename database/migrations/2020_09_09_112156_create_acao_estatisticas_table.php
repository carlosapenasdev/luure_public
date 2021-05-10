<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Estatistica\AcaoEstatistica;
use Carbon\Carbon;

class CreateAcaoEstatisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acao_estatisticas', function (Blueprint $table) {
            $table->bigIncrements('id');

    		$table->string('name');

    		$table->timestamps();
    		$table->softDeletes();
        });

    	$now = Carbon::now();

    	$insert = ['name' => 'Indireta', 'created_at' => $now, 'updated_at' => $now];
    	AcaoEstatistica::insert($insert);
    	
    	$insert = ['name' => 'Direta', 'created_at' => $now, 'updated_at' => $now];
    	AcaoEstatistica::insert($insert);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acao_estatisticas');
    }
}
