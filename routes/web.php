<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\userReportsController;
use App\Http\Controllers\users\UsersController;
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
    return view('home');
})->name('home');

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/graphical', [userReportsController::class, 'graphical'])->name('graphical');
    Route::get('/excelSheet', [userReportsController::class, 'excelSheet'])->name('excelSheet');
    Route::post('/exportUsers', [userReportsController::class, 'exportUsers'])->name('exportUsers');
});

Route::resource('users',  UsersController::class);