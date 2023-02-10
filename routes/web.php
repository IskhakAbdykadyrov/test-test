<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ShowController;
use App\Models\Product;
use App\Models\State;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/products/{id}', [ShowController::class, 'show1'])->name('show');

Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/create', [CreateController::class, 'create']);

Route::post('/create', [CreateController::class, 'add']);

Route::post('/comments/store', [CommentController::class, 'store'])->name('comment-store');


