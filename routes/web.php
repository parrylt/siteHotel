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

Route::get('/cadastroFuncionarios', [FuncionarioController::class, 'showCadastroFunci'])->name('show-formulario-funci');
Route::post('/cadastroFuncionarios', [FuncionarioController::class, 'cadFunci'])->name('envia-banco-funci');
Route::get('/gerenciarFuncionarios', [FuncionarioController::class, 'gerenciarFunci'])->name('gerenciar-funci');

Route::get('/cadastroQuarto', [QuartoController::class, 'showCadastroQuarto'])->name('show-formulario-quarto');
Route::post('/cadastroQuarto', [QuartoController::class, 'cadQuarto'])->name('envia-banco-quarto');
Route::get('/gerenciarQuarto', [QuartoController::class, 'gerenciarQuarto'])->name('gerenciar-quarto');

Route::get('/cadastroReserva', [ReservaController::class, 'showCadastroReserva'])->name('show-formulario-reserva');
Route::post('/cadastroReserva', [ReservaController::class, 'cadReserva'])->name('envia-banco-reserva');
Route::get('/gerenciarReserva', [ReservaController::class, 'gerenciarReserva'])->name('gerenciar-reserva');