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
    Route::get('/v1/users/', 'indexUser');
    Route::get('/v1/users/{id}', 'showUser');
    Route::post('/v1/users/', 'storeUser');
    Route::put('/v1/users/{id}', 'updateUser');
} );

Route::controller(GroupieController::class)->group(function () {
    Route::get('/v1/groupies', 'indexGroupie');
    Route::get('/v1/groupies/{userid}', 'showGroupie');
    Route::post('/v1/groupies/', 'storeGroupie');
    Route::put('/v1/groupies/{userid}', 'updateGroupie');
});

Route::controller(BoxieController::class)->group(function () {
    Route::get('/v1/boxies', 'indexBoxie');
    Route::get('/v1/boxies/{groupieid}', 'showBoxie');
    Route::post('/v1/boxies/', 'storeBoxie');
    Route::put('/v1/boxies/{groupieid}', 'updateBoxie');
});

Route::controller(ItemController::class)->group(function () {
    Route::get('/v1/items', 'indexItem');
    Route::get('/v1/items/{boxieid}', 'showItem');
    Route::post('/v1/items/', 'storeItem');
    Route::put('/v1/items/{boxieid}', 'updateItem');
});
