<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comentario;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('protocolo_id');
            $table->unsignedBigInteger('estagio_atual_id');
            $table->unsignedBigInteger('estagio_destino_id')->nullable();
            $table->boolean('tipo')->default(Comentario::IS_SISTEMA)->comment('0 = comentarios usuarios; 1 = comentarios sistema / historico');

            $table->string('descricao');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('protocolo_id')->references('id')->on('protocolos')->onDelete('cascade');
            $table->foreign('estagio_atual_id')->references('id')->on('estagios')->onDelete('cascade');
            $table->foreign('estagio_destino_id')->references('id')->on('estagios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
