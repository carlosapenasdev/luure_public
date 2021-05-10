<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Management\Role;

class ChangeRolesTableAddChefes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	$role 		= Role::where('slug', 'chefe')->first();
    	$role->name = 'Chefe Local';
    	$role->slug = 'chefe-local';
    	$role->save();
    	
    	$role = new Role();
        $role->name = 'Gestor Sistema';
        $role->slug = 'sysadmin';
        $role->save();

    	$role = new Role();
        $role->name = 'Chefe Regional';
        $role->slug = 'chefe-regional';
        $role->save();

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
