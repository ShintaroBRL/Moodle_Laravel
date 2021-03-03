<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disciplinas;

class DisciplinasTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $materias = array ('Matematica','Portugues','Ingles', 'Fisica','Historia','Geografia', 'Informatica', 'Filosofia', 'Quimica');
        for ($i = 0; $i < count($materias); $i++) {
            Disciplinas::create([
                'nome' => $materias[$i],
            ]);
        }
    }
}
