<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\productB;

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('/', [CustomAuthController::class, 'home'])->name('home'); 
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Tables
Route::get('/product', [productB::class, 'index'])->name("product");
Route::post('/product', [productB::class, 'store'])->name("products.store");
Route::get('/product/buy', [productB::class, 'index1'])->name("products.buy");
Route::get('/product/create', [productB::class, 'create'])->name("products.create");
Route::post('/product/{product}', [productB::class, 'update'])->name("products.update");
Route::delete('/product/{product}', [productB::class, 'destroy'])->name("products.destroy");
Route::get('/product/{product}/edit', [productB::class, 'edit'])->name("products.edit");