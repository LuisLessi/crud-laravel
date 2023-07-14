<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});
*/

/*Route::get('/jogos', function () {
    return "Curso Laravel";
});
*/

/*Route::view('/jogos', 'jogos',['name'=>'GTA']); */


/*Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
    return view('jogos',['idJogo'=>$id,'nomeJogo'=>$name]);
});
*/

/* Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
})->name('home');
*/

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}/update', [JogosController::class, 'update'])->name('jogos-update');
    Route::delete('/jogos/{id}', [JogosController::class, 'destroy'])->name('jogos-destroy');

});

Route::fallback(function () {
    return "Erro ao localizar a pagina";
});
