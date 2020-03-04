<?php

namespace App\Http\Controllers;

use App\Ingresso;
use Illuminate\Http\Request;

class IngressoControlador extends Controller
{
    public function create(Request $request){
        $novoIngresso = new Ingresso();
        $novoIngresso->evento_id = intval($request['evento_id']);
        $novoIngresso->zona_id = intval($request['zona_id']);
        $novoIngresso->tipo_id = intval($request['tipo_id']);
        $novoIngresso->preco = floatval($request['preco']);
        
        if($novoIngresso->save()){
            return response()->Json([
                'res' => 'Novo ingresso cadastrado com sucesso'
                ]);
            }else{
                return response()->Json([
                    'res' => 'erro em adicionar ingresso'
                    ]);
                }
            }
            
    public function getAll(Request $request){
        return response()->Json(Ingresso::all());
    }

    public function getIngressoById(Request $request){
        $IngressoById = Ingresso::find($request['id']);
        return response()->Json($IngressoById);
    }
    public function update(Request $request){
        $UpdIngresso = Ingresso::find($request['id']);
        $UpdIngresso->evento_id = intval($request['evento_id']);
        $UpdIngresso->zona_id = intval($request['zona_id']);
        $UpdIngresso->tipo_id = intval($request['tipo_id']);
        $UpdIngresso->preco = floatval($request['preco']);
        $UpdIngresso->save();

        return response()->Json($UpdIngresso);
    }


    public function deleteIngressoById(Request $request){
        
        $deleteIngressoById = Ingresso::find($request['id']);
        if($deleteIngressoById->delete()){
            return response()->Json([
                'res' => 'ingresso deletado com sucesso'
                ]);
        }else{
                return response()->Json([
                    'res' => 'ingresso nao pôde ser deletado'
                    ]);
            }
    }

   public function ingressosDoEvento(Request $request){
       $ingressosDoEvento = Ingresso::where('evento_id',$request['evento_id'])->get();
       return response()->Json($ingressosDoEvento);
   }
            
}
        