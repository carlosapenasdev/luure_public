<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(RoleSeeder::class);
    	$this->call(PermissionSeeder::class);
    	$this->call(UserSeeder::class);
    	$this->call(ThematicSeeder::class);
    	$this->call(OriginSeeder::class);
    	$this->call(DocumentoTipoSeeder::class);    
    	$this->call(DocumentoNumeroSeeder::class);    
    	$this->call(EstagioSeeder::class);    
    	$this->call(EstatisticaSeeder::class);    
    	$this->call(EfetivoSeeder::class);    
    	$this->call(EstabelecimentoPrisionalSeeder::class);    
    	$this->call(FaccaoCriminosaSeeder::class);    
    	$this->call(NaturezaCrimeSeeder::class);    
    	$this->call(AmbienteSeeder::class);    
    	$this->call(CidadeIbgeSeeder::class);    
    }
}
