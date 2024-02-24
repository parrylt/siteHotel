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

}
