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
        Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect('/');
    }
}
