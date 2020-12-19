<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = "times";
    protected $fillable = ['nome', 'modalidade', 'jogador1','jogador2','jogador3','jogador4','jogador5','jogador6',
    'jogador7','jogador8','jogador9','jogador10','idreserva','idusuario'];

    public function reservas() {
        return $this->hasMany("App\Reserva");
    }

}
