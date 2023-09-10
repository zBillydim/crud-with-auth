<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\VeiculoController;
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

/* INICIO ROTAS PUBLICAS */

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/register', [LoginController::class, 'register'])->name('register.submit');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('welcome');
})->name('login');

/* FIM ROTAS PUBLICAS */


/* INICIO ROTA AUTENTICADA */

Route::middleware(['auth'])->group(function () {

    /* INICIO VEICULO */
    Route::post('/createVehicle', [VeiculoController::class, 'create'])->name('create.vehicle');
    Route::get('/veiculo', [VeiculoController::class, 'index'])->name('cadastroveiculo');
    /* FIM VEICULO */


    /* INICIO PERFIL */
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
    Route::post('/change-password', [ClienteController::class, 'changePass']);
    /* FIM PERFIL*/



    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

/* FIM ROTA AUTENTICADA */
