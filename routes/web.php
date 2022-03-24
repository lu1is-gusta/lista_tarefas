<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Route::get('/login', function(){
    echo 'teste';
})->name('login'); */

Route::get('/', [TarefasController::class, 'index'])->name('pag.inicial');  

Route::get('/create', [TarefasController::class, 'create']);
Route::post('/create', [TarefasController::class, 'configCreate'])->name('add.tarefa');

Route::get('/update/{id}', [TarefasController::class, 'update']);
Route::post('/update/{id}', [TarefasController::class, 'configUpdate'])->name('editar.tarefa');

Route::get('/delete/{id}', [TarefasController::class, 'delete']);

Route::get('/marcar/{id}', [TarefasController::class, 'marcar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
