<?php

use App\Http\Controllers\CompletedTaskController;
use App\Http\Controllers\RemoveSessionController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 */

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::resource('/todo', TodoController::class)->except('index');

Route::PATCH('/todo/{todo}/complete', [CompletedTaskController::class, 'completeTheTask'])->name('todo.complete.update');
Route::get('/completed', [CompletedTaskController::class, 'showAllTaskThatCompleted'])->name('todo.complete.index');

// Route::post('/delete-session', [RemoveSessionController::class, 'deleteSessionData'])->name('session.delete');
// Route::get('/delete-data', [RemoveSessionController::class, 'deleteData'])->name('session.delete.data');
