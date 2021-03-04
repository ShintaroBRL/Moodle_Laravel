<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Turmas;
use App\Models\Usuarios;
use App\Models\Disciplinas;
use App\Models\Classes;

class TurmasTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $classes = Classes::pluck('id');
        $professores= Usuarios::where('type','=','0')->pluck('id');
        $disciplinas= Disciplinas::pluck('id');

        $faker = \Faker\Factory::create();

        foreach ($professores as $professor) {
            Turmas::create([
            'professor_id' => $professor,
            'classe_id' => $faker->randomElement($classes),
            'disciplina_id' => $faker->randomElement($disciplinas)
            ]);
        }

    }
}
