<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Efetivo\PostoGraduacao;
use Carbon\Carbon;

class CreatePostoGraduacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('posto_graduacaos', function (Blueprint $table) {
    		$table->bigIncrements('id');

    		$table->string('name');

    		$table->timestamps();
    		$table->softDeletes();
    	});

    	$now = Carbon::now();

    	$insert=[
    		['name' => 'Cap. QOPM'],
    		['name' => '1º Ten. QOPM'],
    		['name' => '2º Ten. QOPM'],
    		['name' => 'Asp. Of. PM'],
    		['name' => 'Subten. QPMG 1-0'],
    		['name' => '1º Sgt. QPMG 1-0'],
    		['name' => '2º Sgt. QPMG 1-0'],
    		['name' => '3º Sgt. QPMG 1-0'],
    		['name' => 'Cb. QPMG 1-0'],
    		['name' => 'Sd. QPMG 1-0']
    	];

    	foreach ($insert as $item)
    	{
    		PostoGraduacao::create(['name' => $item['name'], 'created_at' => $now, 'updated_at' => $now]);
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('posto_graduacaos');
    }
}
