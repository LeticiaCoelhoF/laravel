<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
Route::get('/teste', [App\Http\Controllers\Principal::class, 'teste']);
Route::get('/conectar', [App\Http\Controllers\Usuario::class, 'conectar']);
Route::get('/desconectar', [App\Http\Controllers\Usuario::class, 'desconectar']);

Route::get('/inicio', [App\Http\Controllers\Inicio::class, 'inicio'])->name('pagina-inicial');
Route::get('/adocao', [App\Http\Controllers\Adocao::class, 'adocao'])->name('adocao');
Route::get('/animais', [App\Http\Controllers\Animais::class, 'animais'])->name('pagina-inicial')->name('animais');
Route::get('/login', [App\Http\Controllers\Login::class, 'login'])->name('pagina-inicial');
Route::get('/detalhesAnimal', [App\Http\Controllers\DetalhesAnimal::class, 'detalhesAnimal'])->name('detalhesAnimal');
Route::get('/listarAnimais', [App\Http\Controllers\ListarAnimais::class, 'listarAnimal'])->name('listar-animais');

Route::get('/registro', [App\Http\Controllers\Registro::class, 'registro'])->name('registro');
Route::post('/registro', [App\Http\Controllers\Registro::class, 'criarConta'])->name('registro');

Route::get('/addAnimal', [App\Http\Controllers\AddAnimal::class, 'addAnimal'])->name('add-animal');
Route::post('/addAnimal', [App\Http\Controllers\AddAnimal::class, 'addAnimal'])->name('add-animal');


