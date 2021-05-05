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
use Image;
use App\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all();

        return view('admin.alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Success', 'Data alumni berhasil ditambah');

        // $image = $request->file('image');
        // $filename = $image->getClientOriginalName();
        // $image_resize = Image::make($image->getRealPath());
        // $image_resize->resize(300, 300);
        // $image_resize->save(public_path('storage/alumni/'.$filename));

        Alumni::create([
            'nama' => request('nama'),
            'status' => request('status'),
            'testimoni' => request('testimoni'),
            'image' => request('image')->store('alumni')
        ]);

        return redirect()->route('frontend.alumni-admin.index');
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
    public function edit(Alumni $alumni)
    {
        return view('admin.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni)
    {
        Alert::success('Success', 'Data alumni berhasil diperbarui');

        if($alumni->image){
            \Storage::delete($alumni->image);
        }

        // $image = $request->file('image');
        // $filename = $image->getClientOriginalName();
        // $image_resize = Image::make($image->getRealPath());
        // $image_resize->resize(500, 350);
        // $image_resize->save(public_path('storage/alumni/'.$filename));

        $alumni->update([
            'nama' => request('nama'),
            'status' => request('status'),
            'testimoni' => request('testimoni'),
            'image' => request('image')->store('alumni')
        ]);

        return redirect()->route('frontend.alumni-admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni)
    {
        $alumni->delete();
        if($alumni->image){
            \Storage::delete($alumni->image);
        }
        
        return reditrect()->back();
    }
}
