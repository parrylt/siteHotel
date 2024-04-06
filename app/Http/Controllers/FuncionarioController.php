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

    public function mostrarGerenciarFunciId(Funcionario $id){
        return view ('formularioAlterarFunci', ['registrosFuncionarios' => $id]);
    }

    public function gerenciarFunci (Request $request){
        $dadosFuncionarios = Funcionario::query();
        $dadosFuncionarios->when($request->nome,function($query,$valor){
            $query->where('nome','like','%'.$valor.'%');
        });
        $dadosFuncionarios = $dadosFuncionarios->get();
        
        return view ('gerenciarFunci', ['registrosFuncionarios' => $dadosFuncionarios]);

    }

    public function destroy(Funcionario $id){
        $id->delete();
        return Redirect::route('home');
    }

    public function alterarFunci(Funcionario $id, Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required', 
            'funcao' => 'string|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');

    }
}
