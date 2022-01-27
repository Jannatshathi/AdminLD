<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryrController;


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
Route::get('/home',[LoginController::class,'home'])->name('home');
Route::get('/reg',[LoginController::class,'reg'])->name('regpost');
Route::post('/reg',[LoginController::class,'regpost'])->name('reg');
Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/do-login',[LoginController::class,'doLogin'])->name('doLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/gallery',[GalleryrController::class,'gallery'])->name('gallery');

