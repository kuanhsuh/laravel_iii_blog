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

// Route::get('/', function () {
//     $name = "Danny";
//     $age = "19";
//     return view('welcome', compact(['name', 'age']));
//     return "Hello World";
// });

Route::get('/front-page', 'HomeController@frontPage');
Route::get('/new-page', 'HomeController@newPage');
Route::get('/single-page', 'HomeController@singlePage');

Route::get('/', 'HomeController@index');
