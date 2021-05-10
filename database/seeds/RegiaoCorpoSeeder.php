<?php

use Illuminate\Database\Seeder;
use App\Models\Management\RegiaoCorpo;

class RegiaoCorpoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$created_at = Carbon\Carbon::now();
    	
    	$regiao[] = ['name' => 'NAO DEFINIDO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'FACE DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'BRACO DIREITO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'BRACO ESQUERDO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'CRANIO (REGIAO)','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'FACE ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'BRACO - AMBOS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DEDOS MAO DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DEDOS MAO ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DEDOS - AMBAS MAOS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DEDOS PE DIREITO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DEDOS PE ESQUERDO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DEDOS - AMBOS PES','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'FACE - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'LABIO INFERIOR','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'LABIO SUPERIOR','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'LABIO - AMBOS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'MAMA DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'MAMA ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'MAMA - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'MAO DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'MAO ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'MAO - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'NADEGA DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'NADEGA ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'NADEGA - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'NARINA DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'NARINA ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'NARINA - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'ORELHA DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'ORELHA ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'ORELHA - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'ORGAO GENITAL','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PE DIREITO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PE ESQUERDO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PE - AMBOS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PERNA DIREITA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PERNA ESQUERDA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PERNA - AMBAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'PESCOCO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'QUEIXO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'TESTA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'DORSO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'TORAX','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'ABDOMEN','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'SOBRANCELHAS','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'LINGUA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'UMBIGO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'VIRILHA','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];
    	$regiao[] = ['name' => 'OMBRO','created_at' => $created_at,'updated_at' => $created_at,'sesp'=>1];

    	RegiaoCorpo::insert($regiao);
    }
}
