<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Efetivo\AreaFormacao;
use Carbon\Carbon;

class CreateAreaFormacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

    	Schema::create('area_formacaos', function (Blueprint $table) {
    		$table->bigIncrements('id');

    		$table->string('name');

    		$table->timestamps();
    		$table->softDeletes();
    	});

    	$now = Carbon::now();

    	$insert=[
    		['name' => 'Nenhum'],
    		['name' => 'Direito'],
    		['name' => 'Administração'],
    		['name' => 'Lic. História'],
    		['name' => 'Gestão Pública'],
    		['name' => 'Geografia'],
    		['name' => 'Tec. Agropecuária'],
    		['name' => 'Gestão Ambiental'],
    	];

    	foreach ($insert as $item)
    	{
    		AreaFormacao::create(['name' => $item['name'], 'created_at' => $now, 'updated_at' => $now]);
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('area_formacaos');
    }
}
