<?php


Route::get('/', function () {
    return view('layouts/login');
});

Route::post('login', 'AuthController@login');