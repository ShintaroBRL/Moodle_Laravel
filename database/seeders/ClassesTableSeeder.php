<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classes;

class ClassesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {

            $turma = strtoupper($faker->randomLetter);
            $serie = $faker->numberBetween($min = 1, $max = 3);
            $ensino = $faker->randomElement($array = array ('Medio','Fundamental','Infantil'));

            Classes::create([
                'descricao' => $serie."° ".$turma." E".$ensino[0],
                'turma' => $turma,
                'serie' => $serie,
                'ensino' => $ensino,
                'ano' => date("Y"),
            ]);
        }
    }
}
