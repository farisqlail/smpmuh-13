<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\DeskripsiKegiatan;
use App\KegiatanPenunjang;

class DeskripsiKegiatanController extends Controller
{
    public function index(){
        $kegiatanPenunjang = KegiatanPenunjang::all();
        $deskripsiKegiatan = DeskripsiKegiatan::all();

        return view('admin.kegiatanPenunjang.index', compact('kegiatanPenunjang', 'deskripsiKegiatan'));
    }

    public function edit(DeskripsiKegiatan $deskripsiKegiatan){

        return view('admin.kegiatanPenunjang.deskripsiKegiatan', compact('deskripsiKegiatan'));
    }

    public function update(DeskripsiKegiatan $deskripsiKegiatan){
        Alert::success('Success', 'Berhasil mengubah deskripsi kegiatan penunjang!');

        $deskripsiKegiatan->update([
            'deskripsi' => request('deskripsi'),
            'image' => request('image')->store('deskripsiKegiatan')
        ]);

        return redirect()->route('frontend.kegiatanPenunjang-admin.index');
    }
}
