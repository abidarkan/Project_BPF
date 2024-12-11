<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Models\Article;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\DiscussionCommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group 
| which contains the "web" middleware group. Now create something great!
|
*/

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Dashboard Home
    Route::get('/', [HomeController::class, 'home'])->name('home');

    // Example Views
    Route::get('/dashboard', function () {
        $articles = Article::all();
        return view('dashboard', compact('articles'));
    })->name('dashboard');

    Route::get('artikel', function () {
        $articles = Article::all();
        return view('artikel', compact('articles'));
    })->name('artikel.index');

    Route::get('profile', fn() => view('profile'))->name('profile');
    Route::get('rtl', fn() => view('rtl'))->name('rtl');
    Route::get('diskusi', fn() => view('diskusi'))->name('diskusi');
    Route::get('virtual-reality', fn() => view('virtual-reality'))->name('virtual-reality');
    Route::get('static-sign-in', fn() => view('static-sign-in'))->name('sign-in');
    Route::get('static-sign-up', fn() => view('static-sign-up'))->name('sign-up');

    // User Profile Routes
    Route::get('/user-profile', [InfoUserController::class, 'create'])->name('user-profile');
    Route::post('/user-profile', [InfoUserController::class, 'store']);

    // Article Routes
    Route::get('artikel/create', [ArtikelController::class, 'create'])->name('artikel.create'); // Show create article form
    Route::post('artikel/store', [ArtikelController::class, 'store'])->name('artikel.store'); // Store new article
    Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show'); // Show article by ID

    // User Management Routes
    Route::get('user-management', fn() => view('laravel-examples/user-management'))->name('user-management');

    // Logout
    Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');

    // Route Diskusi
    Route::resource('discussions', DiscussionController::class);
    Route::post('discussion-comments', [DiscussionCommentController::class, 'store'])->name('discussion-comments.store');
    Route::get('diskusi', [DiscussionController::class, 'index'])->name('diskusi.index');
    Route::get('showDiskusi/{id}', [DiscussionController::class, 'show'])->name('discussions.show');
    Route::get('createDiskusi', [DiscussionController::class, 'create'])->name('discussions.create');
});

// Guest Routes
Route::middleware('guest')->group(function () {
    // Registration
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);

    // Login
    Route::get('/login', [SessionsController::class, 'create'])->name('login');
    Route::post('/session', [SessionsController::class, 'store']);

    // Password Reset
    Route::get('/login/forgot-password', [ResetController::class, 'create'])->name('password.request');
    Route::post('/forgot-password', [ResetController::class, 'sendEmail'])->name('password.email');
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

// Fallback Login View for Guests
Route::get('/login-fallback', fn() => view('session/login-session'))->name('login-fallback');
