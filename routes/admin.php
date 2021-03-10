<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ZonaController;
use App\Http\Controllers\Admin\GroupController;

use App\Http\Controllers\Admin\ProyectoController;
use App\Http\Controllers\Admin\PrecioController;

use App\Http\Controllers\Admin\OfertaController;
use App\Http\Controllers\Admin\ServicioController;

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\UserController;

Route::get('', [HomeController::class,'index'])->middleware('can:admin.home')->name('admin.home');
Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('admin.users');
Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');
Route::resource('permissions', PermissionController::class)->except('show')->names('admin.permissions');

Route::resource('zonas', ZonaController::class)->except('show')->names('admin.zonas');
Route::resource('groups', GroupController::class)->except('show')->names('admin.groups');
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');

Route::resource('proyectos', ProyectoController::class)->except('show')->names('admin.proyectos');
Route::resource('precios', PrecioController::class)->except('show')->names('admin.precios');

Route::resource('ofertas', OfertaController::class)->except('show')->names('admin.ofertas');
Route::resource('servicios', ServicioController::class)->except('show')->names('admin.servicios');

Route::post('/comments/store', [CommentController::class,'store'])->name('comment.add');
Route::post('/reply/store', [CommentController::class,'replyStore'])->name('reply.add');