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
        return redirect()->back()->with(session()->flash('status', 'Data Berhasil Ditambahkan'));
    }
    public function delete($id)
    {
        $bab = bab::where('id', $id)->get();
        $d = materi::where('bab', $bab[0]->judul_bab)->count();
        if ($d != 0) {
            $data = materi::where('bab', $bab[0]->judul_bab)->get();
            materi::where('bab', $data[0]->bab)->delete();
            bab::destroy($bab[0]->id);

            return redirect()->back()->with(session()->flash('status', 'Data Berhasil Dihapus'));
        } else {
            bab::destroy($bab[0]->id);
            return redirect()->back()->with(session()->flash('status', 'Data Berhasil Dihapus'));
        }
    }
}
