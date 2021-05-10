<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Management\Role;

class ChangeDocumentosTableAddUserId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	$role = Role::sysadmin();
    	$sysadmin = $role->users()->first();

    	if(is_null($sysadmin))
    	{
			$sysadmin = Role::root()->users()->first();
			$sysadmin->roles()->sync($role);
    	}

    	Schema::table('documentos', function (Blueprint $table) use ($sysadmin)
    	{
    		if (!Schema::hasColumn('documentos','user_id'))
    		{
    			$table->unsignedBigInteger('user_id')->default($sysadmin->id)->after('agencia_id');

    			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    		}
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('documentos', function (Blueprint $table) {
    		
    		if (Schema::hasColumn('documentos','user_id'))
    		{
    			$table->dropForeign(['user_id']);
    			$table->dropColumn('user_id');
    		}
    	});
    }
}
