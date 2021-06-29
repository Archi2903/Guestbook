<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestbookController@getRecords')->name('main');
Route::get('/about', 'MainController@getabout')->name('about');
Route::get('/contact', 'MainController@getcontact')->name('contact');

Route::post('/guestbook/form', 'GuestbookController@createRecord')->name('createRecord');


