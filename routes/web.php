<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'home']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts-add', [PostController::class, 'create']);
Route::post('/posts-add', [PostController::class, 'store']);
Route::get('/posts-show/{id}', [PostController::class, 'show']);
Route::get('/posts-edit/{id}', [PostController::class, 'edit']);
Route::put('/posts-update/{id}', [PostController::class, 'update']);
Route::delete('/posts-destroy/{id}', [PostController::class, 'destroy']);
