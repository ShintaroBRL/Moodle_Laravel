<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        Usuarios::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('toptal');

        Usuarios::create([
            'user' => 'Administrator',
            'pass' => $password,
            'type' => '-1',
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            Usuarios::create([
                'user' => $faker->firstName,
                'pass' => $password,
                'type' => $faker->numberBetween($min = -1, $max = 1),
            ]);
        }
    }
}
