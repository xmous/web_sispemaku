@extends('layout/admin/admin')
@section('title','Tambah Akun')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Akun</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['id' => 'frm_data', 'files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                {!! Form::text('nama',null,['class'=>'form-control','required'=>'true','id'=>'nama']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor Telepon/WA</label>
                                {!! Form::text('nomor',null,['class'=>'form-control','required'=>'true','id'=>'nomor']) !!}
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                {!! Form::text('username',null,['class'=>'form-control','required'=>'true','id'=>'username']) !!}
                            </div>
                            <div class="form-group">
                                <label for="id_marketing">Marketing</label>
                                {!! Form::select('id_marketing',$data2,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Marketing']) !!}
                            </div>
                            <div class="form-group">
                                <label for="id_pembagian">Pembagian</label>
                                {!! Form::select('id_pembagian',$data,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Kota']) !!}
                            </div>
                            <!-- <div class="form-group">
                                <label for="id_pembagian">Pembagian</label>
                                {{ Form::radio('result', 'buy' , true) }} 
                                {{ Form::radio('result', 'sell' , false) }}
                            </div> -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                {!! Form::password('password',['class'=>'form-control','required'=>'true','id'=>'password']) !!}
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    {!! Form::close() !!}
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

  @endsection

  @section('javascript')

    <script>
        $("#frm_data").submit(function (e) {
            e.preventDefault();

            var myform = $('#frm_data');
            var postData = myform.serializeArray();
            console.log(postData);
            var pass = postData[7].value;
            if(pass.length <6){
                alert("Panjang password Dibawah 6");
            }else{
                    $.ajax({
                        type: "POST",
                        url: "{{url('akun')}}",
                        data: postData,
                        dataType: 'json'
                    }).done(function (response) {
                        if (response.status == 'success') {
                            alert(response.ket);
                            $('.close').click();
                            window.location.href="{{url('akun/create')}}";
                        } else {
                            alert(response.ket);
                        }
                    });
            }
        });
    </script>

  @endsection
