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



Route::get('/', 'ContactsController@homePage');

Route::get('/about', 'ContactsController@about');

Route::get('/home', 'ContactsController@homePage');

Route::post('/landingform', 'ContactsController@landingForm');

Route::get('/contact-list', 'ContactsController@listOfContact');

Route::get('/destroy-contact/{id}', 'ContactsController@destroy');

//display edit form
Route::get('/contact-edit/{id}', 'ContactsController@edit');

// route to submit edit form data
Route::post('/contact-update/{id}', 'ContactsController@update');

// task list



