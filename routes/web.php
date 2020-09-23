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
//     return view('welcome');
// });

Auth::routes(['register' => false]);

Route::get('/', 'DashboardController@index');
Route::resource('clients', 'ClientController');
Route::resource('insurance', 'InsuranceController');
Route::resource('insured', 'InsuredController');
Route::resource('placing', 'PlacingSlipController');
Route::resource('tests', 'TestController');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pdf', 'PdfController@print')->name('print');

Route::get('/home', 'HomeController@index')->name('home');
