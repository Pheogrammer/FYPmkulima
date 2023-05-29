<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\SMSandUSSDController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AdminMiddleware;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Administrator Section



Route::group(['middleware' => 'admin'], function () {
    Route::get('/settings',[HomeController::class,'settings'])->name('settings');
    Route::get('/agencies',[AgencyController::class,'index'])->name('agencies');
    Route::get('users',[UsersController::class,'index'])->name('users');
});

//
