<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Berita;
use App\Kontak;
use App\Prestasi;
use App\Alumni;
use App\Beranda;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

    public function index()
    {
        $berita = Berita::latest()->paginate(3);
        $kontak = Kontak::all();
        $beranda = Beranda::all();

        return view('welcome', compact('berita', 'kontak', 'beranda'));
    }


    public function kontak(){
        $kontak = Kontak::all();

        return view('frontend.kontak.index', compact('kontak'));
    }

    public function alumni(){

        $alumni = Alumni::all();
        $kontak = Kontak::all();

        return view('frontend.alumni.index', compact('kontak', 'alumni'));
    }

    public function prestasi(){

        $prestasi = Prestasi::all();
        $kontak = Kontak::all();

        return view('frontend.prestasi.index', compact('prestasi', 'kontak'));
    }

    public function admin(){

        $beranda = Beranda::all();

        return view('admin.beranda.index', compact('beranda'));
    }

    public function edit(Beranda $beranda){
        
        return view('admin.beranda.edit', compact('beranda'));
    }

    public function update(Request $request, Beranda $beranda){

        Alert::success('Success', 'Berhasil mengubah foto!');

        $beranda->update([
            'imageBanner' => request('imageBanner')->store('beranda'),
            'imageSection2' => request('imageSection2')->store('beranda'),
            'imageSection3' => request('imageSection3')->store('beranda')
        ]);

        return redirect()->route('frontend.beranda.index');
    }
}
