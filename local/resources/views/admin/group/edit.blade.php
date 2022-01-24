@extends('layout/admin/admin')
@section('title','Edit Data Nomor')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data {{$id}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($find,['method' => 'PATCH','url'=>['admin/group',$find->id],'files'=>true]) !!}
                    <!-- {!! Form::open(['url' => 'nomor/update','files'=>true]) !!} -->
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_pembagian">Pembagian</label>
                                {!! Form::select('id_pembagian',$data,$find->id_pembagian,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Pembagian']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nama_group">Nama</label>
                                {!! Form::text('nama_group',null,['class'=>'form-control','required'=>'true','id'=>'nama_group']) !!}
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


