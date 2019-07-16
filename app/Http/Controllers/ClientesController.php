<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Session;
use Redirect;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::get();
        return view('clientes.lista', ['clientes' => $clientes]);
    }

    public function novo(){
        return view('clientes.novo');
    }

    public function salvar(Request $request){
        $cliente = new Cliente();

        $cliente->create($request->all());

        session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');
        
        return Redirect::to('clientes/novo');
    }

    public function editar($id){
            $cliente = Cliente::findOrFail($id);

            return view('clientes.novo', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        session::flash('mensagem_sucesso', 'Cliente alterado com sucesso!');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    public function excluir($id){
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();

        session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');

        return Redirect::to('clientes');
    }
}
