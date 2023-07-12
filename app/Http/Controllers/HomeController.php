<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewindex(){
        return view('pages.index');
    }

    public function viewabout(){
        return view('pages.about');
    }

    public function viewworks(){
        return view('pages.works');
    }
}
