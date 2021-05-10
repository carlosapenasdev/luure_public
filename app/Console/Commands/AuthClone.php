<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class AuthClone extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:clone';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando utilizado apenas para testes, serve para deixar todos os users com mesmo password do Root';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
    	parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    	if (!\App::environment('production'))
    	{
    		$pdo = \DB::connection('mysql')->getPdo();

    		$password = $pdo
    		->query("select password from users where id = 1")
    		->fetchAll();

    		if(count($password) > 0)
    		{
    			$password = $password[0]['password'];
    			$pdo->exec("UPDATE `users` SET `password` = '{$password}'");
    		}


    		echo 'auth:clone ended'.PHP_EOL;

    	}
    	else
    	{
    		exit('Comando Auth Clone não pode ser realizado no ambiente de produção');
    	}
    }
}
