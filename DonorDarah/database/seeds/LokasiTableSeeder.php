<?php

use App\Lokasi;
use Illuminate\Database\Seeder;

class LokasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lokasi::create([
            'nama'=> 'PDD Fatmawati',
            'alamat'=> 'Jl Fatmawati',
        ]);

        Lokasi::create([
            'nama'=> 'PDD Pondok Labu',
            'alamat'=> 'Jl Pondok Labu, sebrang 34',
        ]);        

        Lokasi::create([
            'nama'=> 'PDD Cinere',
            'alamat'=> 'Jalan Markisa',
        ]);
    }
}
