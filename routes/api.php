<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiV1Controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ApiV1Controller::class)->group(function () {
    // Users
    Route::get('/v1/users/', 'indexUser');
    Route::get('/v1/users/{id}', 'showUser');
    Route::post('/v1/users/', 'storeUser');
    Route::put('/v1/users/{id}', 'updateUser');
    // Groupies
    Route::get('/v1/groupies', 'indexGroupie');
    Route::get('/v1/groupies/{userid}', 'showGroupie');
    Route::post('/v1/groupies/', 'storeGroupie');
    Route::put('/v1/groupies/{userid}', 'updateGroupie');
    // Boxies
    Route::get('/v1/boxies', 'indexBoxie');
    Route::get('/v1/boxies/{groupieid}', 'showBoxie');
    Route::post('/v1/boxies/', 'storeBoxie');
    Route::put('/v1/boxies/{groupieid}', 'updateBoxie');
    // Items
    Route::get('/v1/items', 'indexItem');
    Route::get('/v1/items/{boxieid}', 'showItem');
    Route::post('/v1/items/', 'storeItem');
    Route::put('/v1/items/{boxieid}', 'updateItem');
});
