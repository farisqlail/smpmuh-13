<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kontak;
use App\LinkPpdb;

class InfoController extends Controller
{
    public function index(){

        $kontak = Kontak::all();
        $ppdb = LinkPpdb::find(1);

        return view('frontend.info.index', compact('kontak', 'ppdb'));
    }
}
