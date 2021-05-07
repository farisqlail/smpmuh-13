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
use App\Kontak;
use App\Beasiswa;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $kontak = Kontak::all();
        $beasiswa = Beasiswa::all();

        return view('admin.beasiswa.index', compact('kontak', 'beasiswa'));
    }

    public function home(){
        
        $kontak = Kontak::all();
        $beasiswa = Beasiswa::all();

        return view('frontend.akademik.beasiswa', compact('kontak', 'beasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.beasiswa.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Behasil menambah data beasiswa!');

        Beasiswa::create([
            'namaBeasiswa' => request('namaBeasiswa'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('frontend.beasiswa-admin.index');
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
    public function edit(Beasiswa $beasiswa)
    {
        return view('admin.beasiswa.edit', compact('beasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beasiswa $beasiswa)
    {
        Alert::success('Success', 'Berhasil mengubah data beasiswa!');

        $beasiswa->update([
            'namaBeasiswa' => request('namaBeasiswa'),
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('frontend.beasiswa-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beasiswa $beasiswa)
    {
        Alert::success('Success', 'Berhasil menghapus data beasiswa!');
        $beasiswa->delete();

        return redirect()->route('frontend.beasiswa-admin.index');
    }
}
