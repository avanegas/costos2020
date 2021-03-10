<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Equipos;
use App\Http\Livewire\Materials;
use App\Http\Livewire\Obreros;
use App\Http\Livewire\Transportes;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrecioController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\ServicioController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('equipos',Equipos::class)->name('equipos');
Route::get('materials',Materials::class)->name('materials');
Route::get('obreros',Obreros::class)->name('obreros');
Route::get('transportes',Transportes::class)->name('transportes');

Route::resource('precios', PrecioController::class)->only('index', 'show')->names('precios');
Route::resource('proyectos', ProyectoController::class)->only('index', 'show')->names('proyectos');
Route::resource('ofertas', OfertaController::class)->only('index', 'show')->names('ofertas');
Route::resource('servicios', ServicioController::class)->only('index', 'show')->names('servicios');

Route::get('file-import-export', [PrecioController::class, 'fileImportExport']);
Route::post('file-import', [PrecioController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [PrecioController::class, 'fileExport'])->name('file-export');