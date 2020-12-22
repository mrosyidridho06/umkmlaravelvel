<?php

use App\Http\Controllers\TumkmController;
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

Route::get('/tes', function () {
    return'welcome mamang';
});

Route::get('/tumkm', [TumkmController::class,'index'])->name('indexpawb');
Route::get('/tumkm_input', [TumkmController::class,'create'])->name('input_tumkm');
Route::post('/tumkm_store', [TumkmController::class,'store'])->name('pawb_store');
Route::get('/tumkm_delete/{id}', [TumkmController::class,'destroy'])->name('delete_tumkm');