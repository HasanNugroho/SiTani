<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function getTani()
    {
        return view('backend.tani');
    }
    public function getKebun()
    {
        return view('backend.kebun');
    }
    public function getHidro()
    {
        return view('backend.hidro');
    }
    public function storeHidro(Request $request)
    {

        dd($request);
    }
}
