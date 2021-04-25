<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'test',
            'email'=> 'test@123.com',
            'password'=> bcrypt('test1234'),
        ]);

        User::create([
            'name'=> 'admin',
            'email'=> 'admin@123.com',
            'password'=> bcrypt('admin123'),
            'role'=> 'admin',
        ]);

        User::create([
            'name'=> 'rs',
            'email'=> 'rs@123.com',
            'password'=> bcrypt('rumahsakit'),
            'role'=> 'rs',
        ]);

        User::create([
            'name'=> 'rs2',
            'email'=> 'rs2@123.com',
            'password'=> bcrypt('rumahsakit'),
            'role'=> 'rs',
        ]);
    }
}
