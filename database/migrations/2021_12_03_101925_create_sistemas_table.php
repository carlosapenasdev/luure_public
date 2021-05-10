<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistemas', function (Blueprint $table)
        {    
            $table->bigIncrements('id');

    		$table->longText('name');
    		$table->longText('banner');
    		$table->longText('link');
            
            $table->timestamps();
            $table->softDeletes();

        });

        Artisan::call('db:seed', array('--class' => 'SistemaSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sistemas');
    }
}
