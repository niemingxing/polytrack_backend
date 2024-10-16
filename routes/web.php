<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '{locale?}', 'where' => ['locale' => implode('|', config('app.locales'))], 'middleware' => 'set_locale'], function () {
    Route::get('/update', [HomeController::class, 'update']);
    Route::get('/promotion', [HomeController::class, 'promotion']);
    Route::get('/about', [HomeController::class, 'about']);
});

Route::get('/update', [HomeController::class, 'update']);
Route::get('/promotion', [HomeController::class, 'promotion']);
Route::get('/about', [HomeController::class, 'about']);