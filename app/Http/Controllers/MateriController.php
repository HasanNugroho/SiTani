<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\hidroponik;
use App\Models\perkebunan;
use App\Models\pertanian;
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
            'ringkasan' => 'required|mimes:pdf|max:10000',
            'slug' => 'required',
        ]);
        if($request->kategori == 'pertanian'){
        $file = Storage::putFile('public/pertanian', $request->file('ringkasan'));
        pertanian::create([
            'kategori' => $request->kategori,
            'materi' => $request->materi,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'mentor' => $request->mentor,
            'youtube' => $request->youtube,
            'ringkasan' => $file
            ]);
        }
        elseif($request->kategori == 'perkebunan'){
        $file = Storage::putFile('public/perkebunan', $request->file('ringkasan'));
        perkebunan::create([
            'kategori' => $request->kategori,
            'materi' => $request->materi,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'mentor' => $request->mentor,
            'youtube' => $request->youtube,
            'ringkasan' => $file
            ]);
        }
        else{
        $file = Storage::putFile('public/hidroponik', $request->file('ringkasan'));
        hidroponik::create([
            'kategori' => $request->kategori,
            'materi' => $request->materi,
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'mentor' => $request->mentor,
            'youtube' => $request->youtube,
            'ringkasan' => $file
            ]);
        }
        return redirect('dashboard');
    }
}
