<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::redirect('/', '/list-tasks');

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'register']);

Route::get('/user', [UserController::class, 'register']);

Route::get('/list-tasks', [UserController::class, 'listTasks']);
