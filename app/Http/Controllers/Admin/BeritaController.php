<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
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

        Berita::create([
            'judul' => request('judul'),
            'slug' => str_slug(request('judul')),
            'image' => request('image')->store('beritas'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('admin.berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        $beritas = Berita::all();

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritas = Berita::find($id);

        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Berita $berita)
    {
        if($berita->image){
            \Storage::delete($berita->image);
        }

        Alert::success('Success', 'Berhasil Terupdate');

        $berita->update([
            'judul' => request('judul'),
            'slug' => str_slug(request('judul')),
            'image' => request('image')->store('beritas'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita->delete();

        \Storage::delete($berita->image);
    }
}
