<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MarsController extends Controller
{
    public function index(){

        return view('frontend.profile.mars');
    }
}
