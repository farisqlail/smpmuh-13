<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::redirect('/admin', '/admin/dashboard');

// Route::get('/', 'HomeController@index')->name('welcome');
require('frontend.php');
