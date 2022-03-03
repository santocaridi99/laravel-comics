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
    // prendo dati con config da comics
    $data = config('comics');
    // ritorno array associativo con chiave data che corrisponde a $data
    return view('home',compact('data'));
})->name('home');
