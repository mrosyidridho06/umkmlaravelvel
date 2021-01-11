<?php

use App\Http\Controllers\TumkmController;
use Illuminate\Support\Facades\Route;
use app\http\Livewire\Posts;

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

Route::get('/register', function() // Mendaftarkan URL register
{
   return View::make('register');
});

Route::get('/edit', function() // Mendaftarkan URL register
{
   return View::make('edit');
});

Route::get('/login', function() // Mendaftarkan URL register
{
   return View::make('login');
});


Route::get('/tumkm', [TumkmController::class,'index'])->name('indexpawb');
Route::get('/tumkm_input', [TumkmController::class,'create'])->name('input_tumkm');
Route::post('/tumkm_store', [TumkmController::class,'store'])->name('pawb_store');
Route::get('/tumkm_delete/{id}', [TumkmController::class,'destroy'])->name('delete_tumkm');
Route::get('/editum/{id}',[TumkmController::class, 'edit'])->name('tumkm_edit');
Route::post('/tumkm_update/{id}',[TumkmController::class, 'update'])->name('tumkm_update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => [
    'auth:sanctum', 
    'verified',
]], function () {
    
    Route::get('/dashboard', function() {
    return view('dashboard');
    })->name('dashboard');

    Route::get('/pagetum', function() {
    return view('pagetum');
    })->name('pagetumk');

});