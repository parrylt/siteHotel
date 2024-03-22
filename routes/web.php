<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/home", [ClienteController::class,'showHome'])->name('home');

Route::get('/cadastroCliente', [ClienteController::class, 'showCadastro'])->name('show-formulario-cadastro');
Route::post('/cadastroCliente', [ClienteController::class, 'cadCliente'])->name('envia-banco-cliente');
Route::get('/gerenciarCliente', [ClienteController::class, 'gerenciarCliente'])->name('gerenciar-cliente');
Route::get('/alterar-cliente', [ClienteController::class, 'mostrarGerenciarClienteId'])->name('mostrar-cliente');
Route::put('/alterar-cliente{id}', [ClienteController::class,'alterarClienteBanco'])->name('alterar-cliente');
Route::delete('/apagaCliente{id}', [ClienteController::class, 'destroy'])->name('apaga-cliente');




Route::get('/cadastroFuncionarios', [FuncionarioController::class, 'showCadastroFunci'])->name('show-formulario-funci');
Route::post('/cadastroFuncionarios', [FuncionarioController::class, 'cadFunci'])->name('envia-banco-funci');
Route::get('/gerenciarFunci', [FuncionarioController::class, 'gerenciarFunci'])->name('gerenciar-funci');
Route::get('/alterar-funcionario', [FuncionarioController::class, 'mostrarGerenciarFunciId'])->name('mostrar-funci');
Route::put('/alterar-funcionario{id}', [FuncionarioController::class,'alterarFunciBanco'])->name('alterar-funci');
Route::delete('/apagaFuncionario{id}', [FuncionarioController::class, 'destroy'])->name('apaga-funci');




Route::get('/cadastroQuarto', [QuartoController::class, 'showCadastroQuarto'])->name('show-formulario-quarto');
Route::post('/cadastroQuarto', [QuartoController::class, 'cadQuarto'])->name('envia-banco-quarto');
Route::get('/gerenciarQuarto', [QuartoController::class, 'gerenciarQuarto'])->name('gerenciar-quarto');
Route::get('/alterar-quarto', [QuartoController::class, 'mostrarGerenciarQuartoId'])->name('mostrar-quarto');
Route::put('/alterar-quarto{id}', [QuartoController::class,'alterarQuartoBanco'])->name('alterar-quarto');
Route::delete('/apagaQuarto{id}', [QuartoController::class, 'destroy'])->name('apaga-quarto');




Route::get('/cadastroReserva', [ReservaController::class, 'showCadastroReserva'])->name('show-formulario-reserva');
Route::post('/cadastroReserva', [ReservaController::class, 'cadReserva'])->name('envia-banco-reserva');
Route::get('/gerenciarReserva', [ReservaController::class, 'gerenciarReserva'])->name('gerenciar-reserva');



