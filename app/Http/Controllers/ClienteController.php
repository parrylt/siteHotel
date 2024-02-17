<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function showHome () {
        return view ("home");
    }

    function showCadastro (Request $request){
        return view ("cadastroCliente");
    }
}
