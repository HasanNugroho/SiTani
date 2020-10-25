<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bab;

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
        $bab = bab::where('kategori', 'pertanian')->get();
        return view('pertanian')->with(compact('bab'));
    }
    public function perkebunan()
    {
        $bab = bab::where('kategori', 'perkebunan')->get();
        return view('perkebunan')->with(compact('bab'));
    }
    public function hidroponik()
    {
        $bab = bab::where('kategori', 'hidroponik')->get();
        return view('hidroponik')->with(compact('bab'));
    }
    public function pengembangan()
    {
        return view('pengembangan');
    }
    public function materi()
    {
        $mc = new MateriController;
        $player = $mc->player($slug);
        return view('materi')->with(compact('player'));
    }
}
