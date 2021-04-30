<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Kontak;

class MarsController extends Controller
{
    public function index(){

        $kontak = Kontak::all();

        return view('frontend.profile.mars', compact('kontak'));
    }
}
