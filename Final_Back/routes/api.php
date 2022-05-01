<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
    Route::post('/register', [AuthController::class, "userRegister"]);

    Route::post('/login', [AuthController::class, "login"]);

    Route::group([
        'middleware' => 'jwt.auth'
    ], function () {
        Route::post('/logout', [AuthController::class, "logout"]);
        Route::get('/profile', [AuthController::class, 'profile']);
        Route::get('/users', [UserController::class, 'allUsers']);
        Route::get('/users/{id}', [UserController::class, 'userByID']);
    });
});
