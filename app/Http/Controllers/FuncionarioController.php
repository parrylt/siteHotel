<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome () {
        return view ("home");
    }

    public function showCadastroFunci (Request $request){
        return view ("cadastroFuncionarios");
    }

    public function cadFunci (Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required', 
            'funcao' => 'string|required'
        ]);

        funcionario::create($dadosValidos);
        return view ("home");
    }

    public function gerenciarFunci (Request $request){
        return view ("gerenciarFunci");
    }
}
