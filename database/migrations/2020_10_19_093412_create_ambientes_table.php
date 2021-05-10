<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('ambientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('codigo');
            $table->longText('name');

            $table->boolean('destaque')
            ->default(0)
            ->comment('0 = não; 1 = sim');

            $table->boolean('sesp')
            ->default(0)
            ->comment('0 = não; 1 = sim');

            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed', array('--class' => 'AmbienteSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambientes');
    }
}
