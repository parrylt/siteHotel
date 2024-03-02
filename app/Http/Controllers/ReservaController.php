<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showHome () {
        return view ("home");
    }

    public function showCadastroReserva (Request $request){
        return view ("reserva");
    }

    public function cadReserva (Request $request){
        $dadosValidos = $request-> validate([
            'idcliente' => 'integer|required', 
            'idfuncionario' => 'integer|required', 
            'idquarto' => 'integer|required', 
            'situacao' => 'enum|required',
            'valorTotal' => 'double|required',
            'datasaida' => 'date|required',
            'dataentrada' => 'timestamp|required'
        ]);

        reserva::create($dadosValidos);
        return view ("home");
    }
}
