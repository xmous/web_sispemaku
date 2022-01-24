<?php

namespace App\Http\Controllers;

use Request;
use Requestone;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\nomorsimport;
// use Illuminate\Http\Request;

use App\User;
use App\nomors;

class nomorcontroller extends Controller
{

    public function importnomor()
    {
        return view('nomor.import');
    }

    public function import_excel(Request $Request)
    {
        $form = Request::file('file_dokumen');
        $data = Excel::toArray(new nomorsimport(), $form);
        // dd($data);
        foreach ($data[0] as $d) {
            $nama = $d[1];
            $nomor = preg_replace("/[a-zA-Z]/", "", $d[2]);
            $pesan = $d[3];



            if (strlen($nomor) > 9) {

                
                $nomor = str_replace("+","",$nomor);
                $nomor = str_replace("-","",$nomor);
                $nomor = str_replace(" ","",$nomor);

               $cekdata =  substr($nomor,0,1);

               if($cekdata != '0' && $cekdata != '6'){
                    $nomor = "0".$nomor;
               }

               nomors::create([
                   'nama'=>$nama,
                   'nomor'=>$nomor,
                   'pesan'=>$pesan,
                   'make_by'=>Auth::User()->id
               ]);
            }

        }
     
        return redirect('nomor/importnomor');
    }

    public function index()
    {
        $q= "";
        $data = nomors::where('del','=','0')->where('make_by','=',Auth::user()->id)->paginate(50);
        return view('nomor.index',compact('data','q'));
    }

    public function show($search){
        // dd($search);
        if($search == '0'){
            // set search = 0 / null
            $q = '0';
        }else{
            $q = $search;
        }
        
        $data = DB::table('nomor')
                    ->where('del','=','0')
                    ->where('make_by','=',Auth::user()->id);
        // $data = DB::table('nomor as a')->select('a.*','b.username as pembuat')
        //         ->where('a.del','=','0')
        //         ->leftjoin('account as b','a.make_by','=','b.id');
        
        // tambah if
        if($q != '0'){
            $data = $data->where(function($query) use ($q){
                    $query->where('nama','like','%'.$q.'%')
                        ->orwhere('nomor','like','%'.$q.'%')
                        ->orwhere('pesan','like','%'.$q.'%');
            });
        }
        $data = $data->paginate(50);

        if($q == 0){
            $q = '';
        }
        // dd($data);
        return view('nomor.index',compact('data','q'));
    }

    public function search(Request $request){
        $forms = Request::all();
        if($forms['search'][0] == ''){
            $forms['search'][0] = 0;
        }
        // tambah data
        return redirect('nomor/'.$forms['search'][0]);
    }

    public function create(){
        return view('nomor.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'keyword' => 'required|min:5|max:10',
        //     'response' => 'required|min:5|max:10',
        // ]);
        $form = Request::all();
        $form['make_by'] = Auth::user()->id;
        // dd($form);
        
        nomors::create($form);
        return redirect('nomor/create');
    }

    public function edit($id){
        $find = nomors::find($id);
        return view('nomor.edit',compact('id','find'));
    }

    public function update(Request $request,$id){
        $form = Request::all();
        $find = nomors::find($id);
        $form['make_by'] = Auth::user()->id;

        $find->update($form);
        return redirect('nomor/'.$id.'/edit');
    }

    public function delete($id){
        nomors::where('id','=',$id)->update([
            'del'=>'1'
        ]);
        return redirect('nomor');
    }
}
