<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class RolesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    	Blade::directive('role', function ($userRole)
    	{
    		$roles  = explode('|', $userRole);
    		$if     = [];

    		foreach ($roles as $key => $mrole)
    		{
    			$mrole = str_replace("'", '', $mrole);
    			$if[] = " auth()->user()->hasRole('{$mrole}') ";
    		}

    		return "<?php if(auth()->check() && (".implode('||', $if).")) { ?>";
    	});

    	Blade::directive('unlessrole', function ($userRole)
    	{
    		$roles  = explode('|', $userRole);
    		$if     = [];

    		foreach ($roles as $key => $mrole)
    		{
    			$mrole = str_replace("'", '', $mrole);
    			$if[] = " !auth()->user()->hasRole('{$mrole}') ";
    		}

    		return "<?php if(auth()->check() && (".implode('&&', $if).")) { ?>";
    	});

    	Blade::directive('endunlessrole', function ($role){
    		return "<?php } ?>";
    	});

    	Blade::directive('endrole', function ($role){
    		return "<?php } ?>";
    	});

    	Blade::directive('br2nl', function ($string) {
    		return "<?php echo preg_replace('/\\n/i', '<br />', $string); ?>";
    	});
    }
}