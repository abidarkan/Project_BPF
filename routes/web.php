<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

use App\Models\Article;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authenticated Routes
Route::group(['middleware' => 'auth'], function () {
    // Dashboard Home
    Route::get('/', [HomeController::class, 'home']);

    // Example Views
    Route::get('dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('artikel', fn() => view('artikel'))->name('artikel');
    Route::get('profile', fn() => view('profile'))->name('profile');
    Route::get('rtl', fn() => view('rtl'))->name('rtl');
    Route::get('tables', fn() => view('tables'))->name('tables');
    Route::get('virtual-reality', fn() => view('virtual-reality'))->name('virtual-reality');
    Route::get('static-sign-in', fn() => view('static-sign-in'))->name('sign-in');
    Route::get('static-sign-up', fn() => view('static-sign-up'))->name('sign-up');

    // User Profile Routes
    Route::get('/user-profile', [InfoUserController::class, 'create']);
    Route::post('/user-profile', [InfoUserController::class, 'store']);

    // Article Routes
    Route::get('articles/create', [ArtikelController::class, 'create'])->name('articles.create');
    Route::post('articles/store', [ArtikelController::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}', [ArtikelController::class, 'show'])->name('articles.show'); // Ensure this is the only route handling /articles/{id}

    // User Management Routes
    Route::get('user-management', fn() => view('laravel-examples/user-management'))->name('user-management');

    // Logout
    Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');
});

// Guest Routes
Route::group(['middleware' => 'guest'], function () {
    // Registration
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    // Login
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);

    // Password Reset
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

// Fallback Login View for Guests
Route::get('/login', fn() => view('session/login-session'))->name('login');
