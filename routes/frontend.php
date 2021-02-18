<?php
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {

    Route::group(
        [

            'namespace' => 'Frontend'
        ],
        function () {

            Route::get('/', function () {
                return view('welcome');
            });

            // Route Lain

            // Berita
            Route::get('/berita', 'BeritaController@home')->name('berita');
            Route::get('/show-berita', 'BeritaController@show')->name('show-berita');

            // Akademik
            Route::get('/ekstra', 'EkstraController@index')->name('ekstra');
            Route::get('/akreditasi', 'AkreditasiController@index')->name('akreditasi');
            Route::get('/beasiswa', 'BeasiswaController@index')->name('beasiswa');

            // Profile
            Route::get('/galeri', 'GaleriController@home')->name('galeri');
            Route::get('/mars', 'MarsController@index')->name('mars');
            Route::get('/staf', 'StaffController@home')->name('staf');
            Route::get('/tentang', 'TentangController@index')->name('tentang');
            Route::get('/visi', 'VisiController@index')->name('visi');
        }

    );
});

Route::name('frontend.')->group(function () {
    Route::group([
        'namespace' => 'Frontend',
    ], function () {
        Route::get('/admin', 'AdminController@index')->name('admin');

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
