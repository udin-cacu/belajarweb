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
    return view('splash.index');
});


/*Contoh Program Diagram*/
use App\Http\Controllers\PenjualanController;

Route::get('/diagram', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/data', [PenjualanController::class, 'getData'])->name('penjualan.data');
/*Belajar*/
Route::get('/belajar', [PenjualanController::class, 'getbelajar'])->name('penjualan.belajar');

/*Contoh SPK SAW*/
use App\Http\Controllers\SawController;

Route::get('/spk-saw', [SawController::class, 'index'])->name('spk-saw.index');



Auth::routes();

Route::group(['middleware' => 'auth'], function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*ROUTE USERS*/
Route::middleware(['auth', 'role:1'])->group(function () {

Route::get('/datapelatihan', [App\Http\Controllers\PelatihansController::class, 'index'])->name('index');

});

/*ROUTE USERS*/
Route::middleware(['auth', 'role:2'])->group(function () {

});


});
