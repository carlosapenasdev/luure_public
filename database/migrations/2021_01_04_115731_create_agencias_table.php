<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencias', function (Blueprint $table)
        {    
            $table->bigIncrements('id');

    		$table->unsignedBigInteger('vinculo_id')->nullable()->comment('se vazio é agencia raiz');
    		$table->boolean('usavel')->default(1)->comment('0 = nao usavel; 1 = usavel');
    		$table->string('nome');
    		
            $table->foreign('vinculo_id')->references('id')->on('agencias')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();

        });

        Artisan::call('db:seed', array('--class' => 'AgenciaSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencias');
    }
}
