<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'GuestbookController@getRecords')->name('main');
Route::get('/about', 'MainController@getabout')->name('about');
Route::get('/contact', 'MainController@getcontact')->name('contact');
Route::get('/tasks', 'TaskController@gettasks')->name('tasks');

Route::post('/guestbook/form', 'GuestbookController@createRecord')->name('createRecord');

Route::get('/guestbook/form/{id}/edit', 'GuestbookController@editRecord')->name('editRecord');
Route::post('/guestbook/form/{id}/editform', 'GuestbookController@editFormSub')->name('editSubRecord');
Route::get('/guestbook/form/{id}/delete', 'GuestbookController@deleteRecord')->name('deleteRecord');

Route::post('/tasks/form', 'TaskController@formTask')->name('taskForm');


