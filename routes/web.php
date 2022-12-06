<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;


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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/admin/masteradmin', [AdminController::class, 'index']);
Route::get('/profile', function () {
    return view('userprofile');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/settings', [SettingController::class, 'settings']);

Route::post('/withdraw', [TransactionController::class, 'withdraw']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');
Route::post('/addfund', [TransactionController::class, 'fundAccount']);
