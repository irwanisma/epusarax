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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

//Route::get('daftar/majlis', [App\Http\Controllers\PenetapanController::class, 'daftarMajlis'])->name('daftarMajlis');
Route::group(['prefix' => 'daftar'], function () {
    // Routes that belong to the 'admin' group

    Route::get('majlis', [App\Http\Controllers\PenetapanController::class, 'daftarMajlis'])->name('daftarMajlis');
    Route::get('kawasan', [App\Http\Controllers\PenetapanController::class, 'daftarMajlis'])->name('daftarKawasan');
    Route::get('seksyen', [App\Http\Controllers\PenetapanController::class, 'daftarMajlis'])->name('daftarSeksyen');
    Route::get('sub-seksyen', [App\Http\Controllers\PenetapanController::class, 'daftarMajlis'])->name('daftarSubSeksyen');
    Route::get('unit-kubur', [App\Http\Controllers\PenetapanController::class, 'daftarMajlis'])->name('daftarUnitKubur');
    //Route::get('users', 'AdminController@users');
    //Route::post('users', 'AdminController@saveUser');
});