<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Protocolo\Estagio;

class CreateEstagiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nome');
            $table->string('slug');
            $table->integer('ordem')->default(999);
            $table->boolean('interativo')->default(Estagio::INTERATIVO_SIM)->comment('0 = interativo; 1 = nao interativo');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagios');
    }
}
