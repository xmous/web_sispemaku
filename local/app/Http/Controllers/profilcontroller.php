<?php

namespace App\Http\Controllers;

use Request;
use Requestone;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
// use Illuminate\Http\Request;

use App\User;
use Validator;
use Session;

class profilcontroller extends Controller
{

    public function index()
    {
        $id = Auth::user()->id;
        $find = User::find($id);
        return view('profil.index',compact('id','find'));
    }

    public function update(Request $request,$id){
        $form = Request::all();
        $find = User::find($id);
        $form['pas'] = sha1($form['pas']);
        // dd($form);

        if ($form['pas'] == $find->password) {
            $find->update($form);
            Session::flash('sukses', 'Data di Update!');
        }else {
            Session::flash('gagal', 'Password Salah!');
        }

        return redirect('profil');
    }

    public function ubahpassword()
    {
        return view('profil.password');
    }
    
    public function password(Request $request)
    {
      
        $password = Auth::user()->password;
        $form = Request::all();
        $passlama = sha1($form['passlama']);

        $validate = array(
            'passlama' => 'required',
            'pass1' => 'required',
            'pass2' => 'required'
        );
        $validator = Validator::make(Request::all(), $validate);

        if ($validator->fails()) {
            $a['ket'] = 'GAgal';
            $a['status'] = 'danger';
        }

        if ($passlama == $password) {
            if ($form['pass1'] == $form['pass2']) {
                $new = sha1($form['pass1']);
                // dd($new);
                User::where('id','=',Auth::user()->id)->update([
                    'password'=> $new
                ]);
                $a['ket'] = 'BErhasil';
                $a['status'] = 'success';
            }
        }else{
            $a['ket'] = 'Pass Lama SAlah';
            $a['status'] = 'danger';
        }
       
        if(Request::ajax()){
            header('Content-Type: application/json');
            return json_encode($a);
        }
      //  return redirect('password');
    }

    public function teskirim()
    {
        return view('profil.kirim');
    }

    public function kirimpesan(Request $request)
    {
        $form = Request::all();
        $berhasil = 0;
        $gagal = 0;

        $sender = Auth::user()->api_key;
        // dd($sender);
        $number = $form['telepon'];
        if ($form['media']==null) {
            $send = 'send-message';
            $pesan = '&message='.utf8_decode($form['pesan']);
        }else {
            $send = 'send-media';
            $pesan = '&caption='.$form['pesan'].'&file='.$form['media'];
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/'.$send,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => '&number='.$number.$pesan,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $tes = json_decode($response, TRUE);
        // dd($tes);
        if ($tes['status'] == true) {
            // $berhasil++;
            Session::flash('sukses', 'Pesan Telah Dikirim!');
        }else {
            Session::flash('gagal', 'Pesan Gagal Dikirim!');
            // $gagal++;
        }
        $tes['status'] = false;
        return redirect('teskirim');
        
    }

}
