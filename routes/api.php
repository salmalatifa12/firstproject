<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('book/create', [BookController::class, 'createbook'] );
Route::get('/book/get/{id}', [BookController::class, 'showBookById']);
Route::post('/book/update/{id}', [BookController::class, 'updateBook']);
Route::delete('/book/delete/{id}', [BookController::class, 'deleteBook']);

