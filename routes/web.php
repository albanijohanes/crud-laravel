<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
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

Route::controller(PageController::class)->group(function(){
    Route::get('', 'welcome')->name('welcome');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginPost')->name('login.post');
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerPost')->name('register.post');
});

Route::middleware('auth')->group(function(){
    Route::get('main', [PageController::class, 'main'])->name('main');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function(){
        Route::get('main', 'index')->name('main');
        Route::get('main', 'create')->name('mahasiswa.create');
        Route::post('main', 'store')->name('mahasiswa.store');
        Route::get('main/{id}', 'show')->name('mahasiswa.show');
        Route::get('main/{id}', 'edit')->name('mahasiswa.edit');
        Route::put('main/{id}', 'update')->name('mahasiswa.update');
        Route::delete('main/{id}', 'destroy')->name(('mahasiswa.destroy'));
    });
});