<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Estatistica\Estatistica;
use App\Models\Operacao\Operacao;
use App\Models\Management\Cidade;
use Illuminate\Support\Facades\Lang;

class ChangeComentariosTableChangeTamanhoComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('comentarios', function (Blueprint $table)
    	{
    		$table->longText('descricao')->change();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('comentarios', function (Blueprint $table) {

    	});
    }
}
