<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Management\Role;

class ChangeRolesTableAddAnalistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	$role = new Role();
    	$role->name = 'Chefe Subseção';
    	$role->slug = 'chefe-subsecao';
    	$role->save();

    	$role = new Role();
    	$role->name = 'Analista Subseção';
    	$role->slug = 'analista-subsecao';
    	$role->save();

    	$role 		= Role::where('slug', 'analista')->first();
    	$role->name = 'Analista Local';
    	$role->slug = 'analista-local';
    	$role->save();

    	$role = new Role();
    	$role->name = 'Analista Regional';
    	$role->slug = 'analista-regional';
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
