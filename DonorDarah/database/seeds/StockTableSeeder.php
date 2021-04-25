<?php

use App\Stock;
use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'goldarid' => 1,
            'stockdarah' => 15,
        ]);

        Stock::create([
            'goldarid' => 2,
            'stockdarah' => 15,
        ]);

        Stock::create([
            'goldarid' => 3,
            'stockdarah' => 15,
        ]);

        Stock::create([
            'goldarid' => 4,
            'stockdarah' => 15,
        ]);
    }
}
