<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index']) ->name('home');

Route::get('/estoque', [PageController::class, 'estoque']) ->name('estoque');

Route::get('visualizar/{slug}', [PageController::class, 'visualizar'])->name('visualizar');

Route::get('/sobre-nos', function () {
    return view('sobre-nos');
})->name('sobre-nos');

Route::get('/veiculo', function () {
    return view('veiculo');
})->name('veiculo');

/**
 * Contato
 */
Route::get('/contato', [ContatoController::class, 'index'])->name('contato.index');

Route::post('/contato/', [ContatoController::class, 'store'])->name('contato.store');
/******/