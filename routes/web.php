<?php

Broadcast::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::resource('posts', 'Posts\PostController');

Route::post('comment', 'Posts\CommentController@store')->name('comment.store');

Route::get('notifications', 'NotificationController@notifications');

Route::put('notification-read', 'NotificationController@makeAsRead');
Route::put('notifications-all-read', 'NotificationController@markAllAsRead');