<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Salas;
use App\Models\Usuarios;
use App\Models\Conteudos;

class ConteudosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salas = Salas::pluck('id');
        $usuarios= Usuarios::where('type','=','0')->pluck('id');
        
        $faker = \Faker\Factory::create();

        foreach (range(1,10) as $index) {
            Conteudos::create([
            'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'descricao' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            'sala_id' => $faker->randomElement($salas),
            'created_by_user_id' => $faker->randomElement($usuarios),
            'data_inicio' => $faker->dateTime($max = 'now', $timezone = null),
            'data_fim' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
