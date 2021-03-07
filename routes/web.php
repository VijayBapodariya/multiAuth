<?php

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

Route::get('/home', 'HomeController@index')->name('home');
// prefix is use to url before admin like admin/create
//namespace is use to path Admin/dashboradController to 
// as is use to admin.dashboard and auther.dashboard
Route::group(['as' => 'Admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'Admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['as' => 'Auther.', 'prefix' => 'auther', 'namespace' => 'Auther', 'middleware' => ['auth', 'Auther']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
