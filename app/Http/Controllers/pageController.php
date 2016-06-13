<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class pageController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view ('pages.contact');
    }
}
