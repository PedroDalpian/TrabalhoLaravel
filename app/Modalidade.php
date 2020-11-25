<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $table = "modalidades";
    protected $fillable = ['descricao'];

    public function quadras() {
        return $this->hasMany("App\Quadra");
    }

}
