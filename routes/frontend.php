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
            Route::get('/ekstra', 'EkstraController@home')->name('ekstra');
            Route::get('/show-ekstra/{ekstra}', 'EkstraController@show')->name('show-ekstra');
            Route::get('/akreditasi', 'AkreditasiController@home')->name('akreditasi');
            Route::get('/beasiswa', 'BeasiswaController@home')->name('beasiswa');
            Route::get('/kegiatan-penunjang', 'KegiatanPenunjangController@home')->name('kegiatan-penunjang');

            // Profile
            Route::get('/galeri', 'GaleriController@home')->name('galeri');
            Route::get('/kurikulum', 'KurikulumController@home')->name('kurikulum');
            Route::get('/staf', 'StaffController@home')->name('staf');
            Route::get('/tentang', 'TentangController@home')->name('tentang');
            Route::get('/visi', 'VisiController@home')->name('visi');

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
            // Route::get('/kontak', 'PesanController@create')->name('kontak');
            // Route::resource('pesan', 'PesanController');

            //Alumni
            Route::get('/alumni', 'HomeController@alumni')->name('alumni');

            //prestasi
            Route::get('/prestasi', 'HomeController@prestasi')->name('prestasi');
            Route::get('/show-prestasi/{prestasi}', 'PrestasiController@show')->name('show-prestasi');
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

            Route::get('/kontak-admin/{kontak}/edit', 'KontakController@edit')->name('kontak.edit');
            Route::patch('/kontak-admin/{kontak}', 'KontakController@update')->name('kontak.update');
            Route::resource('/kontak-admin', 'KontakController');

            Route::get('/prestasi-admin/{prestasi}/edit', 'PrestasiController@edit')->name('prestasi.edit');
            Route::patch('/prestasi-admin/{prestasi}', 'PrestasiController@update')->name('prestasi.update');
            Route::get('/prestasi-admin/{prestasi}/delete', 'PrestasiController@destroy')->name('prestasi.delete');
            Route::resource('/prestasi-admin', 'PrestasiController');
            
            Route::get('/alumni-admin/{alumni}/edit', 'AlumniController@edit')->name('alumni.edit');
            Route::patch('/alumni-admin/{alumni}', 'AlumniController@update')->name('alumni.update');
            Route::get('/alumni-admin/{alumni}/delete', 'AlumniController@destroy')->name('alumni.delete');
            Route::resource('alumni-admin', 'AlumniController');

            Route::get('/tentang-admin/{tentang}/edit', 'TentangController@edit')->name('tentang.edit');
            Route::patch('/tentang-admin/{tentang}', 'TentangController@update')->name('tentang.update');
            Route::resource('tentang-admin', 'TentangController');

            Route::get('/karakter-admin/{karakter}/edit', 'KarakterController@edit')->name('karakter.edit');
            Route::patch('/karakter-admin/{karakter}', 'KarakterController@update')->name('karakter.update');
            Route::get('/karakter-admin/{karakter}/delete', 'KarakterController@destroy')->name('karakter.delete');
            Route::resource('karakter-admin', 'KarakterController');

            Route::get('/visi-admin/{visi}/edit', 'VisiController@edit')->name('visi.edit');
            Route::patch('/visi-admin/{visi}', 'VisiController@update')->name('visi.update');
            Route::resource('visi-admin', 'VisiController');

            Route::get('/akreditasi-admin/{akreditasi}/edit', 'AkreditasiController@edit')->name('akreditasi.edit');
            Route::patch('/akreditasi-admin/{akreditasi}', 'AkreditasiController@update')->name('akreditasi.update');
            Route::resource('akreditasi-admin', 'AkreditasiController');

            Route::get('/beasiswa-admin/{beasiswa}/edit', 'BeasiswaController@edit')->name('beasiswa.edit');
            Route::patch('/beasiswa-admin/{beasiswa}', 'BeasiswaController@update')->name('beasiswa.update');
            Route::get('/beasiswa-admin/{beasiswa}/delete', 'BeasiswaController@destroy')->name('beasiswa.delete');
            Route::resource('beasiswa-admin', 'BeasiswaController');

            Route::get('/kurikulum-admin/{kurikulum}/edit', 'KurikulumController@edit')->name('kurikulum.edit');
            Route::patch('/kurikulum-admin/{kurikulum}', 'KurikulumController@update')->name('kurikulum.update');
            Route::resource('/kurikulum-admin', 'KurikulumController');

            Route::get('/ekstra-admin/{ekstra}/edit', 'EkstraController@edit')->name('ekstra.edit');
            Route::patch('/ekstra-admin/{ekstra}', 'EkstraController@update')->name('ekstra.update');
            Route::get('/ekstra-admin/{ekstra}/delete', 'EkstraController@destroy')->name('ekstra.delete');
            Route::resource('/ekstra-admin', 'EkstraController');

            Route::get('/deskripsi-ekstra-admin/{desk}/edit', 'DeskripsiEkstraController@edit')->name('desk.edit');
            Route::patch('/deskripsi-ekstra-admin/{desk}', 'DeskripsiEkstraController@update')->name('desk.update');

            Route::get('/kategoriEkstra-admin/{kategoriEkstra}/edit', 'KategoriEkstraController@edit')->name('kategoriEkstra.edit');
            Route::patch('/kategoriEkstra-admin/{kategoriEkstra}', 'KategoriEkstraController@update')->name('kategoriEkstra.update');
            Route::get('/kategoriEkstra-admin/{kategoriEkstra}/delete', 'KategoriEkstraController@destroy')->name('kategoriEkstra.delete');
            Route::resource('/kategoriEkstra-admin', 'KategoriEkstraController');

            Route::get('/kegiatanPenunjang-admin/{kegiatanPenunjang}/edit', 'KegiatanPenunjangController@edit')->name('kegiatanPenunjang.edit');
            Route::patch('/kegiatanPenunjang-admin/{kegiatanPenunjang}', 'KegiatanPenunjangController@update')->name('kegiatanPenunjang.update');
            Route::get('/kegiatanPenunjang-admin/{kegiatanPenunjang}/delete', 'KegiatanPenunjangController@destroy')->name('kegiatanPenunjang.delete');
            Route::resource('/kegiatanPenunjang-admin', 'KegiatanPenunjangController');

            Route::get('/deskripsiKegiatan-admin/{deskripsiKegiatan}/edit', 'DeskripsiKegiatanController@edit')->name('deskripsiKegiatan.edit');
            Route::patch('/deskripsiKegiatan-admin/{deskripsiKegiatan}', 'DeskripsiKegiatanController@update')->name('deskripsiKegiatan.update');

            Route::get('/deskripsiBeasiswa-admin/{deskripsiBeasiswa}/edit', 'DeskripsiBeasiswaController@edit')->name('deskripsiBeasiswa.edit');
            Route::patch('/deskripsiBeasiswa-admin/{deskripsiBeasiswa}', 'DeskripsiBeasiswaController@update')->name('deskripsiBeasiswa.update');

            Route::get('/beranda-admin', 'HomeController@admin')->name('beranda.index');
            Route::get('/beranda-admin/{beranda}/edit', 'HomeController@edit')->name('beranda.edit');
            Route::patch('/beranda-admin/{beranda}', 'HomeController@update')->name('beranda.update');

            Route::get('/ppdb-admin', 'PPDBController@index')->name('ppdb.index');
            Route::get('/ppdb-admin/{ppdb}/edit', 'PPDBController@edit')->name('ppdb.edit');
            Route::patch('/ppdb-admin/{ppdb}', 'PPDBController@update')->name('ppdb.update');

            Route::get('/daftar/{daftar}/delete', 'DaftarController@destroy')->name('daftar.delete');
    });
});
