<?php

Route::feeds();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/talks', 'TalksController@index')->name('talks');
Route::get('/{year}/{month}/{slug}', 'PostsController@show')->name('posts.show')->where('slug', '(.*)');
