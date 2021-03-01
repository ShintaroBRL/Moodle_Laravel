<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UsuariosTableSeeder;

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
    }
}