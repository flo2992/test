<?php

Route::get('/', 'EventController@home');
Route::get('/events', 'EventController@index');
Route::post('/uploads', 'FileUploader');
// Route::get('/file-details', 'GetFileDetails');
Route::get('/file-details', 'GetFileDetails');
