<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::get('/{todo}', [TodoController::class, 'show'])->name('single-todo');
Route::delete('/{todo}', [TodoController::class, 'destroy']);
Route::get('/{todo}/edit', [TodoController::class, 'edit'])->name('todo-edit');
Route::patch('/{todo}/edit', [TodoController::class, 'update']);
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo-create');
Route::post('/todo/create', [TodoController::class, 'store']);