<?php 

    Route::name('admin.')->group(function () {

        Route::group([

            'namespace' => 'Admin',
            'middleware' => 'auth'

        ], function () {
            Route::get('/admin', 'AdminController@index')->name('admin');
        });
    });