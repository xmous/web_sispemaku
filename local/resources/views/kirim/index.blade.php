<?php
	$page = "Broadcast";
?>
@extends('layout/dosen')
@section('title','Broadcast')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Broadcast</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['id' => 'frm_data', 'class' => 'form-horizontal form-label-left', 'enctype'=>'multipart/form-data' , 'novalidate']) !!}
                    <!-- <form method="post" id="frm_data" enctype="multipart/form-data"> -->
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                {!! Form::textarea('pesan',null,['class'=>'form-control','id'=>'pesan','rows'=>4]) !!}
                                {!! Form::hidden('nomor',null,['class'=>'form-control','id'=>'nomor']) !!}
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">Pilih Kelas</label>
                                <select name="id_kelas" id="id_kelas" class="select2 form-control" required="true">
                                    <option value="">Pilih Kelas</option>
                                    @foreach($data as $d)
                                        <option value="{{$d->id}}">{{$d->nama_kelas}}</option>
                                    @endforeach
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="media">Media</label><br>
                                <td width="30"><input type="file" name="file_dokumen" id="file_dokumen" /></td>
                                <!-- {!! Form::file('file_dokumen') !!} -->
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    {!! Form::close() !!}
                    <!-- </form> -->
                </div>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <div id="overlay">
    <img src="https://go.isostech.com/hubfs/Imported_Blog_Media/loader.gif" alt="Loading" /><br/>
    Loading...
  </div>

  @endsection

  @section('javascript')

    <script>

        
        var jumlah = 0;
        $('#id_kelas').change(function(){
            var group = $('#id_kelas').val();
            $.get(`get_nomor_count/${group}`, function(res){
                jumlah = res;
            });
            $.get(`get_nomor/${group}`, function(res){
                var nomer = [];
                for (let i = 0; i < res.nomor.length; i++) {
                    var nama = res.nomor[i].nomor;
                    nomer.push(nama);
                } 
                $('#nomor').val(nomer);
                // console.log(nomer);
            });
        })
       
        $("#frm_data").submit(function (e) {
            // let jumlah;
            $("#overlay").fadeIn("slow");
            e.preventDefault();

            var myform = $('#frm_data');
            var postData = myform.serializeArray();
            
            var pesan = postData[2].value;
            var id_kelas = postData[3].value;
            var hasil = jumlah - 10;
            var loop = Math.ceil(hasil / 10) ;
            
            var total1 = 0;
            var total2 = 10;
            var berhasil = 0;
            var gagal = 0;

            // console.log(loop);

            if(pesan.length <5 ){
                alert("Karakter pesan kurang dari 5 huruf!");
            }else{
                $.ajax({
                    type: "POST",
                    url: "{{url('kirim')}}",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                }).done(function (response) {

                    berhasil   = berhasil + response.berhasil;
                    gagal      = gagal + response.gagal;

                    var nomer_ganti = [];
                    if (response.status == 'success') {
                        for (var i = 0; i < loop; i++) {
                            let nomers = [];
                            for (let j = total1; j < total2; j++) {
                                if (j < hasil) {
                                    nomers.push(response.nomor[j]);
                                }
                            }
                            // console.log(nomers);
                            var respon = putar(nomers, response.pesan, response.send);

                            berhasil   = berhasil + respon.berhasil;
                            gagal      = gagal + respon.gagal;

                            console.log(berhasil);
                            total1 = total1+10;
                            total2 = total2+10;
                        }

                        //masuk ke tabel pesanhistoris
                        console.log(response.message);
                        console.log(response.media);
                        console.log(berhasil);
                        console.log(gagal);
                        // simpan(response.message, response.media, berhasil, gagal);
                        $("#overlay").fadeOut("slow");

                        alert("Sukses Terkirim = "+berhasil+" Gagal Terkirim = "+gagal);
                        $('.close').click();
                        window.location.href="{{url('kirim')}}";
                    } else {
                        $("#overlay").fadeOut("slow");
                        alert(response.ket);
                    }
                });
            }

            function putar(nomor, pesan, send) {
                let result;
                $.ajax({
                    url: "{{url('multikirim')}}",
                    type: "post",
                    data: { "_token":'{{ csrf_token() }}',"nomor": nomor, "pesan": pesan, "send": send},
                    async: false,
                    success: function(response) {
                        result = response;
                        // console.log(plus);
                    }
                });
                return result;
            }

            function simpan(pesan, media, berhasil, gagal) {
                let jawaban;
                $.ajax({
                    url: "{{url('simpankirim')}}",
                    type: "post",
                    data: { 
                        "_token":'{{ csrf_token() }}',
                        "id_account": '{{Auth::user()->id}}', 
                        "pesan": pesan, 
                        "media": media, 
                        "berhasil": berhasil, 
                        "gagal": gagal
                        },
                    async: false,
                    success: function(response) {
                        jawaban = response;
                        // console.log(plus);
                    }
                });
                return jawaban;
            }
        });
    </script>

  @endsection
