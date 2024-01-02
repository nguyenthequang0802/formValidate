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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'post'], function () {
    Route::get('/', [PostController::class, 'index'])->name("post.index");
    Route::get('/add', [PostController::class, 'create'])->name("post.add");
    Route::post('/add', [PostController::class, 'store'])->name("post.store");
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name("post.edit");
    Route::post('/edit/{id}', [PostController::class, 'update'])->name("post.update");
    Route::get('/delete/{id}', [PostController::class, 'destroy'])->name("post.destroy");
});
