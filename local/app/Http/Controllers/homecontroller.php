<?php

namespace App\Http\Controllers;

use Request;
use Requestone;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;

use App\User;
use App\pesanhistoris;

class homecontroller extends Controller
{
    //
    public function index(){
        return redirect('login');
    }
    public function home()
    {
        $kelas    = DB::table('kelas')
                    ->where('del','=','0')
                    ->where('dosen', Auth::user()->id)
                    ->count();
        // dd($autoreply);
        return view('home.home', compact('kelas'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function cek($api, $nim)
    {
        // dd($nim);
        // $user = User::where('del','=','0')->where('id','=',Auth::User()->id)->first();
        User::where('nim','=',$nim)->update([
            'api_key'=>$api
        ]);
        return redirect()->away('http://localhost:8000?id_user='.$nim);
    }
}
