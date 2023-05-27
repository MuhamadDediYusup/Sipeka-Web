<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('home');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/petunjuk', [\App\Http\Controllers\HomeController::class, 'petunjuk'])->name('petunjuk.index');
    Route::get('/tentang', [\App\Http\Controllers\HomeController::class, 'tentang'])->name('tentang.index');
    Route::get('/pengembang', [\App\Http\Controllers\HomeController::class, 'pengembang'])->name('pengembang.index');
    Route::get('/diagnosa', [\App\Http\Controllers\DiagnosaController::class, 'index'])->name('diagnosa.index');
    Route::post('/diagnosa/result', [\App\Http\Controllers\DiagnosaController::class, 'result'])->name('diagnosa.result');
    Route::get('/rulebase', [\App\Http\Controllers\HomeController::class, 'rulebase'])->name('rulebase.index');
});
