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
            'numeroquarto' => 'integer|required', 
            'tipoquarto' => 'string|required',
            'valordiaria' => 'numeric|required'
        ]);
       
        quarto::create($dadosValidos);
        return view ("home");
    }

    public function mostrarGerenciarQuarto(Quarto $id){
        return view ('xxxxx', ['registrosQuartos' => $id]);
    }

    public function gerenciarQuarto (Request $request){
        $dadosQuartos = Quarto::query();
        $dadosQuartos->when($request->numeroquarto,function($query,$valor){
            $query->where('numeroquarto','like','%'.$valor.'%');
        });
        $dadosQuartos = $dadosQuartos->get();
        
        return view ('gerenciarQuarto', ['registrosQuartos' => $dadosQuartos]);

    }

    public function destroy(Quarto $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function alterarQuarto(Quarto $id, Request $request){
        $dadosValidos = $request-> validate([
            'numeroquarto' => 'integer|required', 
            'tipoquarto' => 'string|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');

    }
}
