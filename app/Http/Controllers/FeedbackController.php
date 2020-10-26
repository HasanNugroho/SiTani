<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function show()
    {
        $tanggapan = Feedback::latest()->paginate(6);
        return $tanggapan;
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'message' => 'required|min:5',
        ]);
        $avatar = ['avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png'];
        $a = array_rand($avatar, 1);
        Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message,
            'gambar' => $avatar[$a],
        ]);
        return redirect('/');
    }
}
