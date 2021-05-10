<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Gestao\Agencia\Agencia;

class ChangeAgenciasTableAddCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('agencias', function (Blueprint $table) 
    	{
    		if (!Schema::hasColumn('agencias','code'))
    		{
    			$table->string('code')->nullable()->after('usavel');
    		}
    	});

    	Artisan::call('db:seed', array('--class' => 'AgenciaSeeder', '--force' => true));
    	
    	$agencias = Agencia::all();

    	foreach ($agencias as $agencia)
    	{
    		$code = str_replace(['º', '°', 'ª'], '', strtolower($agencia->nome));
    		$code = str_replace(' ', '-', strtolower($code));
    		$agencia->code = $code;
    		$agencia->save();
    	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('agencias', function (Blueprint $table) 
    	{
    		if (Schema::hasColumn('agencias','code'))
    			$table->dropColumn('code');
    	});
    }
}
