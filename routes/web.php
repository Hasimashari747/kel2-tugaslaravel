<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\dashboardcontroller;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/buku', function () {
    return view('buku', [
        "title" => "Buku"
    ]);
});



Route::get('/login', [logincontroller::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [logincontroller::class, 'authenticate']);
Route::post('/logout', [logincontroller::class, 'logout']);

Route::get('/register', [registercontroller::class, 'index']);

Route::get('/dashboard', [dashboardcontroller::class, 'index'])->middleware('auth');
    
