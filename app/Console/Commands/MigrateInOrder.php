<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate_in_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execute the migrations in the order specified in the file app/Console/Comands/MigrateInOrder.php \n Drop all the table in db before execute the command.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       /** Specify the names of the migrations files in the order you want to 
        * loaded
        * $migrations =[ 
        *               'xxxx_xx_xx_000000_create_nameTable_table.php',
        *    ];
        */
        $migrations = [
            '2021_02_19_010748_create_sessions_table.php',
            '2021_02_18_185906_create_usuarios_table.php',
            '2021_02_18_185807_create_classes_table.php',
            '2021_02_18_185754_create_disciplinas_table.php',
            '2021_03_03_184106_create_salas_table.php',
            '2021_02_18_185820_create_conteudos_table.php',
            '2021_02_18_185754_create_trabalhos_table.php',
        ];

        $this->call('migrate:reset');

        foreach($migrations as $migration)
        {
           $path ='database/migrations/'.trim($migration);
           $this->call('migrate', [
            '--path' => $path ,
           ]);
        }
        $this->call('db:seed');
    }
} 