<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public function ingressos(){
        return $this->hasMany('App\Ingresso');
    }
}
