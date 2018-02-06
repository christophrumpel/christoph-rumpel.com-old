<?php

// Blog
Route::feeds();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/talks', 'TalksController@index')->name('talks');
Route::get('/newsletter', 'NewsletterController@index')->name('newsletter');
Route::get('/{year}/{month}/{slug}', 'PostsController@show')->name('posts.show');

// Products
Route::get('build-chatbots-in-php', 'BookController@index')->name('book');