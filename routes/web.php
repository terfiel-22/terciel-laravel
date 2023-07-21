<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Master\PostController;
use App\Http\Controllers\Admin\WebSettingController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Master\PageController;
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


// Guest Routes
Auth::routes();
Route::get('/', [FrontendController::class,'index']);
Route::get('/{category_slug}', [FrontendController::class,'viewCategory']);

// Admin Routes
Route::prefix('admin')->middleware('auth','withRole')->group(function () {
    Route::resource('web-settings', WebSettingController::class);
    Route::resource('categories', CategoryController::class);
});

// Master routes
Route::prefix('master')->middleware('auth','withRole')->group(function(){

    Route::get('/', [PageController::class, 'analytics']);
    Route::get('/profile', [PageController::class, 'profile']);
    Route::get('/profile/settings', [PageController::class, 'profileSettings']);
    Route::get('/chats', [PageController::class, 'chats']);
    Route::get('/tasks', [PageController::class, 'tasks']);
    Route::get('/calendar', [PageController::class, 'calendar']);

    Route::resource('posts', PostController::class);
});