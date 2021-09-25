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
use App\Kurikulum;
use App\Kontak;
use App\LinkPpdb;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontak = Kontak::all();
        $kurikulum = Kurikulum::all();

        return view('admin.kurikulum.index', compact('kontak', 'kurikulum'));
    }

    public function home(){

        $kontak = Kontak::all();
        $kurikulum = Kurikulum::all();
        $ppdb = LinkPpdb::find(1);
        
        return view('frontend.profile.kur', compact('kontak', 'kurikulum', 'ppdb'));
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
    public function edit(Kurikulum $kurikulum)
    {
        return view('admin.kurikulum.edit', compact('kurikulum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kurikulum $kurikulum)
    {
        Alert::success('Success', 'Berhasil mengubah data kurikulum');

        $kurikulum->update([
            'deskripsi' => request('deskripsi'),
            'image' => request('image')->store('kurikulum')
        ]);

        return redirect()->route('frontend.kurikulum-admin.index');
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
