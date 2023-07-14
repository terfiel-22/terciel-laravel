<?php

use App\Http\Controllers\Admin\AdminPagesController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::prefix('admin')->group(function () {
    // Dashboard
    Route::get('/', [AdminPagesController::class, 'analytics']);
    Route::get('/ecommerce', [AdminPagesController::class, 'ecommerce']);
    Route::get('/crypto', [AdminPagesController::class, 'crypto']);

    // Pages
    Route::get('/settings', [AdminPagesController::class, 'settings']);
    Route::get('/projects', [AdminPagesController::class, 'projects']);
    Route::get('/clients', [AdminPagesController::class, 'clients']);
    Route::get('/orders', [AdminPagesController::class, 'orders']);
    Route::get('/pricing', [AdminPagesController::class, 'pricing']);
    Route::get('/chats', [AdminPagesController::class, 'chats']);
    Route::get('/blank', [AdminPagesController::class, 'blank']);

    Route::get('/profile', [AdminPagesController::class, 'profile']);
    Route::get('/invoice', [AdminPagesController::class, 'invoice']);
    Route::get('/tasks', [AdminPagesController::class, 'tasks']);
    Route::get('/calendar', [AdminPagesController::class, 'calendar']);
});