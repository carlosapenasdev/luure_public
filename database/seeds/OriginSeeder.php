<?php

use App\Models\Management\Origin;
use Illuminate\Database\Seeder;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $origin = new Origin();
        $origin->name = 'Cmdo. Btl';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'Subcmdo. Btl';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'E.M. 1º BPM';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'CI';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'ARI';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'ALI';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'MP';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'Judiciário';
        $origin->save();

        $origin = new Origin();
        $origin->name = 'GAECO';
        $origin->save();
    }
}
