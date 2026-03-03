<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produit;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('produits', produit::class);
Route::get('/produits/create', [produit::class, 'create']);
Route::post('/produits/store', [produit::class, 'store']);

Route::get('/register', [UserController::class,'getRegister'])->name('register');
Route::get('/login', [UserController::class,'getLogin'])->name('login');
Route::get('/dashboard', [UserController::class,'getDashboard'])->name('dashboard');
Route::post('/register', [UserController::class,'register'])->name('register');

