<?php

    Route::name('frontend.')->group(function (){

        Route::group([

            'namespace' => 'Frontend'
        ], function (){
            
            Route::get('/', function (){
                return view('welcome');
            });

            // Route Lain

            // Berita
            Route::get('/berita', 'BeritaController@index')->name('berita');
            Route::get('/show-berita', 'BeritaController@show')->name('show-berita');

            // Akademik
            Route::get('/ekstra', 'EkstraController@index')->name('ekstra');
            Route::get('/akreditasi', 'AkreditasiController@index')->name('akreditasi');
            Route::get('/beasiswa', 'BeasiswaController@index')->name('beasiswa');

            // Profile
            Route::get('/galeri', 'GaleriController@index')->name('galeri');
            Route::get('/mars', 'MarsController@index')->name('mars');
            Route::get('/staf', 'StafController@index')->name('staf');
            Route::get('/tentang', 'TentangController@index')->name('tentang');
            Route::get('/visi', 'VisiController@index')->name('visi');
        }
    
        );
    });