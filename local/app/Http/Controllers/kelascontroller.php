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

class kelascontroller extends Controller
{
    public function index()
    {
        $data = kelas::where('del','=','0')->where('dosen','=',Auth::user()->id)->get();
        return view('kelas.index',compact('data'));
    }

    public function create(){
        $jam = jam::where('del','=','0')->pluck('jamke','id');
        $ruang = ruang::where('del','=','0')->pluck('nama_ruang','id');
        $hari = array(
                    '1' => 'Senin',
                    '2' => 'Selasa',
                    '3' => 'Rabu',
                    '4' => 'Kamis',
                    '5' => 'Jumat',
                    '6' => 'Sabtu',
                    '7' => 'Minggu'
                );
        // dd($hari);
        return view('kelas.create', compact('jam','ruang','hari'));
    }

    public function store(Request $request)
    {
        $form = Request::all();
        $form['dosen'] = Auth::user()->id;
        // dd($form);
        
        kelas::create($form);
        Session::flash('sukses', 'Data Disimpan!');
        return redirect('kelas/create');
    }

    public function show($id)
    {
        $find = kelas::find($id);
        $jam = jam::where('del','=','0')->pluck('jamke','id');
        $ruang = ruang::where('del','=','0')->pluck('nama_ruang','id');
        $hari = array(
                    '1' => 'Senin',
                    '2' => 'Selasa',
                    '3' => 'Rabu',
                    '4' => 'Kamis',
                    '5' => 'Jumat',
                    '6' => 'Sabtu',
                    '7' => 'Minggu'
                );
        $data = kelas_mhs::where('id_kelas','=',$id)->where('del','=','0')->get();
        // dd($data);
        return view('kelas.show',compact('id','find','jam','ruang','hari','data'));
    }

    public function edit($id){
        $find = kelas::find($id);
        return view('kelas.edit',compact('id','find'));
    }

    public function delete($id){
        kelas::where('id','=',$id)->update([
            'del'=>'1'
        ]);
        return redirect('kelas');
    }

    public function update(Request $request,$id){
        $form = Request::all();
        $find = kelas::find($id);

        $find->update($form);
        return redirect('kelas/'.$id);
    }

}