<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaturezaCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('natureza_crimes', function (Blueprint $table) {
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

        Artisan::call('db:seed', array('--class' => 'NaturezaCrimeSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('natureza_crimes');
    }
}
