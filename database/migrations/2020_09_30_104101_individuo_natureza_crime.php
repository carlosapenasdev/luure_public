<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndividuoNaturezaCrime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('individuo_natureza_crime', function (Blueprint $table) {
    		$table->unsignedBigInteger('individuo_id');
    		$table->unsignedBigInteger('natureza_crime_id');

    		$table->foreign('individuo_id')->references('id')->on('individuos')->onDelete('cascade');
    		$table->foreign('natureza_crime_id')->references('id')->on('natureza_crimes')->onDelete('cascade');

    		$table->primary(['individuo_id', 'natureza_crime_id']);
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::dropIfExists('individuo_natureza_crime');
    }
}
