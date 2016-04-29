<?php

//composer dumpautoload

Route::get('/', 'PageController@index');

Route::get('/login', function () {
    return view('layouts/login');
});


Route::post('login', 'AuthController@login');