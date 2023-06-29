<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('profile', App\Http\Controllers\ProfileController::class)->name('profile');
Route::resource('employees', App\Http\Controllers\EmployeeController::class);

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);




Route::post('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.reset');
Route::get('/password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');



