<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Materi;

use Illuminate\Support\Str;

class MateriController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'materi' => 'required',
            'judul' => 'required',
            'mentor' => 'required',
            'youtube' => 'required',
            'post_id' => 'required',
            'materi_ke' => 'required',
            'ringkasan' => 'required|mimes:pdf|max:10000',
            'slug' => 'required',
        ]);

        $file = Storage::putFile('public/pertanian', $request->file('ringkasan'));
        Materi::create([
            'kategori' => $request->kategori,
            'materi' => $request->materi,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'post_id' => $request->post_id,
            'materi_ke' => $request->materi_ke,
            'mentor' => $request->mentor,
            'youtube' => $request->youtube,
            'ringkasan' => $file
        ]);



        return redirect('dashboard');
    }
}
