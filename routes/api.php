<?php

use App\Http\Controllers\api\auth\LoginController;
use App\Http\Controllers\api\auth\LogoutController;
use App\Http\Controllers\api\public\PublicShortenURLController;
use App\Http\Controllers\api\ShortenURLController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/urls', [ShortenURLController::class, 'index']);
    Route::delete('/urls/{short_code}', [ShortenURLController::class, 'delete']);
    Route::post('/logout', LogoutController::class);
});
Route::post('login', LoginController::class);
Route::post('create-shortUrl', PublicShortenURLController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
