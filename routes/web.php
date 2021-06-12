<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {
    Route::get('createUserAccount','UserController@createUserAccount')->name('create.user.account');
    Route::post('updateUserAccount','UserController@updateUserAccount')->name('user.update');
});


//Admin Routes


Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::post('logout','Auth\AdminLoginController@logout')->name('logout');
});


