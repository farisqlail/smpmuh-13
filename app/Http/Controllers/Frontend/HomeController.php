<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $berita = Berita::latest()->paginate(3);

        return view('welcome', compact('berita'));
    }

}
