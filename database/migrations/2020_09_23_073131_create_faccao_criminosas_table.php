<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaccaoCriminosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faccao_criminosas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');

            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed', array('--class' => 'FaccaoCriminosaSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faccao_criminosas');
    }
}
