<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\KategoriEkstra;

class KategoriEkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriEkstra = KategoriEkstra::all();

        return view('admin.kategoriEkstra.index', compact('kategoriEkstra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategoriEkstra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data kategori ekstrakurikuler!');

        KategoriEkstra::create([
            'nama_kategori' => request('nama_kategori')
        ]);

        return redirect()->route('frontend.kategoriEkstra-admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriEkstra $kategoriEkstra)
    {
        return view('admin.kategoriEkstra.edit', compact('kategoriEkstra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriEkstra $kategoriEkstra)
    {
        Alert::success('Success', 'Berhasil mengubah data kategori ekstrakurikuler!');

        $kategoriEkstra->update([
            'nama_kategori' => request('nama_kategori')
        ]);

        return redirect()->route('frontend.kategoriEkstra-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriEkstra $kategoriEkstra)
    {
        Alert::success('Success', 'Berhasil menghapus data kategori ekstrakurikuler!');

        $kategoriEkstra->delete();

        return redirect()->route('frontend.kategoriEkstra-admin.index');
    }
}
