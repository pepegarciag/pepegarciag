<?php

Route::feeds();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/page/{page}', 'PostsController@page');
Route::get('/posts/{year}/{slug}', 'PostsController@show')->name('posts.show')->where('slug', '(.*)');
