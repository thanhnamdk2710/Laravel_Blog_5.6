<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::group(
    ['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']],
    function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(
    ['as' => 'author.', 'prefix' => 'author', 'namespace' => 'Author', 'middleware' => ['auth', 'author']],
    function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
