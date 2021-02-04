<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController, MainController};

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
Route::get('register', [AuthController::class, 'register'])->name('regist');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('contact', [AuthController::class, 'contact'])->name('contact');
Route::get('forgot-password', [AuthController::class, 'forgotpass'])->name('forgotpass');
Route::get('dashboard', [MainController::class, 'index'])->name('dashboard');
Route::get('regist-id', [MainController::class, 'registid'])->name('registid');
Route::get('reset-password', [AuthController::class, 'resetpass'])->name('resetpass');
Route::get('about', [AuthController::class, 'about'])->name('about');
Route::get('landing-page', [AuthController::class, 'welcome'])->name('welcome');
Route::get('sign-id', [MainController::class, 'signid'])->name('signid');
Route::post('/create', [MainController::class, 'create'])->name('create');
Route::get('profile', [MainController::class, 'profile'])->name('profile');
