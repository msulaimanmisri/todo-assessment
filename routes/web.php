<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::resource('/todo', TodoController::class)->except('index', 'destroy');
