<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\materi;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'materi_ke' => 'required',
            'kategori' => 'required',
            'bab' => 'required',
            'judul' => 'required',
            'mentor' => 'required',
            'youtube' => 'required',
            'ringkasan' => 'required|mimes:pdf|max:10000',
        ]);
        if($request->kategori == 'pertanian'){
        $file = Storage::putFile('public/pertanian', $request->file('ringkasan'));
        }
        elseif($request->kategori == 'perkebunan'){
        $file = Storage::putFile('public/perkebunan', $request->file('ringkasan'));
        }
        else{
        $file = Storage::putFile('public/hidroponik', $request->file('ringkasan'));
        }
        materi::create([
            'kategori' => $request->kategori,
            'bab' => $request->bab,
            'materi_ke' => $request->materi_ke,
            'judul' => $request->judul,
            'post_id' => Str::random(5),
            'slug' => Str::slug($request->judul),
            'mentor' => $request->mentor,
            'youtube' => $request->youtube,
            'ringkasan' => $file
            ]);
        return redirect('dashboard');
    }
}