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
    return view('index');
});

Route::get('aboutUs', function (){
    return view('partials.aboutUs');
});

Route::get('contact', function (){
    return view('partials.contact');
});

Route::get('help', function (){
    return view('partials.help');
});

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {

    Route::prefix('account')->name('account.')->group( function () {
        Route::get('/','UserController@showAccount')->name('index');

        Route::get('personal','UserController@showPersonalInfo')->name('personal');
        Route::post('personal/save','UserController@savePersonalInfo')->name('personal.save');

        Route::get('location','UserController@showLocationInfo')->name('location');
        Route::post('location/save','UserController@saveLocationInfo')->name('location.save');

        Route::get('family','UserController@showFamilyInfo')->name('family');
        Route::post('family/save','UserController@saveFamilyInfo')->name('family.save');

        Route::get('education','UserController@showEducationInfo')->name('education');

        Route::get('job','UserController@showJobInfo')->name('job');
        Route::post('job/save','UserController@saveJobInfo')->name('job.save');

        Route::get('gallery','UserController@showGalley')->name('gallery');

        Route::get('social','UserController@showSocialInfo')->name('social');
        Route::post('social/save','UserController@saveSocialInfo')->name('social.save');

        Route::get('checklist','UserController@showChecklistInfo')->name('checklist');
        Route::post('checklist/save','UserController@saveChecklistInfo')->name('checklist.save');

        Route::get('privacy','UserController@showPrivacySettings')->name('privacy');
        Route::get('change/password', 'UserController@showChangePasswordForm')->name('show.change.password');
        Route::post('update/password','UserController@updatePassword')->name('password.update');

        Route::get('settings','UserController@showSettings')->name('settings');
        Route::post('settings/save','UserController@saveSettings')->name('settings.save');
    });

});

// broker routes
Route::get('broker/auth','Auth\BrokerController@showAuthForms')->name('broker.show.auth');
/*Route::post('save/register/broker','Auth\BrokerController@registerBrokerSave')->name('broker.register.Save');*/
/*Route::get('login/broker','Auth\BrokerController@loginBroker')->name('broker.login');
Route::get('update/broker','BrokerController@updateBroker')->name('broker.update');*/

//backend Routes
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('login.submit');
    Route::post('logout','Auth\AdminLoginController@logout')->name('logout');

    // change password
    Route::match(['get', 'post'], 'change/password', 'AdminController@changePassword')->name('change.password');

    // users routes
    Route::get('users/requests', 'Admin\UserController@requests')->name('users.requests');
    Route::get('users/requests/accept/{user}', 'Admin\UserController@accept')->name('users.requests.accept');
    Route::get('users/requests/reject/{user}', 'Admin\UserController@reject')->name('users.requests.reject');
    Route::get('users/blocked', 'Admin\UserController@blocked')->name('users.blocked');
    Route::get('users/deleted', 'Admin\UserController@deleted')->name('users.deleted');
    Route::resource('users', 'Admin\UserController');
});


