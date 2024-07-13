<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layout(){
        return view('template1');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');

    }

    public function contact(){
        return view('contact');

    }

    public function blog(){
        return view('blog');
    }

}
