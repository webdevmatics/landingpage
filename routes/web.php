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

Route::get('/home', 'ContactsController@homePage');

Route::get('/about', 'ContactsController@about');

Route::post('/landingform', 'ContactsController@landingForm');

Route::get('/contact-list', 'ContactsController@listOfContact');

Route::get('/destroy-contact/{id}', 'ContactsController@destroy');




