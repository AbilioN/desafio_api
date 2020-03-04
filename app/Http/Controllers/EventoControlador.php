<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoControlador extends Controller
{
    public function create(Request $request){
        $novoEvento = new Evento();
        $novoEvento->name = $request['name'];
        $novoEvento->descricao = $request['descricao'];
        $novoEvento->categoria_id = intval($request['categoria_id']);
        $novoEvento->data_evento = $request['data_evento'];
        $novoEvento->cidade_id = intval($request['cidade_id']);

        if($novoEvento->save()){
            return response()->Json([
                'res' => 'Evento cadastrado com sucesso'
            ]);
        }else{
            return response()->Json([
                'res' => 'Falha ao cadastrar evento'
            ]);
        }
    }

    public function getAll(Request $request){
        return response()->Json(Evento::all());
    }

    public function getEventoById(Request $request){
        $eventoById = Evento::find($request['id']);
        return response()->Json($eventoById);
    }

    public function update(Request $request){
        $UpdEvento = Evento::find($request['id']);
        $UpdEvento->name = $request['name'];
        $UpdEvento->descricao = $request['descricao'];
        $UpdEvento->categoria_id = intval($request['categoria_id']);
        $UpdEvento->data_evento = $request['data_evento'];
        $UpdEvento->cidade_id = intval($request['cidade_id']);
        $UpdEvento->save();

        return response()->Json($UpdEvento);
    }
    
    public function deleteEventoById(Request $request){
        $deleteEventoById = Evento::find($request['id']);
        $deleteEventoById->delete();
    }

   

    public function eventosDaCidade(Request $request){
        $eventosDaCidade = Evento::where('cidade_id', $request['cidade_id'])->get();
        return response()->Json($eventosDaCidade);
    }
}
