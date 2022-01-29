<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;
use App\Http\Controllers\SomaController;

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

Route::get('/', function () {
    //logger()->info('Alguém acessou o site');
    //logger()->debug('Alguém acessou o site');
    //logger()->error('O usuário tentou acessar ');
    return view('welcome');
});

Route::get('/soma/{num1}/{num2}', [SomaController::class, 'soma']);

Route::get('/sub/{num1}/{num2}', [SubController::class, 'sub']);