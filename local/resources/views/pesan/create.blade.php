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
                    {!! Form::open(['url' => 'nomor','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                {!! Form::text('nama',null,['class'=>'form-control','required'=>'true','id'=>'nama']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor</label>
                                {!! Form::text('nomor','62',['class'=>'form-control','required'=>'true','id'=>'nomor']) !!}
                            </div>
                            <div class="form-group">
                                <label for="pesan">Pesan</label>
                                {!! Form::textarea('pesan',null,['class'=>'form-control','id'=>'pesan','rows'=>3]) !!}
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


