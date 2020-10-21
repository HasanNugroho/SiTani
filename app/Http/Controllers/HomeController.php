<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function pertanian()
    {
        return view('pertanian');
    }
    public function perkebunan()
    {
        return view('perkebunan');
    }
    public function hidroponik()
    {
        return view('hidroponik');
    }
    public function pengembangan()
    {
        return view('pengembangan');
    }
}
