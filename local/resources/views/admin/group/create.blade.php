@extends('layout/admin/admin')
@section('title','Tambah Data Nomor')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => 'admin/group','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_pembagian">Pembagian</label>
                                {!! Form::select('id_pembagian',$data,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Pembagian']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                {!! Form::text('nama',null,['class'=>'form-control','required'=>'true','id'=>'nama']) !!}
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="jumlah">Jumlah</label>
                                        {!! Form::text('jumlah','1',['class'=>'form-control','required'=>'true','id'=>'jumlah']) !!}
                                    </div>
                                    <div class="col-6">
                                        <label for="awal">Awal</label>
                                        {!! Form::text('awal','1',['class'=>'form-control','required'=>'true','id'=>'awal']) !!}
                                    </div>
                                </div>
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


