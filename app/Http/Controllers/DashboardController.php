<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;
use App\Models\Comment;
use App\Models\bab;
use App\Models\materi;



class DashboardController extends Controller
{
    public function index()
    {
        $feeds = Feedback::count();
        $users = User::count();
        $bab = bab::count();
        $materi = materi::count();
        $comment = Comment::count();
        return view('backend.home', ['users' => $users, 'feed' => $feeds, 'bab' => $bab, 'materi' => $materi, 'comment' => $comment]);
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
        return redirect()->back()->with(session()->flash('status', 'Data Berhasil Dihapus'));
    }

    public function getKelas(Request $request)
    {
        $tani = bab::where('kategori', 'pertanian')->count();
        $kebun = bab::where('kategori', 'perkebunan')->count();
        $hidro = bab::where('kategori', 'hidroponik')->count();
        return view('backend.kelas', ['tani' => $tani, 'kebun' => $kebun, 'hidro' => $hidro]);
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
        $avatar = ['avatar1.svg', 'avatar2.svg', 'avatar.svg'];
        $a = array_rand($avatar, 1);

        Comment::create([
            'email' => $request->email,
            'comment' => $request->komen,
            'gambar' =>  $avatar[$a],
            'post_id' => $request->post_id,
        ]);
        return redirect()->back();
    }
    public function postKomenAdmin(Request $request)
    {
        Comment::create([
            'email' => $request->email,
            'comment' => $request->komen,
            'gambar' =>  '/assets/admin.svg',
            'post_id' => $request->post_id,
        ]);
        return redirect('/dashboard/komentar');
    }

    public function deleteKomen(Request $request, $id)
    {
        Comment::destroy($id);
        return redirect()->back();
    }
    public function delTanggapan(Request $request, $id)
    {
        Feedback::destroy($id);
        return redirect()->back()->with(session()->flash('status', 'Data Berhasil Dihapus'));
    }
    public function balas($id)
    {
        $komen = Comment::where('id', $id)->get();
        return view('backend.balas-komen', ['komen' => $komen]);
    }
}
