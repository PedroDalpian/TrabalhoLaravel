<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";
    protected $fillable = ['responsavel','horainicioreserva','horafimreserva','datareserva','time_id','quadra_id'];


    public function time() {
        return $this->belongsTo("App\Time");
    }

    public function quadra() {
        return $this->belongsTo("App\Quadra");
    }

}
