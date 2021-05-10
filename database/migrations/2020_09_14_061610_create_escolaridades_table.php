<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Efetivo\Escolaridade;
use Carbon\Carbon;

class CreateEscolaridadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolaridades', function (Blueprint $table) {
    		$table->bigIncrements('id');

    		$table->string('name');

    		$table->timestamps();
    		$table->softDeletes();
    	});

    	$now = Carbon::now();

    	$insert=[
    		['name' => 'Ensino Médio'],
    		['name' => 'Ensino Superior'],
    		['name' => 'Pós Graduação'],
    		['name' => 'Mestrado'],
    		['name' => 'Doutorado'],
    	];

    	foreach ($insert as $item)
    	{
    		Escolaridade::create(['name' => $item['name'], 'created_at' => $now, 'updated_at' => $now]);
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolaridades');
    }
}
