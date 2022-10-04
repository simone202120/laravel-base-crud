<?php

use Illuminate\Database\Seeder;
use App\comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti= config('comics');

        foreach ($fumetti as $fumetto){
            $nuovoFumetto = new comic();
            $nuovoFumetto->fill($fumetto);
            $nuovoFumetto-> save();
        }
    }
}
