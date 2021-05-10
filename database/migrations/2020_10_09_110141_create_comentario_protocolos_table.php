<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comentario;
use App\Models\Protocolo\ComentarioProtocolo;

class CreateComentarioProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_protocolos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('comentario_id');
            $table->unsignedBigInteger('protocolo_id');
            $table->unsignedBigInteger('estagio_atual_id');
            $table->unsignedBigInteger('estagio_destino_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
            $table->foreign('protocolo_id')->references('id')->on('protocolos')->onDelete('cascade');
            $table->foreign('estagio_atual_id')->references('id')->on('estagios')->onDelete('cascade');
            $table->foreign('estagio_destino_id')->references('id')->on('estagios')->onDelete('cascade');
        });

        $comentarios = Comentario::all();

        foreach ($comentarios as $key => $comentario)
        {
        	$created_at = $comentario->created_at;
        	$updated_at = $comentario->updated_at;

        	$comentario 					= $comentario->toArray();
        	$comentario['comentario_id'] 	= $comentario['id'];
        	$comentario['created_at'] 		= $created_at;
        	$comentario['updated_at'] 		= $updated_at;

        	ComentarioProtocolo::create($comentario);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_protocolos');
    }
}
