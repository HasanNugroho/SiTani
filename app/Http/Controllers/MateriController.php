<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\materi;
use Illuminate\Support\Str;

class MateriController extends Controller
{
    public function player($slug)
    {
        $player = materi::where('slug', $slug)->get();
        return $player;
    }
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
            'ringkasan' => 'required',
        ]);

            $extensi = $request->file('ringkasan')->extension();
            $imgname = Str::random(15).'.'.$extensi;
            $file = Storage::putFileAs('public/data', $request->file('ringkasan'), $imgname);

        materi::create([
            'kategori' => $request->kategori,
            'bab' => $request->bab,
            'materi_ke' => $request->materi_ke,
            'judul' => $request->judul,
            'post_id' => Str::random(5),
            'slug' => Str::slug($request->judul),
            'mentor' => $request->mentor,
            'youtube' => $request->youtube,
            'ringkasan' => $imgname,
        ]);
        return redirect()->back();
    }
    public function hapus($slug)
    {
        $data = materi::where('slug', $slug)->first();
        Storage::delete($data['ringkasan']);
        $data->delete();
        return redirect()->back();
    }
    public function edit($slug)
    {
        $edit = materi::where('slug', $slug)->first();
        return view('backend.update', compact('edit'));
    }
    public function update(Request $request)
    {
        $data = [
            'materi_ke' => 'required',
            'kategori' => 'required',
            'bab' => 'required',
            'judul' => 'required',
            'mentor' => 'required',
            'youtube' => 'required',
        ];
        if ($request->file('ringkasan')) {
            $data['ringkasan'] = 'required';
        }
        $request->validate($data);

        $targetItem = materi::where('id', $request->id)->first(); //memilih data yang akan diupdate
        if ($request->file('ringkasan')) {
            Storage::delete($targetItem->ringkasan); //hapus data lama

            $extensi = $request->file('ringkasan')->extension();
            $imgname = Str::random(15).'.'.$extensi;
            $file = Storage::putFileAs('public/data', $request->file('ringkasan'), $imgname);//tambah file baru

            $update['ringkasan'] = $file;
        }
        $update['materi_ke'] = $request->get('materi_ke');
        $update['kategori'] = $request->get('kategori');
        $update['bab'] = $request->get('bab');
        $update['judul'] = $request->get('judul');
        $update['mentor'] = $request->get('mentor');
        $update['youtube'] = $request->get('youtube');

        materi::where('id', $request->id)->update($update);
        return redirect()->back();
    }
}
