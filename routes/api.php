<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function(){
    Route::post('registrar' , 'AutenticadorControlador@registrar');
    Route::post('login' , 'AutenticadorControlador@login');
    
    Route::middleware('auth:api')->group(function(){
        Route::post('logout' , 'AutenticadorControlador@logout');
        
    });
    
});

Route::middleware('auth:api')->group(function(){
    Route::get('evento' , 'EventoControlador@getAll');
    Route::get('evento-por-id/{id?}' , 'EventoControlador@getEventoById');
    Route::post('novo-evento' , 'EventoControlador@create');
    Route::put('editar-evento' , 'EventoControlador@update');
    Route::delete('deletar-evento' , 'EventoControlador@deleteEventoById');
    Route::get('evento-da-cidade/{cidade_id?}' , 'EventoControlador@eventosDaCidade');
    
    Route::get('cliente' ,'ClienteControlador@getAll');
    Route::get('cliente-por-id/{id?}' , 'ClienteControlador@getClienteById');
    Route::put('editar-cliente' , 'ClienteControlador@update');
    Route::delete('deletar-cliente' , 'ClienteControlador@delete');
    
    Route::get('ingresso' , 'IngressoControlador@getAll');
    Route::post('novo-ingresso' , 'IngressoControlador@create');
    Route::put('editar-ingresso' , 'IngressoControlador@update');
    Route::delete('deletar-ingresso' , 'IngressoControlador@deleteIngressoById');
    Route::post('ingresso-do-evento' , 'IngressoControlador@ingressosDoEvento');
    
});


