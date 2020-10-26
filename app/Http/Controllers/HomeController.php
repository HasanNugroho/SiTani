<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bab;
use App\Models\Comment;
use App\Models\materi as ModelsMateri;
use App\Models\materi;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Storage;

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
    public function materi($slug, $id)
    {
        $bab = bab::where('slug', $slug)->get();
        $materi = materi::where(['bab' => $bab[0]->judul_bab, 'materi_ke' => $id])->get();
        $materis = materi::where(['bab' => $bab[0]->judul_bab])->get();
        $comment = Comment::where('post_id', $materi[0]->post_id)->get();
        $m = materi::where('bab', $bab[0]->judul_bab)->count();
        if ($m == 0) {
            return redirect('/pengembangan');
        } else {

            return view('materi')->with(compact('bab', 'materi', 'comment', 'materis'));
        }
    }
    public function download($path)
    {
        return Storage::download($path);
    }
}
