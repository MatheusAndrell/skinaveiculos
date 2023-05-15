<?php

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

Route::get('/', function () {
    return view('inicio');
});


Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/venda-carro', function () {
    return view('venda-carro');
})->name('venda-carro');

Route::get('/sobre-nos', function () {
    return view('sobre-nos');
})->name('sobre-nos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');
