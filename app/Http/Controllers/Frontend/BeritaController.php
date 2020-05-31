<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    public function index()
    {
        return view('frontend.berita.berita');
    }

    public function show(){
        
        return view('frontend.berita.show-berita');
    }
}
