<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Kontak;
use App\LinkPpdb;

class MarsController extends Controller
{
    public function index(){

        $kontak = Kontak::all();
        $ppdb = LinkPpdb::find(1);

        return view('frontend.profile.mars', compact('kontak', 'ppdb'));
    }

    
}
