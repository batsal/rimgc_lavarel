<?php

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



Route::namespace('admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::get('/login', 'user\LoginController@index');
    // Route::get('/', 'FormController@index');
    Route::get('/', 'FormController@dashboard');
    Route::get('/form/list', 'FormController@index');
    Route::get('/form/list_w_edit', 'FormController@list_w_edit');
    Route::get('/form/listall', 'FormController@advanced_search');
    Route::get('/form/search', 'FormController@search');
    Route::get('/form/search1', 'FormController@search1')->name('form.search1');
    Route::get('/form/searchandlist', 'FormController@searchandlist')->name('form.searchandlist');
    Route::get('/form/searchandlist1', 'FormController@searchandlist1')->name('form.searchandlist1');
    Route::resource('/form', 'FormController');
    Route::post('/form/{id}', 'FormController@update');
    Route::get('/form/{id}/sample_requests', 'FormController@sample_requests')->name('form.sample_requests');

    Route::get('profile', 'UserController@profile')->name('profile');
    Route::post('user/{edit}/edit', 'UserController@edit')->name('user.edit');

    Route::get('dashboard', 'FormController@dashboard')->name('dashboard');
    Route::get('dashboard/dna_bank', 'FormController@dna_bank')->name('dna_bank');
    Route::get('dashboard/tissue_type', 'FormController@tissue_type')->name('tissue_type');
    Route::get('dashboard/proband', 'FormController@proband')->name('proband');

    Route::post('download/per/{per}/page/{page}', 'FormController@export')->name('download');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
