<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UsuariosTableSeeder;
use Database\Seeders\ClassesTableSeeder;
use Database\Seeders\DisciplinasTableSeeder;
use Database\Seeders\SalaTableSeeder;
use Database\Seeders\TrabalhosTableSeeder;
use Database\Seeders\ConteudosTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(DisciplinasTableSeeder::class);
        $this->call(SalaTableSeeder::class);
        $this->call(TrabalhosTableSeeder::class);
        $this->call(ConteudosTableSeeder::class);
    }
}