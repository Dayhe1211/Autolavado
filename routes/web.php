<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\ClientLoginController;

Route::get('/', [ClientController::class, 'index'])->name('client.services');

Route::get('/carrito', [ClientController::class, 'showCart'])->name('client.cart.show');
Route::post('/carrito/agregar/{service}', [ClientController::class, 'addToCart'])->name('client.cart.add');
Route::post('/carrito/eliminar/{id}', [ClientController::class, 'removeFromCart'])->name('client.cart.remove');
Route::get('/carrito/agendar', [ClientController::class, 'proceedToAppointment'])->name('client.cart.proceed');

Route::get('/client/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
Route::post('/client/login', [ClientLoginController::class, 'login'])->name('client.login.submit');
Route::post('/client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');

Route::resource('services', ServiceController::class);

Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
