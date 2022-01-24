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
use App\jam;
use App\kelas;
use App\ruang;
use App\kelas_mhs;

use Validator;
use Session;

class kelasmhscontroller extends Controller
{
    public function show($id)
    {
        $mhs = User::where('del','=','0')->where('level','=','3')->get();
        // dd($mhs);
        return view('kelas.kirimmhs',compact('mhs','id'));
    }
    
    public function store(Request $request)
    {
        $form = Request::all();
        
        kelas_mhs::create($form);
        Session::flash('sukses', 'Data Disimpan!');
        return redirect('kelasdetail/'.$form['id_kelas']);
    }

    public function delete($id, $cek){
        kelas_mhs::where('id','=',$id)->update([
            'del'=>'1'
        ]);
        return redirect('kelas/'.$cek);
    }


}