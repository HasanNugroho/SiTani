<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        $tanggapan = Feedback::all();
        return view('public.js.components.dashboard.tanggapan', compact('tanggapan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'message' => 'required|min:5',
        ]);
        Feedback::create([
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect('/');
    }
}
