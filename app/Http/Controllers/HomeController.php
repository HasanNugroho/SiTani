<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $feedback = new FeedbackController;
        $tanggapan = $feedback->show();

        return view('home')->with(compact('tanggapan'));
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
    public function materi()
    {
        return view('materi');
    }
}
