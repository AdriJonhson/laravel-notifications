<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::resource('posts', 'Posts\PostController');

Route::post('comment', 'Posts\CommentController@store')->name('comment.store');

Route::get('notifications', 'NotificationController@notifications');