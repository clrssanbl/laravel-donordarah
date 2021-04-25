<?php

use App\Goldar;
use Illuminate\Database\Seeder;

class GoldarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Goldar::create([
            'goldar' => 'A'
        ]);

        Goldar::create([
            'goldar' => 'B'
        ]);

        Goldar::create([
            'goldar' => 'O'
        ]);

        Goldar::create([
            'goldar' => 'AB'
        ]);
    }
}
