<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ShortenURLController as AdminShortenURLController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\ShortenURLController;
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
Route::middleware('guest')->get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::post('/', [ShortenURLController::class, 'store'])->name('home');
Route::get('/{url:short_code}', [ShortenURLController::class, 'redirectToOrginalUrl'])->name('redirectUrlTo');
Route::fallback(function () {
    return view('errors.404');
});
Route::middleware('auth')->prefix('auth')->name('admin.')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::get('short-urls', [AdminShortenURLController::class, 'index'])->name('shortUrl');
    Route::get('logout', LogoutController::class)->name('logout');
});
