<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class VisiController extends Controller
{
    public function index(){

        return view('frontend.profile.visi-misi');
    }
}
