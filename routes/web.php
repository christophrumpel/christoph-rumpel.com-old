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
Route::get('/build-chatbots-with-php-newsletter-confirm', 'BookController@newsletterConfirm')->name('book-newsletter-confirm');
Route::get('/build-chatbots-with-php-newsletter-success', 'BookController@newsletterSuccess')->name('book-newsletter-success');
Route::get('/newsletter-confirm', 'NewsletterController@confirm')->name('newsletter-confirm');
Route::get('/newsletter-success', 'NewsletterController@success')->name('newsletter-success');

// Policies
Route::get('/policy-newsletterchatbot', 'PolicyController@newsletterChatbot')->name('policy.newsletterchatbot');
Route::get('/privacy-policy', 'PolicyController@blog')->name('policy.privacy.blog');
Route::get('/privacy-policy-lca', 'PolicyController@lca')->name('policy.privacy.lca');
