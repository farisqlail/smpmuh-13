<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\KegiatanPenunjang;
use App\Kontak;
use App\DeskripsiKegiatan;
use App\LinkPpdb;

class KegiatanPenunjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatanPenunjang = KegiatanPenunjang::all();
        $deskripsiKegiatan = DeskripsiKegiatan::all();
        // dd($deskripsiKegiatan);

        return view('admin.kegiatanPenunjang.index', compact('kegiatanPenunjang', 'deskripsiKegiatan'));
    }

    public function home(){
        
        $kontak = Kontak::all();
        $kegiatanPenunjang = KegiatanPenunjang::all();
        $deskripsiKegiatan = DeskripsiKegiatan::all();
        $ppdb = LinkPpdb::find(1);

        return view('frontend.akademik.kegiatanTambah', compact('kontak', 'kegiatanPenunjang', 'deskripsiKegiatan', 'ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatanPenunjang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data kegiatan penunjang!');

        KegiatanPenunjang::create([
            'nama_kegiatan' => request('nama_kegiatan')
        ]);

        return redirect()->route('frontend.kegiatanPenunjang-admin.index');
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
    public function edit(KegiatanPenunjang $kegiatanPenunjang)
    {
        return view('admin.kegiatanPenunjang.edit', compact('kegiatanPenunjang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KegiatanPenunjang $kegiatanPenunjang)
    {
        Alert::success('Success', 'Berhasil mengubah data kegiatan penunjang!');

        $kegiatanPenunjang->update([
            'nama_kegiatan' => request('nama_kegiatan')
        ]);

        return redirect()->route('frontend.kegiatanPenunjang-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KegiatanPenunjang $kegiatanPenunjang)
    {
        Alert::success('Success', 'Berhasil mengubah data kegiatan penunjang!');

        $kegiatanPenunjang->delete();

        return redirect()->route('frontend.kegiatanPenunjang-admin.index');
    }
}
