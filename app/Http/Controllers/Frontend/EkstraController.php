<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Kontak;
use App\Ekstra;
use App\DeskEKstra;
use App\KategoriEkstra;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        $ekstra = Ekstra::all();
        $desk = DeskEKstra::all();

        return view('admin.ekstra.index', compact('kontak', 'ekstra', 'desk'));
    }

    public function home(){

        $kontak = Kontak::all();
        $desk = DeskEKstra::all();
        $ekstra = Ekstra::select('kategori_id')->groupBy('kategori_id')->get();
        
        $string = [];
            foreach ($ekstra as $eks) {
                $kategoriEkstra = KategoriEkstra::find($eks->kategori_id);
                array_push($string, $kategoriEkstra);
            }

        $ekstra = Ekstra::all();
        // dd($ekstra);

        return view('frontend.akademik.ekstrakulikuler', compact('kontak', 'ekstra', 'desk', 'string'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoriEkstra = KategoriEkstra::all();

        return view('admin.ekstra.create', compact('kategoriEkstra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data ekstrakurikuler!');

        Ekstra::create([
            'kategori_id' => request('kategori_id'),
            'nama_ekstra' => request('nama_ekstra'),
            'nama_kategori' => request('')
        ]);

        return redirect()->route('frontend.ekstra-admin.index');
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
    public function edit(Ekstra $ekstra)
    {
        $kategoriEkstra = KategoriEkstra::all();

        return view('admin.ekstra.edit', compact('ekstra', 'kategoriEkstra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekstra $ekstra)
    {
        Alert::success('Success', 'Berhasil mengubah data ekstrakurikuler!');

        $ekstra->update([
            'kategori_id' => request('kategori_id'),
            'nama_ekstra' => request('nama_ekstra')
        ]);

        return redirect()->route('frontend.ekstra-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ekstra $ekstra)
    {
        Alert::success('Success', 'Berhasil menghapus data ekstrakurikuler!');

        $ekstra->delete();

        return redirect()->route('frontend.ekstra-admin.index');
    }
}
