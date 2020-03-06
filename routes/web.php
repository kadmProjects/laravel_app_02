<?php

Auth::routes(['register' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/town', 'TownController@index')->name('listTowns');
    Route::get('/town/add', 'TownController@create')->name('createTown');
    Route::post('/town/add', 'TownController@store')->name('storeTown');
    Route::get('/town/edit/{id}', 'TownController@edit')->name('editTown');
    Route::put('/town/edit/{id}', 'TownController@update')->name('updateTown');
    Route::get('/town/show/{id}', 'TownController@show')->name('showTown');
    Route::delete('/town/delete/{id}', 'TownController@destroy')->name('destroyTown');
});

