<?php

use App\Models\Management\Thematic;
use Illuminate\Database\Seeder;

class ThematicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thematic = new Thematic();
        $thematic->motif = 'Análise Criminal';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'Público Interno';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'Manifestações';
        $thematic->save();
        
        $thematic = new Thematic();
        $thematic->motif = 'Invasões';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'ORCRIM';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'Administrativo';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'Porte Arma de Fogo';
        $thematic->save();
        
        $thematic = new Thematic();
        $thematic->motif = 'Aquisição Arma de Fogo';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'Pesquisa Social';
        $thematic->save();

        $thematic = new Thematic();
        $thematic->motif = 'Viaturas';
        $thematic->save();
        
        $thematic = new Thematic();
        $thematic->motif = 'Escalas';
        $thematic->save();
    }
}
