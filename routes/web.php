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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/', [\App\Http\Controllers\aproposController::class,'index'])->name('apropos');

Route::get('/', [\App\Http\Controllers\avisController::class,'index'])->name('avis');

Route::get('/', [\App\Http\Controllers\blogController::class,'index'])->name('blog');

Route::get('/', [\App\Http\Controllers\contactController::class,'index'])->name('contact');

Route::get('/', [\App\Http\Controllers\tarifsController::class,'index'])->name('tarifs');