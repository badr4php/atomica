<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'posts'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::controller(PostController::class)->group(function () {
        Route::get('posts', 'index')->name('posts.index');
        Route::post('posts', 'store')->name('posts.store');
        Route::get('posts/create', 'create')->name('posts.create');
        Route::get('posts/{post}', 'show')->name('posts.show');
        Route::get('posts/{post}/edit', 'edit')->name('posts.edit');
        Route::put('posts/{post}', 'update')->name('posts.update');
    });
});

require __DIR__.'/auth.php';
