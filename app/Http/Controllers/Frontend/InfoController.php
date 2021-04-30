<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kontak;

class InfoController extends Controller
{
    public function index(){

        $kontak = Kontak::all();

        return view('frontend.info.index', compact('kontak'));
    }
}
