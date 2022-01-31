<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {return view('welcome');});
Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::post('/todo', [TestController::class, 'createTodo']); /*　Todoの追加処理　20220127　*/
Route::get('/todo/update', [TestController::class, 'updateTodo']);
Route::post('/todo/update', [TestController::class, 'updateTodo']);

/*ここから下　追加　20220131*/
Route::get('/', [App\Http\Controllers\TestController::class, 'index'])->name('update');
Route::get('/todo/update', [App\Http\Controllers\TestController::class, 'updateTodo'])->name('data.show');
Route::post('/todo/update', [App\Http\Controllers\TestController::class, 'updateTodo'])->name('data.create');