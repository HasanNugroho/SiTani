<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\bab;
use Illuminate\Support\Str;
use Alert;
use App\Models\materi;

class BabController extends Controller
{
    public function materi($slug)
    {
        $bab = bab::where('slug', $slug)->get();
        $judul = $bab[0]->judul_bab;
        $materi = materi::where("bab", $judul)->get();
        return view('backend.materi', compact('bab', 'materi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul_bab' => 'required',
            'mentor' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:3000',
        ]);

        $gambar = Storage::putFile('public/bab', $request->file('gambar')->path());

        bab::create([
            'judul_bab' => $request->judul_bab,
            'slug' => Str::slug($request->judul_bab),
            'gambar' => $gambar,
            'kategori' => $request->kategori,
            'mentor' => $request->mentor,
        ]);
        Alert::success('Sukses', 'Bab berhasil diinput');
        return redirect('/dashboard/kelas');
    }
    public function hapus($slug)
    {
        $data = materi::where('slug', $slug)->first();
        Storage::delete($data['gambar']);
        $data->delete();
        return view('backend.kelas');
    }
}
