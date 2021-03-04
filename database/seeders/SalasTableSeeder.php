<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Turmas;
use App\Models\Usuarios;
use App\Models\Salas;

class SalasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $turmas = Turmas::pluck('id');
        $alunos = Usuarios::where('type','=','1')->pluck('id');

        $faker = \Faker\Factory::create();

        foreach ($alunos as $aluno) {
            Salas::create([
            'turma_id' => $faker->randomElement($turmas),
            'usuario_id' => $aluno
            ]);
        }
    }
}
