<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Kontak;
use App\Tentang;
use App\Karakter;
use App\LinkPpdb;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tentang = Tentang::all();
       $karakter = Karakter::all();

       return view('admin.tentang.index', compact('tentang', 'karakter'));
    }

    public function home(){

        $kontak = Kontak::all();
        $tentang = Tentang::all();
        $karakter = Karakter::all();
        $ppdb = LinkPpdb::find(1);

        return view('frontend.profile.tentang', compact('kontak', 'tentang', 'karakter', 'ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Tentang $tentang)
    {
        $tentang = Tentang::find(1);

        return view('admin.tentang.edit', compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Tentang $tentang)
    {
        Alert::success('success', 'Berhasil mengupdate tentang skeolah!');

        $tentang->update([
            'deskripsi' => request('deskripsi'),
            'image' => request('image')->store('tentang')
        ]);

        return redirect()->route('frontend.tentang-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
