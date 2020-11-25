<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quadra extends Model
{
    protected $table = "quadras";
    protected $fillable = ['nome','modalidade_id','telefone','email','endereco','bairro','numero','CEP','UF','cidade','observacao','redesocial',
    'horainiciosegunda','horainicioterca','horainicioquarta','horainicioquinta','horainiciosexta','horainiciosabado','horainiciodomingo',
    'horafimsegunda','horafimterca','horafimquarta','horafimquinta','horafimsexta','horafimsabado','horafimdomingo','ativo'];

public function modalidade() {
    return $this->belongsTo("App\Modalidade");
}

}
