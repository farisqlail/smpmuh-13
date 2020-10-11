<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();

        return view('frontend.berita.berita', ['berita' => $berita]);
    }

    public function show(){
        
        return view('frontend.berita.show-berita');
    }
}
