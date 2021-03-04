<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;
use Illuminate\Support\Str;

class UsuariosTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $faker = \Faker\Factory::create();
        $password = Hash::make('toptal');

        Usuarios::create([
            'user' => 'Admin',
            'pass' => 'toptal',
            'type' => '-1',
            'token' => Str::random(60)
        ]);

        for ($i = 0; $i < 50; $i++) {
            Usuarios::create([
                'user' => $faker->firstName,
                'pass' => 'toptal',
                'type' => $faker->numberBetween($min = -1, $max = 1),
                'token' => Str::random(60),
            ]);
        }
    }
}
