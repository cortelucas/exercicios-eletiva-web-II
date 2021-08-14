<?php

use App\Http\Controllers\Exercicio1Controller;
use App\Http\Controllers\Exercicio2Controller;
use App\Http\Controllers\Exercicio3Controller;

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
    return view('index');
});

Route::get('/exe_01', [Exercicio1Controller::class, 'index']);
Route::post('/exe_01_res', [Exercicio1Controller::class, 'resultado']);

Route::get('/exe_02', [Exercicio2Controller::class, 'index']);
Route::post('/exe_02_res', [Exercicio2Controller::class, 'resultado']);

Route::get('/exe_03', [Exercicio3Controller::class, 'index']);
Route::post('/exe_03_res', [Exercicio3Controller::class, 'resultado']);

Route::get('/exe_04', [Exercicio4Controller::class, 'index']);
Route::post('/exe_04_res', [Exercicio4Controller::class, 'resultado']);

Route::get('/exe_05', [Exercicio5Controller::class, 'index']);
Route::post('/exe_05_res', [Exercicio5Controller::class, 'resultado']);
