<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MainController@getmain')->name('main');
Route::get('/about','MainController@getabout')->name('about');
Route::get('/contact','MainController@getcontact')->name('contact');

