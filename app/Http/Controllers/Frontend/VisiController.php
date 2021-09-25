<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Kontak;
use App\LinkPpdb;
use App\Visi;

class VisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $kontak = Kontak::all();
        $visi = Visi::all();
        
        return view('admin.visi.index', compact('kontak', 'visi'));
    }

    public function home(){

        $kontak = Kontak::all();
        $visi = Visi::all();
        $ppdb = LinkPpdb::find(1);
        
        return view('frontend.profile.visi-misi', compact('kontak', 'visi', 'ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
    public function edit(Visi $visi)
    {
        $visi = Visi::find(1);

        return view('admin.visi.edit', compact('visi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visi $visi)
    {
        Alert::success('Success', 'Berhasil mengubah data visi misi!');

        $visi->update([
            'visi' => request('visi'),
            'imageVisi' => request('imageVisi')->store('visiMisi'),
            'misi' => request('misi'),
            'imageMisi' => request('imageMisi')->store('visiMisi')
        ]);

        return redirect()->route('frontend.visi-admin.index');
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
