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

//Route::get('/login', 'LoginController@__construct')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'HomeController@profile');
Route::get('/users', 'HomeController@Users');



Route::get('/admins', 'HomeController@Admins');

Route::get('/addUser', 'HomeController@addUser');
Route::get('/addAdmin', 'HomeController@addAdmin');
Route::get('/userDetails', 'UserController@userDetails');
Route::get('/medical', 'UserController@showMedical');
Route::get('/adminDetails', 'AdminController@adminDetails');