<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupieController;
use App\Http\Controllers\BoxieController;
use App\Http\Controllers\ItemController;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->group(function () {
    Route::get('/v1/users/', 'index');
    Route::get('/v1/users/{id}', 'show');
    Route::post('/v1/users/', 'store');
    Route::put('/v1/users/{id}', 'update');
} );

Route::controller(GroupieController::class)->group(function () {
    Route::get('/v1/groupies', 'index');
    Route::get('/v1/groupies/{userid}', 'show');
    Route::post('/v1/groupies/', 'store');
    Route::put('/v1/groupies/{userid}', 'update');
});

Route::controller(BoxieController::class)->group(function () {
    Route::get('/v1/boxies', 'index');
    Route::get('/v1/boxies/{groupieid}', 'show');
    Route::post('/v1/boxies/', 'store');
    Route::put('/v1/boxies/{groupieid}', 'update');
});

Route::controller(ItemController::class)->group(function () {
    Route::get('/v1/items', 'index');
    Route::get('/v1/items/{boxieid}', 'show');
    Route::post('/v1/items/', 'store');
    Route::put('/v1/items/{boxieid}', 'update');
});
