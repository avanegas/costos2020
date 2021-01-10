<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ZonaController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;


Route::get('', [HomeController::class,'index'])->name('admin.home');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');
Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('zonas', ZonaController::class)->names('admin.zonas');
Route::resource('groups', GroupController::class)->names('admin.groups');
Route::resource('permissions', PermissionController::class)->names('admin.permissions');
Route::resource('roles', RoleController::class)->names('admin.roles');
