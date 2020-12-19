<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = "times";
    protected $fillable = ['nome', 'responsavel','modalidade', 'jogador1','jogador2','jogador3','jogador4','jogador5','jogador6',
    'jogador7','jogador8','jogador9','jogador10'];

    public function reservas() {
        return $this->hasMany("App\Reserva");
    }

}
