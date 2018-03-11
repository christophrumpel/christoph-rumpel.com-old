<?php

// Blog
Route::feeds();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/{year}/{month}/{slug}', 'PostsController@show')->name('posts.show');
Route::get('/category/{category}', 'PostsController@category')->name('posts.category');


// Pages
Route::get('/talks', 'TalksController@index')->name('talks');
Route::get('/newsletter', 'NewsletterController@index')->name('newsletter');
Route::get('build-chatbots-with-php', 'BookController@index')->name('book');