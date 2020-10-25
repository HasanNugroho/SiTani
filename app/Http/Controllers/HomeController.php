<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bab;
use App\Models\materi as ModelsMateri;
use App\Models\materi;

class HomeController extends Controller
{
    public function home()
    {
        $feedback = new FeedbackController;
        $tanggapan = $feedback->show();
        $tani = bab::where('kategori', 'pertanian')->count();
        $kebun = bab::where('kategori', 'perkebunan')->count();
        $hidro = bab::where('kategori', 'hidroponik')->count();
        return view('home')->with(compact('tanggapan', 'tani', 'kebun', 'hidro'));
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
    public function materi($slug)
    {
        $bab = bab::where('slug', $slug)->get();
        $materi = materi::where('bab', $slug)->get();
        $materis = materi::where('bab', $slug)->count();

        if ($materis == 0) {
            return redirect('/pengembangan');
        } else {

            return view('materi');
        }
    }
}
