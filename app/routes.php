<?php

use App\Helpers\Route;

Route::get('/', 'HomeController@index');
Route::get('/user/{id}', 'HomeController@get_user');
// Route::post('/user/update', 'HomeController@update_user');
