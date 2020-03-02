<?php

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index')->name('home');
});

