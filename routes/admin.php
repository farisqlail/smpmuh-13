<?php 

    Route::name('admin.')->group(function () {

        Route::group([

            'namespace' => 'Admin',
            // 'prefix' => 'admin',
            'middleware' => 'auth'

        ], function () {
            Route::get('/admin', 'AdminController@index')->name('admin');

            // Berita
            // Route::get('/berita-admin', 'BeritaController@index')->name('berita-admin');
            Route::resource('/berita-admin', 'BeritaController');
        });
    });