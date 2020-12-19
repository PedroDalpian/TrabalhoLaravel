<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('responsavel', 100); 
            $table->string('modalidade', 100);           
            $table->string('jogador1', 100);
            $table->string('jogador2', 100);
            $table->string('jogador3', 100);
            $table->string('jogador4', 100);
            $table->string('jogador5', 100);       
            $table->string('jogador6', 100);            
            $table->string('jogador7', 100);
            $table->string('jogador8', 100);
            $table->string('jogador9', 100);
            $table->string('jogador10', 100);

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
        Schema::dropIfExists('times');
    }
}
