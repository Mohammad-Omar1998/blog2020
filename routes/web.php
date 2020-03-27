<?php

Route::get('/','TaskController@index');
Route::get('task1/{id}','TaskController@show');

Route::post('store','TaskController@store');
 