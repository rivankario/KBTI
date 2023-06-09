<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesanController;

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

Route::get('/home', function () {
    return view('homepage');
});

Route::post('/pemesanan', [PesanController::class,'pemesanan']);

//Route::get('/form-pemesanan'.[PesanController::class,'form_pemesanan']);

Route::get('/room', function () {
    return view('room');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/room', function () {
    return view('room');
});
