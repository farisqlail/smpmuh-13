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
        }
    
        );
    });