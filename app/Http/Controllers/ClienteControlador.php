<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    
    public function create(Request $request){
        $novoCliente = new Cliente();
        $novoCliente->name = $request['name'];
        $novoCliente->email = $request['email'];
        $novoCliente->password = bcrypt($request['password']);
        if($novoCliente->save()){
            return response()->Json([
                'res' => 'cliente criado com sucesso'
                ]);
        }else{
            return response()->Json([
                'res' => 'cliente nao pôde ser criado'
                ]);
        }
    }

    public function getAll(Request $request){
        return response()->Json(Cliente::all());
    }

    public function getClienteById(Request $request){
        $clienteById = Cliente::find($request['cliente_id']);
        return response()->Json($clienteById);
    }

    public function update(Request $request){
        $UpdCliente = Cliente::find($request['cliente_id']);
        $UpdCliente->name = $request['name'];
        $UpdCliente->email = $request['email'];
        $UpdCliente->password = bcrypt($request['password']);
        $UpdCliente->save();

        return response()->Json($UpdCliente);
    }

    public function delete(Request $request){
        $deleteClienteById = Cliente::find($request['cliente_id']);
        
        if($deleteClienteById->delete()){
            return response()->Json([
                'res' => 'cliente deletado com sucesso'
                ]);
        }else{
            return response()->Json([
                'res' => 'cliente nao pôde ser  deletado '
                ]);
        }
    }

}
