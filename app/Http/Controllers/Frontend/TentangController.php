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

       return view('admin.tentang.index', compact('tentang'));
    }

    public function home(){

        $kontak = Kontak::all();
        $tentang = Tentang::all();

        return view('frontend.profile.tentang', compact('kontak', 'tentang'));
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

    public function editTentang(Tentang $tentang){

        $tentang = Tentang::find(1);

        return view('admin.tentang.editTentang', compact('tentang'));
    }

    public function updateTentang(Tentang $tentang){

        Alert::success('success', 'Berhasil mengupdate tentang skeolah!');

        $tentang->update([
            'deskripsi' => request('deskripsi'),
            'namaKarakter' => request('namaKarakter'),
            'deskripsiKarakter' => request('deskripsiKarakter')
        ]);

        return redirect()->route('frontend.tentang-admin.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
