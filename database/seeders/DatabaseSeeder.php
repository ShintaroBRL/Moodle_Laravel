<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UsuariosTableSeeder;
use Database\Seeders\ClassesTableSeeder;
use Database\Seeders\DisciplinasTableSeeder;
use Database\Seeders\SalaTableSeeder;

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
    }
}