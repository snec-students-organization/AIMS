<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function career()
    {
        return view('frontend.career');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
