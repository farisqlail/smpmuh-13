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
use App\Tentang;
use App\Karakter;

class KarakterController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karakter.createKarakter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Berhasil menambah data karakter!');

        Karakter::create([
            'namaKarakter' => request('namaKarakter'),
            'deskripsiKarakter' => request('deskripsiKarakter')
        ]);

        return redirect()->route('frontend.karakter-admin.index');
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
    public function edit(Karakter $karakter)
    {
        return view('admin.karakter.editKarakter', compact('karakter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Karakter $karakter)
    {
        Alert::success('Success', 'Berhasil menambah data karakter!');

        $karakter->update([
            'namaKarakter' => request('namaKarakter'),
            'deskripsiKarakter' => request('deskripsiKarakter')
        ]);

        return redirect()->route('frontend.karakter-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karakter $karakter)
    {
        $karakter->delete();
        Alert::success('Success', 'Berhasil menghapus data karakter');

        return redirect()->route('frontend.karakter-admin.index');
    }
}
