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

class kirimcontroller extends Controller
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
        $data = kelas::where('dosen','=',Auth::user()->id)->where('del','=','0')->get();
        return view('kirim.index',compact('data'));
    }

    public function get_nomor($id){
    
        if(Request::ajax()){
            $data = DB::table('kelas_mhs')
            ->join('akun', 'kelas_mhs.id_mhs', '=', 'akun.id')
            ->where('kelas_mhs.del','=','0')
            ->where('akun.del','=','0')
            ->where('kelas_mhs.id_kelas','=',$id)
            ->get();
            // dd($data);
            return response()->json(['nomor' => $data]);
        }
       }
       public function get_nomor_count($id){
       
        if(Request::ajax()){
            
            $data = DB::table('kelas_mhs')
            ->join('akun', 'kelas_mhs.id_mhs', '=', 'akun.id')
            ->where('kelas_mhs.del','=','0')
            ->where('akun.del','=','0')
            ->where('kelas_mhs.id_kelas','=',$id)
            ->count();
            
            return response()->json($data);
        }
    }
    
    public function store(Request $request){
        $berhasil = 0;
        $gagal = 0;

        $form = Request::all();
        $nomor=explode(",", $form['nomor']);
        $cek = count($nomor);
        if ($cek >= 10) {
            $cek = 10;
        }
        
        if(Request::hasFile('file_dokumen')) {
                $validation = Validator::make(Request::all(), [
                    'file_dokumen' => 'required|image|mimes:jpeg,png,jpg|max:2048'
                   ]);
        
                if($validation->passes()){
                    $file = Request::file('file_dokumen');
                    $form['media1'] = $this->__GenerateRandomName()."-".$file->getClientOriginalName();
                    $file->move("assets/upload",$form['media1']);
                    $form['media'] = asset('assets/upload/'.$form['media1']);
                }else {
                    $form['media'] = 'noformat';
                }
        }else {
            $form['media'] = null;
            $form['media1'] = null;
        }
    
        // $nomors = DB::table('detail_group')
        //     ->join('nomor', 'detail_group.id_nomor', '=', 'nomor.id')
        //     ->where('detail_group.id_group','=',$form['id_paket'])
        //     ->get();
            
        $sender = Auth::user()->api_key;
        if ($form['media'] == 'noformat') {
            $a['ket'] = 'Format media salah!';
            $a['status'] = 'danger';
        }else {

            if ($form['media']==null) {
                $send = 'send-message';
                $pesan = '&message='.utf8_decode($form['pesan']);
            }else {
                $send = 'send-media';
                $pesan = '&caption='.utf8_decode($form['pesan']).'&file='.$form['media'];
            }
            
            // foreach ($nomors as $no) {
            
            for ($i=0; $i < $cek; $i++) { 
    
                $number = $nomor[$i];
    
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
    
                if ($tes['status'] == true) {
                    $berhasil++;
                }else {
                    $gagal++;
                }
                $tes['status'] = false;
                unset($nomor[$i]);
            }

            $a['berhasil'] = $berhasil;
            $a['gagal'] = $gagal;
            $a['pesan'] = $pesan;
            $a['send']  = $send;

            $a['message'] = utf8_decode($form['pesan']);
            // dd($form['media1']);
            $a['media'] = $form['media1'];
            $a['status'] = 'success';
        }
        $cek = 0;
        foreach ($nomor as $no) {
            $a['nomor'][$cek] = $no;
            $cek++;
        }
        
        // Session::flash('pesan', 'Berhasil = '.$berhasil.' Gagal = '.$gagal);

        if(Request::ajax()){
            header('Content-Type: application/json');
            return json_encode($a);
        }

        // return redirect('kirim');
    }

    public function multikirim(Request $request)
    {
        if(Request::ajax()){

            $berhasil = 0;
            $gagal = 0;

            $sender = Auth::user()->api_key;

            $data = Request::all();

            foreach ($data['nomor'] as $no ) {
                $nomerss = $no;
                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://localhost:8000/'.$data['send'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '&number='.$nomerss.$data['pesan'],
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/x-www-form-urlencoded'
                ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                $tes = json_decode($response, TRUE);

                if ($tes['status'] == true) {
                    $berhasil++;
                }else {
                    $gagal++;
                }
                $tes['status'] = false;
            }
            $a['berhasil'] = $berhasil;
            $a['gagal'] = $gagal;

            return response()->json($a);
        }
    }

    public function simpankirim(Request $request)
    {
        if (Request::ajax()) {
            $form = Request::all();
            // dd($form);
            pesanhistoris::create($form);
            
        }
    }

}
