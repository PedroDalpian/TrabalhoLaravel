<?php

use Illuminate\Database\Seeder;
use App\Modalidade;

class ModalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidade::create(['descricao' => 'Quadra FUTSAL']);
        Modalidade::create(['descricao' => 'Quadra FUTVOLÊI']);
        Modalidade::create(['descricao' => 'Quadra SOCIETY']);
        Modalidade::create(['descricao' => 'Quadra CAMPO']);
        Modalidade::create(['descricao' => 'Quadra VOLÊI']);
        Modalidade::create(['descricao' => 'Quadra TENNIS']);        
        Modalidade::create(['descricao' => 'Quadra BASQUETE']);
        Modalidade::create(['descricao' => 'Quadra HANDEBOL']);
        Modalidade::create(['descricao' => 'Quadra RUBGBY']);
        Modalidade::create(['descricao' => 'Quadra BASEBALL']);
        Modalidade::create(['descricao' => 'Quadra FUTEBOL AMERICANO']);
        Modalidade::create(['descricao' => 'Quadra MULTI ESPORTES']);
    }
}
