<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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


Route::group(['middleware' => 'auth'], function () {

    //route grafik
    Route::get('/grafik', [App\Http\Controllers\GrafikController::class, 'index']);

    //route tabel informasi tender
    Route::get('/list', [App\Http\Controllers\InformasiTenderController::class, 'index']);
    Route::get('/dashboard', [App\Http\Controllers\InformasiTenderController::class, 'beranda']);
    Route::get('/tender/export-pdf', [App\Http\Controllers\InformasiTenderController::class, 'exportpdf']);
    Route::get('/tender/export-excel', [App\Http\Controllers\InformasiTenderController::class, 'exportexcel']);

    //route tabel user
    Route::resource('/user', UserController::class);
    Route::get('/user/hapus/{id}', [App\Http\Controllers\UserController::class, 'hapus']);
    // Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
    // Route::get('/user/tambah{id}', [App\Http\Controllers\UserController::class, 'tambah']);
    

    
});
