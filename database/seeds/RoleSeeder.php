<?php

use App\Models\Management\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root = new Role();
        $root->name = 'Root';
        $root->slug = 'root';
        $root->save();

        $chefe = new Role();
        $chefe->name = 'Chefe';
        $chefe->slug = 'chefe';
        $chefe->save();

        $adjunto = new Role();
        $adjunto->name = 'Adjunto';
        $adjunto->slug = 'adjunto';
        $adjunto->save();

        $adm = new Role();
        $adm->name = 'Administrativo';
        $adm->slug = 'administrativo';
        $adm->save();

        $analista = new Role();
        $analista->name = 'Analista';
        $analista->slug = 'analista';
        $analista->save();

        $elo = new Role();
        $elo->name = 'Elo';
        $elo->slug = 'elo';
        $elo->save();
    }
}
