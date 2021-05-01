<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;
use Carbon\Carbon;
use App\Prestasi;
use App\Kontak;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasis = Prestasi::all();

        return view('admin.prestasi.index', compact('prestasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Data prestasi siswa berhasi ditambah');
    
        Prestasi::create([
            'nama' => request('nama'),
            'kelas' => request('kelas'),
            'namaAcara' => request('namaAcara'),
            'deskripsi' => request('deskripsi'),
            'jenis' => request('jenis'),
            'image' => request('image')->store('prestasi')
        ]);

        return redirect()->route('frontend.prestasi-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        $kontak = Kontak::all();

        return view('frontend.prestasi.show', compact('prestasi', 'kontak'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
   
        
        return view('admin.prestasi.edit', compact('prestasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        Alert::success('Success', 'Data prestasi siswa berhasil diedit');

        if($prestasi->image){
            \Storage::delete($prestasi->image);
        }

        $prestasi->update([
            'nama' => request('nama'),
            'kelas' => request('kelas'),
            'namaAcara' => request('namaAcara'),
            'deskripsi' => request('deskripsi'),
            'jenis' => request('jenis'),
            'image' => request('image')->store('prestasi')
        ]);
        
        return redirect()->route('frontend.prestasi-admin.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        Alert::success('Success', 'Data prestasi siswa berhasil dihapus');
        \Storage::delete($prestasi->image);

        return redirect()->route('frontend.prestasi-admin.index');
    }
}
