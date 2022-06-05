<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('home', [PostController::class, 'ViewData'] );

Route::get('home', [PostController::class, 'home'] );
// Route::get('create', [PostController::class, 'create'] );
Route::post('home', [PostController::class, 'insert'] );
Route::get('delete/id/{id}', [PostController::class,'destroy']);

// Route::get('home', [PostController::class, 'home']);
Route::get('edit/id/{id}', [PostController::class, 'edit']);
Route::post('update/id/{id}', [PostController::class, 'update']);


