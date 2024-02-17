<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    function showHome () {
        return view ("home");
    }

    function showCadastroFunci (Request $request){
        return view ("cadastroFuncionarios");
    }
}
