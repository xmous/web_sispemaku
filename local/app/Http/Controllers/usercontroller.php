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
use App\pembagian;
use App\histories;

class usercontroller extends Controller
{
    //
    private function __GenerateRandomName($length = 5) {
        $validCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefdhijklmnopqrstuvwxyz";
        $validCharNumber = strlen($validCharacters);
        $result = "";

        for ($iStr = 0; $iStr < $length; $iStr++) {
            $index = mt_rand(0, $validCharNumber - 1);
            $result .= $validCharacters[$index];
        }

        return $result;
    }

    public function index(){
        $id_marketing = Auth::user()->id;
        $data = User::where('del','=','0')->where('id_marketing','=',$id_marketing)->get();
        // dd($data);
        // $data = DB::table('account')
        //         ->join('pembagian', 'pembagian.id', '=', 'account.id_pembagian')
        //         ->where('id_marketing','=',$id_marketing)
        //         ->get();
        return view('user.index',compact('data'));
    }

    public function create(){
        $data = pembagian::pluck('nama_pembagian','id');
        $data2 = DB::table('landings')->where('kelompok','=','price')->pluck('judul','id');
        // dd($data2);

        return view('user.create',compact('data','data2'));
    }

    public function store(Request $request){
        $api_key = sha1(date("Y-m-d H:i:s") . rand(100000, 999999));
        $status = 'nonaktif';
        $id_marketing = Auth::user()->id;

        $form = Request::all();
        $form['password'] = sha1('12345678');
        $form['api_key'] = $api_key;
        $form['status'] = $status;
        $form['id_marketing'] = $id_marketing;
        $form['tgl_berlanggan'] = date("Y-m-d");
        $form['tgl_berakhir'] = date('Y-m-d');
        // dd($form);
        User::create($form);
        return redirect('user');
    }

    private function cektanggal($tgl)
    {
        $tgl = strtotime($tgl);
        $now = strtotime(now());
        echo $now.'<br>';
        echo $tgl.'<br>';
        if ($tgl >= $now) {
            $return = 0;
        }
        else {
            $return = 1;
        }
        // dd($return);
        return $return;
    }

    public function show($id){
        $find = User::find($id);
        $histori = histories::where('del','=','0')->where('id_account','=',$id)->orderby('tgl_mulai','DESC')->get();
        return view('user.show',compact('id','find','histori'));
    }

    public function struk($id){
        $find = User::where('id','=',$id)->first();
        $data2 = DB::table('landings')->where('kelompok','=','price')->pluck('judul','id');
        return view('user.struk',compact('find','data2'));
    }

    public function kirimstruk(Request $request)
    {
        $form = Request::all();
        // dd($form);
        $cek = DB::table('account')->where('username','=',$form['username'])->first();
        $tes = $this->cektanggal($cek->tgl_berakhir);
        // dd($tes);

        if ($tes == 1) {
            $now = date('Y-m-d');
        }else {
            $now = $cek->tgl_berakhir;
        }
        // dd($now);

        $paket = $form['id_paket'];

        if ($paket == 2) {
            $bulan = '+1 month';
        } elseif ($paket == 3) {
            $bulan = '+3 month';
        } elseif ($paket == 4) {
            $bulan = '+6 month';
        }

        $form['tgl_akhir'] = date('Y-m-d', strtotime($bulan, strtotime($now)));
        // dd($form['tgl_akhir']);
        
        $form['tgl_mulai']= $now;
        $form['id_account'] = $cek->id;
        $form['id_marketing'] = Auth::user()->id;
        // dd($form);

        if(Request::hasFile('file_dokumen')) {
            $file = Request::file('file_dokumen');
            $form['bukti'] = $this->__GenerateRandomName()."-".$file->getClientOriginalName();
            $form['link'] = "-";
           // dd($form);
            histories::create($form);
            $file->move("asset/upload",$form['bukti']);

            User::where('id','=',$cek->id)->update([
                'tgl_berakhir'=>$form['tgl_akhir'],
                'status'=>'aktif'
            ]);

        }
      return redirect('user');
    }

    public function detailstruk($id)
    {
        // $find = histories::where('id','=',$id)->first();
        $find = histories::where('id','=',$id)->first();
        // dd($find);
        $data2 = DB::table('landings')->where('kelompok','=','price')->pluck('judul','id');
        // dd($find);
        return view('user.detailstruk',compact('find','data2'));
    }

    public function updatestruk(Request $request){
        
        $form = Request::all();
        // dd($form);
        $cek = DB::table('account')->where('username','=',$form['username'])->first();

        $paket = $form['id_paket'];

        if ($paket == 2) {
            $bulan = '+1 month';
        } elseif ($paket == 3) {
            $bulan = '+3 month';
        } elseif ($paket == 4) {
            $bulan = '+6 month';
        }

        $form['tgl_akhir'] = date('Y-m-d', strtotime($bulan, strtotime($form['tgl_mulai'])));
        // dd($form['tgl_akhir']);
        
        $form['id_account'] = $cek->id;
        $form['id_marketing'] = Auth::user()->id;
        // dd($form);

        if(Request::hasFile('file_dokumen')) {
            $file = Request::file('file_dokumen');
            $form['bukti'] = $this->__GenerateRandomName()."-".$file->getClientOriginalName();
            $file->move("asset/upload",$form['bukti']);
        }else {
            $form['bukti'] = $form['file_temp'];
        }
            histories::create($form);

            User::where('id','=',$cek->id)->update([
                'tgl_berakhir'=>$form['tgl_akhir'],
                'status'=>'aktif'
            ]);

            histories::where('id','=',$form['id_temp'])->update([
                'del'=>'1'
            ]);
      return redirect('user/'.$form['id_account']);
    }
}