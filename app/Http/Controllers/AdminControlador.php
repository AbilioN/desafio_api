<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControlador extends Controller
{
    public function index(){

        return response()->Json([
        ['id' => 1 , 'nome'=>'adm','idade'=> '28'],
        ['id' => 2 , 'nome'=>'adm2','idade'=> '18'],
        ['id' => 3 , 'nome'=>'adm3','idade'=> '38'],
        ['id' => 4 , 'nome'=>'adm4','idade'=> '48']
        ]);
    }
}
