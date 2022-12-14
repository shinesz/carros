<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CaminhaoController;
use App\Http\Controllers\CarrosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[HomeController::class,'MostrarHome'])->name('home');
Route::get('/editar-caminhao',[CaminhaoController::class,'MostrarEditarCaminhao'])->name('editar-caminhao');
Route::get('/cadastrar-caminhao',[CaminhaoController::class,'FormularioCadastro'])->name('cadastrar-caminhao');
Route::post('/cadastrar-caminhao',[CaminhaoController::class,'SalvarBanco'])->name('salvar-banco');
Route::get('/editar-carro',[CarrosController::class,'MostrarEditarCarro'])->name('editar-carro');
Route::get('/cadastrar-carro',[CarrosController::class,'FormularioCadastroCarro'])->name('cadastrar-carro');
Route::post('/cadastrar-carro',[CarrosController::class,'SalvarBancoCarro'])->name('salvar-banco-carro');


Route::put('/editar/{id}',[CarrosController::class, 'update']);

Route::delete('/editar/{id}',[CarrosController::class, 'destroy']);

Route::get('/editar/{id}',[CarrosController::class, 'edit']);