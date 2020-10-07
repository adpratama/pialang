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
Route::get('placing/{id}/makeps', 'PlacingSlipController@makeps')->name('placing.makeps');
Route::resource('insured', 'InsuredController');
Route::resource('placing', 'PlacingSlipController');
Route::resource('tes', 'TestController');
Route::resource('quotation', 'QuotationSlipController');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('placing/{id}/set-status', 'PlacingSlipController@setStatus')->name('placing.status');
Route::get('quotation/{id}/qs', 'QuotationSlipController@qs')->name('quotation.qs');
Route::get('find-id', ['uses'=>'TestController@find_id', 'as'=>'find.id']);

// Route::get('/pdf', 'PdfController@print')->name('print');

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('invoice', 'InvoiceController');
Route::get('invoice/{id}/makeinvc', 'InvoiceController@makeinvc')->name('invoice.makeinvc');
Route::get('invoice/{id}/showc', 'InvoiceController@showc')->name('invoice.showc');


Route::resource('jenis_asuransi', 'JenisAsuransiController');
Route::resource('authorize_sign', 'AuthorizeSignController');
Route::resource('mata_uang', 'MataUangController');
Route::resource('no_rekening', 'NoRekeningController');
