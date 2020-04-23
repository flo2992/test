<?php

Route::get('/', 'EventController@home');
Route::get('/events', 'EventController@index');
Route::post('/pandore/uploads', 'FileUploader');
// Route::get('/file-details', 'GetFileDetails');
Route::get('/pandore/file-details', 'GetFileDetails');
