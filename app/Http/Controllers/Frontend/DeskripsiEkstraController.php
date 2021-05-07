<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\DeskEkstra;
use App\Ekstra;

class DeskripsiEkstraController extends Controller
{
    public function index(){
        
        $desk = DeskEKstra::all();
        $ekstra = Ekstra::all();

        return view('admin.ekstra.index', compact('desk', 'ekstra'));
    }

    public function edit(DeskEkstra $desk){

        return view('admin.deskripisiEkstra.edit', compact('desk'));
    }

    public function update(DeskEkstra $desk){

        Alert::success('Success', 'Berhasil mengubah deskripsi Ekstrakurikuler!');

        $desk->update([
            'deskripsi' => request('deskripsi')
        ]);

        return redirect()->route('frontend.ekstra-admin.index');
    }
}
