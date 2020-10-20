<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 120);
            $table->string('modalidade', 100);           
            $table->string('endereco', 120);
            $table->string('numero', 10);
            $table->string('bairro', 100);
            $table->string('CEP', 9);
            $table->string('cidade',120);        
            $table->string('UF', 2);            
            $table->string('telefone', 15);
            $table->string('email', 120);            

            $table->string('horainiciosegunda', 5);
            $table->string('horafimsegunda', 5);
            $table->string('horainicioterca', 5);
            $table->string('horafimterca', 5);
            $table->string('horainicioquarta', 5);
            $table->string('horafimquarta', 5);
            $table->string('horainicioquinta', 5);
            $table->string('horafimquinta', 5);
            $table->string('horainiciosexta', 5);
            $table->string('horafimsexta', 5);
            $table->string('horainiciosabado', 5);
            $table->string('horafimsabado', 5);
            $table->string('horainiciodomingo', 5);
            $table->string('horafimdomingo', 5);           

            $table->string('observacao',500);
            $table->string('redesocial',500);
            $table->boolean('ativo');
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
        Schema::dropIfExists('quadras');
    }
}
