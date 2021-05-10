<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentoTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_tipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nome');
            
            $table->boolean('changeable')
            ->default(1)
            ->comment('0 = nao; 1 = sim');

            $table->boolean('tipo')
            ->default(0)
            ->comment('0 = entrada; 1 = produzido');

            $table->timestamps();
            $table->softDeletes();
        });

        Artisan::call('db:seed', array('--class' => 'DocumentoTipoSeeder', '--force' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento_tipos');
    }
}
