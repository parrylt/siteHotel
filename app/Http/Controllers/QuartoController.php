<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;

class QuartoController extends Controller
{
    public function showHome () {
        return view ("home");
    }

    public function showCadastroQuarto (Request $request){
        return view ("cadastroQuarto");
    }

    public function cadQuarto (Request $request){
        $dadosValidos = $request-> validate([
            'numero' => 'integer|required', 
            'tipo' => 'string|required',
            'valor' => 'decimal:8,2|required'
        ]);

        quarto::create($dadosValidos);
        return view ("home");
    }
}
