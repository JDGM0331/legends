<?php

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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/card', [App\Http\Controllers\DesingController::class, 'index']);


=======
Route::get('players/{id}', [App\Http\Controllers\GamePlayerController::class, 'players']);

Route::get('playersAjax/{id}', [App\Http\Controllers\GamePlayerController::class, 'playersAjax']);
>>>>>>> ad499dbc3b47afa1d2af15f4be352b58ffc79663
