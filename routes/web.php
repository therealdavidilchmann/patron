<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'student'], function() {
    Route::get('/', [StudentController::class, 'dashboard']);
    Route::group(['prefix' => 'misses'], function() {
        Route::get('/', [StudentController::class, 'misses']);
        Route::get('/{id}', [StudentController::class, 'writeExcuse']);
    });
    Route::group(['prefix' => 'timetable'], function() {
        Route::get('/', [StudentController::class, 'timetable']);
        Route::get('/{id}', [StudentController::class, 'timetableDetail']);
    });
    Route::group(['prefix' => 'excuses'], function() {
        Route::get('/', [StudentController::class, 'excuses']);
        Route::get('/{id}', [StudentController::class, 'excuse']);
        Route::post('/store', [StudentController::class, 'store']);
    });
});
