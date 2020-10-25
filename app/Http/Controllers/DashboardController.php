<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;
use App\Models\Comment;
use App\Models\materi;



class DashboardController extends Controller
{
    public function index()
    {
        $feeds = Feedback::count();
        $users = User::count();
        $materi = materi::count();
        return view('backend.home', ['users' => $users, 'feed' => $feeds, 'materi' => $materi]);
    }
    public function getUser()
    {
        $users = User::get();
        return view('backend.user', ['users' => $users]);
    }
    public function destroy(Request $request)
    {
        $id = $request['id'];
        User::destroy($id);
        return redirect()->back();
    }

    public function getKelas(Request $request)
    {
        return view('backend.kelas');
    }

    public function getTanggapan()
    {
        $feeds = Feedback::get();
        return view('backend.tanggapan', ['feeds' => $feeds]);
    }
    public function getKomen()
    {
        $comments = Comment::get();
        return view('backend.komen', ['comments' => $comments]);
    }
    public function postKomen(Request $request)
    {
        Comment::create([
            'email' => $request->email,
            'comment' => $request->komen,
            'gambar' => 'ok.jpg',
            'post_id' => 'asldlaks',
        ]);
    }

    public function deleteKomen(Request $request)
    {
        Comment::destroy($request->id);
        return redirect()->back();
    }
}
