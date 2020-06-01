<?php 

    Route::name('admin.')->group(function () {

        Route::group([

            'namespace' => 'Admin',
            // 'prefix' => 'admin',
            'middleware' => 'auth'

        ], function () {
            Route::get('/admin', 'AdminController@index')->name('admin');

            Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
                \UniSharp\LaravelFilemanager\Lfm::routes();
            });
            
            // Berita
            // Route::get('/berita-admin', 'BeritaController@index')->name('berita-admin');
            Route::get('/berita-admin/{berita}/delete', 'BeritaController@destroy')->name('berita.delete');
            Route::get('/berita-admin/{berita}/edit', 'BeritaController@edit')->name('berita.edit');
            Route::patch('/berita-admin/{berita}', 'BeritaController@update')->name('berita.update');
            Route::resource('/berita-admin', 'BeritaController');
        });
    });