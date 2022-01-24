<?php
	$page = "Pengaturan";
	$subpage = "Password";
?>
@extends('layout/dosen')
@section('title','Password')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">{{Auth::user()->username}}</h3>
                    </div>

                    @if ($message = Session::get('gagal'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['id' => 'frm_data', 'class' => 'form-horizontal form-label-left', 'novalidate']) !!}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="password">Masukkan Password Lama</label>
                                {!! Form::password('passlama',['class'=>'form-control','id'=>'password']) !!}
                               
                            </div>
                            <div class="form-group">
                                <label for="password">Masukkan Password Baru</label>
                                {!! Form::password('pass1',['class'=>'form-control','id'=>'pass1']) !!}
                               
                            </div>
                            <div class="form-group">
                                <label for="password">Ulangi Password Baru</label>
                                {!! Form::password('pass2',['class'=>'form-control','id'=>'pass2']) !!}
                               
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button class="btn btn-success" type="submit">SIMPAN</button>
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
        var pass = postData[2].value;
        var pass1 = postData[3].value;
        if((pass.length <6 || pass1.length <6) || pass != pass1){
            alert("Pass Baru Tidak Sama atau panjang Dibawah 6");
        }else{
                $.ajax({
                    type: "POST",
                    url: "{{url('password')}}",
                    data: postData,
                    dataType: 'json'
                }).done(function (response) {
                    if (response.status == 'success') {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Signed in successfully'
                        })
                        // alert(response.ket);
                        // $('.close').click();
                        // window.location.href="{{url('password')}}";
                        $('#password').val('');
                    } else {
                        alert(response.ket);
                    }
                });
        }
    });


    </script>


  @endsection


