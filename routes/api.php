<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\LibUserController;
use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/lib_users', [LibUserController::class, 'index']);
Route::get('/lib_user/{id}', [LibUserController::class, 'show']);
Route::post('/lib_user', [LibUserController::class, 'store']);
Route::put('/lib_user/{id}', [LibUserController::class, 'update']);
Route::delete('/lib_user/{id}', [LibUserController::class, 'destroy']);

Route::get('books', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);
Route::post('/book', [BookController::class, 'store']);
Route::put('book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'destroy']);

Route::get('copies', [CopyController::class, 'index']);
Route::get('/copy/{id}', [CopyController::class, 'show']);
Route::post('/copy', [CopyController::class, 'store']);
Route::put('copy/{id}', [CopyController::class, 'update']);
Route::delete('/copy/{id}', [CopyController::class, 'destroy']);

Route::get('/lendings', [LendingController::class, 'index']);
Route::get('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'show']);
Route::post('/lending', [LendingController::class, 'store']);
Route::patch('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'update']);
Route::delete('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'destroy']);