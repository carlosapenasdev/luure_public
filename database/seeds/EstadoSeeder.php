<?php

use Illuminate\Database\Seeder;
use App\Models\Management\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$created_at = Carbon\Carbon::now();

    	$estados = [
    		['nome' => 'Acre', 'uf' => 'AC', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Alagoas', 'uf' => 'AL', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Amapá', 'uf' => 'AP', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Amazonas', 'uf' => 'AM', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Bahia', 'uf' => 'BA', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Ceará', 'uf' => 'CE', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Distrito Federal', 'uf' => 'DF', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Espírito Santo', 'uf' => 'ES', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Goiás', 'uf' => 'GO', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Maranhão', 'uf' => 'MA', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Mato Grosso do Sul', 'uf' => 'MS', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Mato Grosso', 'uf' => 'MT', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Minas Gerais', 'uf' => 'MG', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Paraná', 'uf' => 'PR', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Paraíba', 'uf' => 'PB', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Pará', 'uf' => 'PA', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Pernambuco', 'uf' => 'PE', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Piauí', 'uf' => 'PI', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Rio de Janeiro', 'uf' => 'RJ', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Rio Grande do Norte', 'uf' => 'RN', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Rio Grande do Sul', 'uf' => 'RS', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Rondônia', 'uf' => 'RO', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Roraima', 'uf' => 'RR', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Santa Catarina', 'uf' => 'SC', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Sergipe', 'uf' => 'SE', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'São Paulo', 'uf' => 'SP', 'created_at' => $created_at,'updated_at' => $created_at],
    		['nome' => 'Tocantins', 'uf' => 'TO', 'created_at' => $created_at,'updated_at' => $created_at], ];

    		Estado::insert($estados);
    	}
    }
