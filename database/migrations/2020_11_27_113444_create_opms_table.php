<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opms', function (Blueprint $table) {
            $table->bigIncrements('id');

    		$table->unsignedBigInteger('opm_id')->nullable()->comment('se vazio é unidade raiz, senão subordinada');
    		$table->string('nome');
    		
            $table->foreign('opm_id')->references('id')->on('opms')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed', array('--class' => 'OpmSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opms');
    }
}
