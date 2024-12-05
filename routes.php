<?php

use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Controllers\UserController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);

Route::get('/tech', [PublicController::class, 'tech']);

Route::get('/form', [PublicController::class, 'form']);

Route::post('/answer', [PublicController::class, 'answer']);

//admin - posts
Route::get('/admin/posts', [PostController::class, 'index']);
Route::get('/admin/posts/create', [PostController::class, 'create']);
Route::post('/admin/posts', [PostController::class, 'store']); //et vormi vastuseid näha
Route::get('/admin/posts/show', [PostController::class, 'show']);
Route::get('/admin/posts/edit', [PostController::class, 'edit']);
Route::post('/admin/posts/edit', [PostController::class, 'update']);
Route::get('/admin/posts/delete', [PostController::class, 'destroy']);



//admin - users
Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/users/create', [UserController::class, 'create']);
Route::post('/admin/users', [UserController::class, 'store']);
Route::get('/admin/users/show', [UserController::class, 'show']);
Route::get('/admin/users/edit', [UserController::class, 'edit']);
Route::post('/admin/users/edit', [UserController::class, 'update']);
Route::get('/admin/users/delete', [UserController::class, 'destroy']);
