<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::redirect('/admin', '/admin/dashboard');

require('admin.php');
require('frontend.php');
