<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UsersController::class)->only([
    'index', 'edit', 'update'
]);;
Route::post('/users/{id}/update', [UsersController::class,'update'])
    ->middleware('auth');
