<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Galeri;
use App\Kontak;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        $kontak = Kontak::all();

        return view('admin.galeri.index', compact('galeri', 'kontak'));
    }

    public function home(){
        
        $galeri = Galeri::all();
        $kontak = Kontak::all();

        return view('frontend.profile.galeri', compact('galeri', 'kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil Terupload');

        Galeri::create([
            'name' => request('name'),
            'image' => request('image')->store('galeri')
        ]);

        return redirect()->route('frontend.galeri-admin.index');
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
    public function edit(Galeri $galeri)
    {
        // dd($galeri['id']);
       return view('admin.galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Galeri $galeri)
    {
        if($galeri->image){
            \Storage::delete($galeri->image);
        }

        Alert::success('Success', 'Berhasil Terupdate');

        $galeri->update([
            'name' => request('name'),
            'image' => request('image')->store('galeri')
        ]);

        return redirect()->route('frontend.galeri-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        Alert::success('Success', 'Berhasil Dihapus');
        \Storage::delete($galeri->image);

        return redirect()->route('frontend.galeri-admin.index');
    }
}
