<?php
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {

    Route::group(
        [

            'namespace' => 'Frontend'
        ],
        function () {
            Route::get('/', 'HomeController@index')->name('welcome');

            // Route::get('/', function () {
            //     return view('welcome');
            // });

            // Berita
            Route::resource('/berita', 'BeritaController');
            Route::get('/berita', 'BeritaController@home')->name('berita');
            Route::get('/show-berita/{berita}', 'BeritaController@show')->name('show-berita');
            Route::get('/berita/search', 'BeritaController@search')->name('berita-search');

            // Akademik
            Route::get('/ekstra', 'EkstraController@index')->name('ekstra');
            Route::get('/akreditasi', 'AkreditasiController@index')->name('akreditasi');
            Route::get('/beasiswa', 'BeasiswaController@index')->name('beasiswa');

            // Profile
            Route::get('/galeri', 'GaleriController@home')->name('galeri');
            Route::get('/Kur', 'KurController@index')->name('Kur');
            Route::get('/staf', 'StaffController@home')->name('staf');
            Route::get('/tentang', 'TentangController@index')->name('tentang');
            Route::get('/visi', 'VisiController@index')->name('visi');

            //Comment 
            Route::resource('/comment', 'CommentController');
            // Route::post('/berita/{comment}/comment', 'CommentController@store')->name('berita-comment');

            //Info PPDB
            Route::get('/info', 'InfoController@index')->name('info');

            //Daftar PPDB
            Route::resource('/daftar', 'DaftarController');
            Route::get('/success', 'DaftarController@success')->name('success');

            //Kontak
            Route::get('/kontak', 'HomeController@kontak')->name('kontak');

            //Alumni
            Route::get('/alumni', 'HomeController@alumni')->name('alumni');
        }

    );
});

Route::name('frontend.')->group(function () {
    Route::group([
        'namespace' => 'Frontend',
        'middleware' => 'auth'
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

            Route::get('/daftar-admin', 'DaftarController@admin')->name('daftar.admin');

            Route::resource('/kontak-admin', 'KontakController');
            Route::get('/kontak-admin/{kontak}/edit', 'KontakController@edit')->name('kontak.edit');
            Route::patch('/kontak-admin/{kontak}', 'KontakController@update')->name('kontak.update');

            Route::resource('/prestasi-admin', 'PrestasiController');
            Route::get('/prestasi-admin/{prestasi}/edit', 'PrestasiController@edit')->name('prestasi.edit');
            Route::patch('/prestasi-admin/{prestasi}', 'PrestasiController@update')->name('prestasi.update');
            Route::get('/prestasi-admin/{prestasi}/delete', 'PrestasiController@destroy')->name('prestasi.delete');
    });
});
