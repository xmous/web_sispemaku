<?php
	$page = "Tes Kirim";
?>
@extends('layout/dosen')
@section('title','Tes Kirim')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tes Kirim</h3>
                    </div>
                    @if ($message = Session::get('sukses'))
                        <div class="alert alert-info mt-2">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('gagal'))
                        <div class="alert alert-danger mt-2 alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => 'teskirim','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="telepon">Nomor Tujuan*</label>
                                {!! Form::text('telepon',null,['class'=>'form-control','required'=>'true','id'=>'telepon','placeholder'=>'62XXXXXX']) !!}
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan*</label>
                                {!! Form::text('pesan',null,['class'=>'form-control','required'=>'true','id'=>'pesan']) !!}
                            </div>
                            <div class="form-group">
                                <label for="media">Media (url)</label>
                                {!! Form::text('media',null,['class'=>'form-control','id'=>'media']) !!}
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


