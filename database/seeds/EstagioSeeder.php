<?php

use Illuminate\Database\Seeder;
use App\Models\Protocolo\Estagio;
use App\Models\Management\Role;
class EstagioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$estagio = new Estagio();
    	$estagio->nome = 'Chefia';
    	$estagio->slug = 'chefia';
    	$estagio->ordem = 1;
    	$estagio->interativo = 0;
    	$estagio->save();
    	
    	$role = Role::chefe();

    	$role->estagios()->attach($estagio);
    	$role = Role::adjunto();
    	$role->estagios()->attach($estagio);



    	$estagio = new Estagio();
    	$estagio->nome = 'Analista';
    	$estagio->slug = 'analista';
    	$estagio->ordem = 2;
    	$estagio->interativo = 0;
    	$estagio->save();
    	
    	$role = Role::analista();
    	$role->estagios()->attach($estagio);



    	$estagio = new Estagio();
    	$estagio->nome = 'Elo';
    	$estagio->slug = 'elo';
    	$estagio->ordem = 3;
    	$estagio->interativo = 0;
    	$estagio->save();

    	$role = Role::elo();
    	$role->estagios()->attach($estagio);

    	$estagio 		= new Estagio();
    	$estagio->nome 	= 'Administrativo';
    	$estagio->slug 	= 'administrativo';
    	$estagio->ordem = 4;
    	$estagio->interativo = 0;
    	$estagio->save();

    	$role = Role::administrativo();
    	$role->estagios()->attach($estagio);
    	$role = Role::adjunto();
    	$role->estagios()->attach($estagio);


    	$estagio = new Estagio();
    	$estagio->nome          = 'Finalizado';
    	$estagio->slug          = 'finalizado';
    	$estagio->ordem         = 5;
    	$estagio->interativo = 1;
    	$estagio->save();

    	$role 			= Role::root();
    	$role->estagios()->attach($estagio);
    	$role 			= Role::chefe();
    	$role->estagios()->attach($estagio);
    	$role 			= Role::adjunto();
    	$role->estagios()->attach($estagio);
    	$role 			= Role::administrativo();
    	$role->estagios()->attach($estagio);
    	$role 			= Role::analista();
    	$role->estagios()->attach($estagio);
    	$role 			= Role::elo();
    	$role->estagios()->attach($estagio);


    }
}
