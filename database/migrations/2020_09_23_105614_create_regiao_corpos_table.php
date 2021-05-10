<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegiaoCorposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regiao_corpos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->longText('name');

            $table->boolean('sesp')
            ->default(0)
            ->comment('0 = não; 1 = sim');

            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed', array('--class' => 'RegiaoCorpoSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regiao_corpos');
    }
}
