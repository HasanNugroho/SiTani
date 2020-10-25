<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\bab;
use Illuminate\Support\Str;
use Alert;

class BabController extends Controller
{
    public function bab()
    {
        $bab = bab::all();
        return $bab;
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
}
