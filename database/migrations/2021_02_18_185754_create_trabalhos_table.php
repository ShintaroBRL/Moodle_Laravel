<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhos', function (Blueprint $table) {
            $table->id();
            $table->text('titulo');
            $table->text('descricao');
            $table->foreignId('sala_id')->references('id')->on('salas');
            $table->foreignId('created_by_user_id')->references('id')->on('usuarios');
            $table->timestamp('data_inicio');
            $table->timestamp('data_fim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalhos');
    }
}
