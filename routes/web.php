<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CommentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('inicio');
})->name('home');
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');
Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('comments.store');

Route::get('equipos', [EquipoController::class, 'index'])->name('equipos.index');
