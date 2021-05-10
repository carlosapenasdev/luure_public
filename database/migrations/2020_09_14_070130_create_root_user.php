<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use  App\Models\Management\Role;

use  App\Models\Gestao\Efetivo\User;

class CreateRootUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	$role = Role::root();
    	$root = $role->users;
    	
    	if($root->count() == 0)
    	{
    		$user              = new User();
    		
    		$user->email       = 'carlos.santos00@pm.pr.gov.br';
    		$user->password    = bcrypt('123456');
    		$user->save();
    		$user->roles()->attach($role);
    	}
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
