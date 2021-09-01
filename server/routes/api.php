<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\HobbyController;

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

Route::group(['prefix' => 'v1'], function () {
    Route::post('register', [AuthController::class, 'register']);

    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login']);
    });

    Route::group(['middleware' => ['jwt.verify']], function () {
        Route::prefix('auth')->group(function () {
            Route::post('logout', [AuthController::class, 'logout']);
            Route::get('user', [AuthController::class, 'user']);
        });

        Route::resource('developers', DeveloperController::class);
        Route::resource('hobbies', HobbyController::class);

        Route::get('config', function () {
            return response()->json([
                'timestamp' => now()
            ]);
        });
    });
});
