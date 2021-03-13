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
//creating the URL links/site paths for a non logged in user (basic view)
Route::get('/home','App\http\Controllers\navController@home')->name('home')->middleware('guest');
Route::get('/login','App\http\Controllers\AuthController@login')->name('login')->middleware('guest');
Route::get('/signup','App\http\Controllers\navController@signupform')->middleware('guest');

//sending the created user to the database to be stored
Route::post('/signup', 'App\http\Controllers\UserController@saveUser')->name('createuser');

Route::post('/login', 'App\http\Controllers\AuthController@signin')->name('signin');
Route::get('/logout', 'App\http\Controllers\AuthController@logout')->name('logout');

//creating the URL links/site paths for a logged in user (advanced view)[members]
Route::get('/members/home','App\http\Controllers\LoggedInController@home') ->name('members_home');
Route::get('/members/planner','App\http\Controllers\LoggedInController@planner') ->name('members_planner');
Route::get('/members/finances','App\http\Controllers\LoggedInController@finances') ->name('members_finances');
Route::get('/members/portfolio','App\http\Controllers\LoggedInController@portfolio') ->name('members_portfolio');
Route::get('/members/health','App\http\Controllers\LoggedInController@health') ->name('members_health');
Route::get('/members/pokemon','App\http\Controllers\LoggedInController@pokemon') ->name('members_pokemon');

//Pokemon page routes

Route::post('/members/pokemon', 'App\http\Controllers\PokemonController@addcard')->name('addcard');
