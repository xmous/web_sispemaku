@extends('layout/admin/admin')
@section('title','Edit Data Pembagian')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data {{$find->nama_pembagian}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($find,['method' => 'PATCH','route'=>['pembagian.update',$find->id],'files'=>true]) !!}
                    <!-- {!! Form::open(['url' => 'nomor/update','files'=>true]) !!} -->
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_pembagian">Pembagian</label>
                                {!! Form::text('nama_pembagian',null,['class'=>'form-control','required'=>'true','id'=>'nama_pembagian']) !!}
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


