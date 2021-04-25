<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);

        $this->call(LokasiTableSeeder::class);

        $this->call(GoldarTableSeeder::class);

        $this->call(StockTableSeeder::class);

        $this->call(RSstockTableSeeder::class);
    }
}
