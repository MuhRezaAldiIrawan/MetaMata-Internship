<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/tambahresep', [App\Http\Controllers\ResepController::class, 'index'])->name('tambahresep');
Route::post('/tambahresep', [App\Http\Controllers\ResepController::class, 'tambahresep'])->name('tambahresepbaru');
Route::get('/detailresep/{id}', [App\Http\Controllers\ResepController::class, 'detailresep'])->name('detailresep');
Route::post('/suka/{id}',[App\Http\Controllers\HomeController::class,'likePost'])->name('suka');