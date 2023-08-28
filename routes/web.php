<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DowozController;
use App\Http\Controllers\ZamowienieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('stronagl');
});

Route::get('/', function () {
    return view('stronagl');
})->name('stronagl');

Route::get('/Onas', function () {
    return view('Onas');
})->name('Onas');

Route::get('/Dostawa',[DowozController::class, 'index'])->name('Dostawa');
Route::post('/Dostawa',[DowozController::class, 'dodaj']);
Route::delete('/Dostawa/{dowoz}',[DowozController::class, 'usun'])->name('Dostawa.usun');

Route::get('/Info', function () {
    return view('Info');
})->name('Info');

Route::get('/Zamow',[\App\Http\Controllers\ZamowienieController::class, 'index'])->name('Zamow');
Route::post('/Zamow',[\App\Http\Controllers\ZamowienieController::class, 'store']);

Route::get('/gdzie', [\App\Http\Controllers\DowozController::class,'gdzie'])->name('gdzie');


Route::get('/Loginin', [\App\Http\Controllers\LoginController::class, 'index'])->name('Loginin');
Route::post('/Loginin', [\App\Http\Controllers\LoginController::class, 'login']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/Logout', [\App\Http\Controllers\LogoutController::class, 'index'])->name('Logout');
Route::post('/Logout', [\App\Http\Controllers\LogoutController::class, 'logout']);