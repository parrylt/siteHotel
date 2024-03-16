<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function showHome () {
        return view ("home");
    }

    public function showCadastro (Request $request){
        return view ("cadastroCliente");
    }

    public function cadCliente (Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required', 
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        cliente::create($dadosValidos);
        return view ("home");
    }

    public function mostrarGerenciarCliente (Cliente $id){
        return view ('xxxxx', ['registrosClientes' => $id]);
    }

    public function gerenciarCliente (Request $request){
        $dadosCliente = Cliente::query();
        $dadosCliente->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosCliente = $dadosCliente->get();
        
        return view ('gerenciarCliente', ['registrosClientes' => $dadosCliente]);

    }

    public function destroy(Cliente $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function alterarCliente(Cliente $id, Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required', 
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');

    }
}
