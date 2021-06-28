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
    Route::get('personal/info','UserController@personalInfo')->name('personal.info');
    Route::post('update/personal/info','UserController@UpdatePersonalInfo')->name('personal.info.update');


    Route::get('family/info','UserController@familyInfo')->name('family.info');
    Route::post('update/family/info','UserController@UpdateFamilyInfo')->name('family.info.update');
    Route::post('updateUserAccount','UserController@updateUserAccount')->name('user.update');
    Route::get('update/password','userController@showChangePassword')->name('password.show');
    Route::post('update/password','userController@updatePassword')->name('password.update');
    Route::get('show/users','userController@showUsers')->name('show.user');

    Route::get('show/profile/{id}','UserController@showProfile')->name('show.profile');

});



// broker routes

Route::get('register/broker','Auth\BrokerController@registerBroker')->name('broker.register');
/*Route::post('save/register/broker','Auth\BrokerController@registerBrokerSave')->name('broker.register.Save');*/
Route::get('login/broker','Auth\BrokerController@loginBroker')->name('broker.login');
Route::get('update/broker','BrokerController@updateBroker')->name('broker.update');


//Admin Routes


Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::post('logout','Auth\AdminLoginController@logout')->name('logout');
});


