<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Equipos;
use App\Http\Livewire\Materials;
use App\Http\Livewire\Obreros;
use App\Http\Livewire\Transportes;
//use App\Http\Livewire\Precios;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrecioController;

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

Route::get('equipos',Equipos::class)->name('equipos');
Route::get('materials',Materials::class)->name('materials');
Route::get('obreros',Obreros::class)->name('obreros');
Route::get('transportes',Transportes::class)->name('transportes');
//Route::get('precios', Precios::class)->name('precios');
Route::resource('precios', PrecioController::class)->names('precios');