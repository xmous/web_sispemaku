@extends('layout/dosen')
@section('title','Tambah Kelas')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-info mt-2">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Kelas</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => 'kelas','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                {!! Form::text('nama_kelas',null,['class'=>'form-control','required'=>'true','id'=>'nama_kelas']) !!}
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari</label>
                                {!! Form::select('hari',$hari,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Hari']) !!}
                            </div>
                            <div class="form-group">
                                <label for="jam_mulai">Jam Mulai</label>
                                {!! Form::select('jam_mulai',$jam,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Jam Mulai']) !!}
                            </div>
                            <div class="form-group">
                                <label for="jam_akhir">Jam Berakhir</label>
                                {!! Form::select('jam_akhir',$jam,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Jam Akhir']) !!}
                            </div>
                            <div class="form-group">
                                <label for="ruangan">Ruang</label>
                                {!! Form::select('ruangan',$ruang,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Ruang']) !!}
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


