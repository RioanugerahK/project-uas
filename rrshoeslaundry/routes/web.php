<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/create1', function () {
    return view('create1');
});

Route::post('/create1',[LaundryController::class,'store']);

Route::get('/create2', function () {
    return view('create2');
});

Route::post('/create2',[LaundryController::class,'store']);

Route::get('/create3', function () {
    return view('create3');
});

Route::post('/create3',[LaundryController::class,'store']);


Route::get('/edit', function () {
    return view('edit');
});

Route::get('/index',[LaundryController::class,'index'])->name('index');
Route::get('/index/{id}',[LaundryController::class,'destroy'])->name('destroy');


Route::get('/show', function () {
    return view('show');
});