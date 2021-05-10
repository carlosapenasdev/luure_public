<?php

use App\Models\Management\Role;
use App\Models\Gestao\Efetivo\User;
use App\Models\Management\Permission;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if(config('app.env') !== 'production')
    	{
    		$roles = Role::all();
    	}
    	else
    	{
    		$roles[] = Role::root();
    	}

    	foreach ($roles as $role)
    	{
    		$user              = new User();
    		
    		$user->email       = strtolower($role->name).'@pm.pr.gov.br';
    		$user->password    = bcrypt('123456');
    		$user->save();
    		$user->roles()->attach($role);
    	}
    }
}
