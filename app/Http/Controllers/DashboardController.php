<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Feedback;



class DashboardController extends Controller
{
    public function index()
    {
        $feeds = Feedback::count();
        $users = User::count();
        return view('backend.home', ['users' => $users, 'feed' => $feeds]);
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

    public function getKelas(Request $request){eturn view('backend.kelas');}

    public function getTanggapan()
    {
        $feeds = Feedback::get();
        return view('backend.tanggapan', ['feeds' => $feeds]);
    }


   
}
