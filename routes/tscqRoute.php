<?php

// Route::get('/', function() {
//   return File::get(public_path() . '/index.html');
// });

// Route::get('/launcher', function() {
//   return File::get(public_path() . '/launcher.html');
// });

Route::get('/', 'HomeController@index');

Route::get('/launcher', 'HomeController@launcher');