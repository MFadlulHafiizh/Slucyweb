<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('registid', 'HomeController@registid')->name('registid');
Route::get('signid', 'HomeController@signid')->name('signid');
Route::get('/getpower', 'HomeController@getPower')->name('getpower');
Route::put('/setTime/{id}', 'HomeController@setTime')->name('setTime');
Route::put('/up/{id}', 'HomeController@up')->name('up');
Route::post('/day/{id}', 'HomeController@day')->name('day');

Route::get('profile', 'HomeController@profile')->name('profile');
Route::get('editPassword', 'HomeController@editPassword')->name('editPassword');
Route::post('store', 'HomeController@store')->name('store');
Route::post('/switch', 'HomeController@switch')->name('switch');
Route::get('changePower', 'HomeController@changePower');
Route::get('getDays', 'HomeController@getDays');

Route::put('/out/{id}', 'HomeController@out')->name('out');
Route::put('/in', 'HomeController@in')->name('in');
Route::put('/editProfile', 'HomeController@editProfile')->name('editProfile');
Route::put('/updatePassword', 'HomeController@updatePassword')->name('updatePassword');

