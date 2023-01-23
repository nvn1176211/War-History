<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LangController;

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



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/register', [RegisterController::class, 'index'])->name('user.regist.get');
Route::post('regist', [RegisterController::class, 'regist'])->name('user.regist');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'index'])->name('user.login.get');
Route::post('login', [LoginController::class, 'login'])->name('user.login');
Route::get('/event/{id}', [EventController::class, 'index']);
Route::get('/event/img/{imgName}', [EventController::class, 'downloadImg']);

Route::get('/search/{event}', [SearchController::class, 'search']);