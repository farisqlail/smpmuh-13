<?php 
use Illuminate\Support\Facades\Route;

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

            Route::get('/galeri-admin/{galeri}/delete', 'GaleriController@destroy')->name('galeri.delete');
            Route::get('/galeri-admin/{galeri}/edit', 'GaleriController@edit')->name('galeri.edit');
            Route::patch('/galeri-admin/{galeri}', 'GaleriController@update')->name('galeri.update');
            Route::resource('/galeri-admin', 'GaleriController');

            Route::get('/staff-admin/{staff}/edit', 'StaffController@edit')->name('staff.edit');
            Route::patch('/staff-admin/{staff}', 'StaffController@update')->name('staff.update');
            Route::get('/staff-admin/{staff}/delete', 'StaffController@destroy')->name('staff.delete');
            Route::resource('/staff-admin', 'StaffController');
        });
    });