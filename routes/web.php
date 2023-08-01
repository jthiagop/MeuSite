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

use App\Http\Controllers\PatrController;

Route::get('/', [PatrController::class, 'index']); /** index - mostra todos os registros  */
Route::get('/events/create', [PatrController::class, 'create']); /** create - mostrar o formulário para criar registro no banco */
Route::get('/events/{id}', [PatrController::class, 'show']); /** mostrar um dado específico  */
Route::post('/events',[PatrController::class, 'store']); /** sotre = enviar arquivos do banco */

Route::get('/dashboard', function () {
    return view('dashboard');
});