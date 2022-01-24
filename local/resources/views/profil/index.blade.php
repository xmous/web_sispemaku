<?php
	$page = "Pengaturan";
	$subpage = "Profil";
?>
@extends('layout/dosen')
@section('title','Profil')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Profil {{$find->username}}</h3>
                    </div>
                    @if ($message = Session::get('sukses'))
                    <div class="alert alert-info mt-2">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('gagal'))
                    <div class="alert alert-danger mt-2">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($find,['method' => 'PATCH','route'=>['profil.update',$find->id],'files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                {!! Form::text('nim',null,['class'=>'form-control','readonly'=>'true','id'=>'nim']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                {!! Form::text('nama',null,['class'=>'form-control','required'=>'true','id'=>'nama']) !!}
                                @error('nama')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor</label>
                                {!! Form::text('nomor',null,['class'=>'form-control','required'=>'true','id'=>'nomor']) !!}
                                @error('nomor')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                {!! Form::textarea('alamat',null,['class'=>'form-control','required'=>'true','id'=>'alamat','rows'=>3]) !!}
                                @error('alamat')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pas">Masukkan Password</label>
                                {!! Form::password('pas',['class'=>'form-control','required'=>'true','id'=>'pas']) !!}
                                @error('pas')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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


