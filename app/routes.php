<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
http://imron02.wordpress.com/2014/07/23/create-role-and-permission-using-entrust-in-laravel/
Route::get('/', function()
{
	return View::make('hello');
});

CREATE TABLE `users` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL,
    `created_at` datetime DEFAULT NULL,
    `updated_at` datetime DEFAULT NULL, 
    PRIMARY KEY (`id`)
) CHARSET=utf8 COLLATE=utf8_unicode_ci;migrations
