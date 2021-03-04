<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Salas;
use App\Models\Usuarios;
use App\Models\Disciplinas;
use App\Models\Classes;

class SalaTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $classes = Classes::pluck('id');
        $usuarios= Usuarios::pluck('id');
        $professores= Usuarios::where('type','=','0')->pluck('id');
        $disciplinas= Disciplinas::pluck('id');

        $faker = \Faker\Factory::create();

        foreach (range(1,10) as $index) {
            Salas::create([
            'professor_id' => $faker->randomElement($professores),
            'classe_id' => $faker->randomElement($classes),
            'usuario_id' => $faker->randomElement($usuarios),
            'disciplina_id' => $faker->randomElement($disciplinas)
            ]);
        }

    }
}
