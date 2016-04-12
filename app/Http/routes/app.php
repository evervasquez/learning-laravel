<?php


Route::get('/', function(){
    return View('welcome');
});

Route::get('/login', function () {
    return view('layouts/login');
});


Route::post('login', 'AuthController@login');