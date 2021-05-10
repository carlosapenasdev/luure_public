<?php

use App\Models\Management\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gerenciarUsuarios          = new Permission();
        $gerenciarUsuarios->name    = 'Gerenciar usuarios';
        $gerenciarUsuarios->slug    = 'gerenciar-usuarios';
        $gerenciarUsuarios->save();

        $criarMissoes               = new Permission();
        $criarMissoes->name         = 'Criar missoes';
        $criarMissoes->slug         = 'criar-missoes';
        $criarMissoes->save();
    }
}
