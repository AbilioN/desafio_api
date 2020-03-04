<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingresso extends Model
{
    public function ingressosDoEvento(){
        return $this->belongsTo('App/Evento');
    }
}
