<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class DropTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'drop:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando deletar todas as tabelas da Base de dados (Cuidado em ambiente de produção)';

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
            #if (!$this->confirm('CONFIRMA ELIMINAR TODAS AS TABELAS NO BANCO DE DADOS ATUAL? [y|N]')) {
            #    exit('Comando Drop Tables abortado');
            #}

            $pdo = \DB::connection('mysql')->getPdo();

            $tables = $pdo
            ->query("SHOW FULL TABLES;")
            ->fetchAll();

            $sql = 'SET FOREIGN_KEY_CHECKS=0;';

            foreach ($tables as $tableInfo) {
        // truncate tables only
                if('BASE TABLE' !== $tableInfo[1])
                    continue;

                $name = $tableInfo[0];
                $sql .= 'DROP TABLE ' . $name . ';';
                $this->info('Dropping table ' . $name);
            }

            $sql .= 'SET FOREIGN_KEY_CHECKS=1;';

            $pdo->exec($sql);
        }
        else
        {
            exit('Comando Drop Tables não pode ser realizado no ambiente de produção');
        }
    }
}
