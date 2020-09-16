<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\eventController;
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
// header('Access-Control-Allow-Origin:  *');
// header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization'); 



Route::middleware(['api','CORS'])->group( function () {
    Route::post('login', [AuthController::class , 'login'])->name('login');
    Route::post('register', [AuthController::class ,'register'])->name('register');
    Route::post('logout',  [AuthController::class ,'logout' ])->name('logout');
    Route::post('refresh', [AuthController::class ,'refresh'])->name('refresh');;
    Route::get('user-profile',  [AuthController::class, 'userProfile'])->name('me');
    Route::get('events',[eventController::class, 'showAll']);
});

