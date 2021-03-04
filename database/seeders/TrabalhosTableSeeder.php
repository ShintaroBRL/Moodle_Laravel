<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\turmas;
use App\Models\Usuarios;
use App\Models\Trabalhos;

class TrabalhosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turmas = turmas::pluck('id');
        $usuarios= Usuarios::where('type','=','0')->pluck('id');
        
        $faker = \Faker\Factory::create();

        foreach (range(1,10) as $index) {
            Trabalhos::create([
            'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'descricao' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'turma_id' => $faker->randomElement($turmas),
            'created_by_user_id' => $faker->randomElement($usuarios),
            'data_inicio' => $faker->dateTime($max = 'now', $timezone = null),
            'data_fim' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
