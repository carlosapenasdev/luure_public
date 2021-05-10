<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Protocolo\ContraInteligencia;
class CreateContraInteligenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('contra_inteligencias', function (Blueprint $table) {

    		$table->bigIncrements('id');

    		$table->foreignId('agencia_de_id')->nullable()->constrained('agencias')->onDelete('set null');
    		$table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
    		$table->foreignId('protocolo_id')->nullable()->constrained('protocolos')->onDelete('set null');
    		$table->foreignId('documento_id')->nullable()->constrained('documentos')->onDelete('set null');
    		$table->foreignId('agencia_para_id')->nullable()->constrained('agencias')->onDelete('set null');
    		$table->boolean('validado')->default(ContraInteligencia::NAO_VALIDADO)->comment('0 = nao validado; 1 = validado');

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
    	Schema::dropIfExists('contra_inteligencias');
    }
}
