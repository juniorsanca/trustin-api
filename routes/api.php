<?php

use App\Http\Controllers\CreatorController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

/*----------[PUBLIC ROUTES]----------*/
Route::post('/register', [UserController::class, 'register']);



/*----------[PRIVATE ROUTES]----------*/
Route::group(['middleware' => ['auth:sanctum']], function () {
/*-----------[GET ALL CREATORS]-----------*/
Route::get('creators', [CreatorController::class, 'index']);
/*-------------[GET ONE CREATOR]-------------*/
Route::get('/creators/{creator}', [CreatorController::class, 'show']);
/*-------------[SEARCH ONE CREATOR]-------------*/
Route::get('/creators/search/{name}', [CreatorController::class, 'search']);
/*-------------[LOGGOUT]-----------*/
Route::post('/logout', [UserController::class, 'logout']);

});