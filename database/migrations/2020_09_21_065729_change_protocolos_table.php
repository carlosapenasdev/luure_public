<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('protocolos', function (Blueprint $table)
    	{
    		if (Schema::hasColumn('protocolos','visivel'))
    			$table->dropColumn('visivel');

    		$table->boolean('visivel')->default(1)->comment('0 = nao; 1 = sim')->after('status');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('protocolos', function (Blueprint $table)
    	{
    		$table->dropColumn('visivel');
    	});
    }
}
