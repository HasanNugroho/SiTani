<?php

namespace App\Http\Controllers;
use App\Models\bab;
use App\Models\materi;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function getTani()
    {
        $bab = bab::where('kategori', 'pertanian')->get();
        return view('backend.tani')->with(compact('bab'));
    }
    public function getKebun()
    {
        $bab = bab::where('kategori', 'perkebunan')->get();
        return view('backend.kebun')->with(compact('bab'));
    }
    public function getHidro()
    {
        $bab = bab::where('kategori', 'hidroponik')->get();
        return view('backend.hidro')->with(compact('bab'));
    }
    public function storeHidro(Request $request)
    {

        dd($request);
    }
}
