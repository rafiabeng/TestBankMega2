<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminDashboardController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/admin/dashboard', 'App\Http\Controllers\AdminDashboardController@index');
//Route::post('/admin/dashboard', 'AdminDashboardController@store');
Route::get('/dashboard', 'App\Http\Controllers\UserDashboardController@index');
Route::get('/dashboard/info', 'App\Http\Controllers\UserDashboardController@infoindex');
Route::post('/dashboard/post', 'App\Http\Controllers\UserDashboardController@store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');