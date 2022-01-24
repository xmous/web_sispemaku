@extends('layout/dashboard/main-master')
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
                    {!! Form::model($find,['method' => 'PATCH','route'=>['nomor.update',$find->id],'files'=>true]) !!}
                    <!-- {!! Form::open(['url' => 'nomor/update','files'=>true]) !!} -->
                    {{ csrf_field() }}
                        <div class="card-body">
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
                                <label for="pesan">Pesan</label>
                                {!! Form::textarea('pesan',null,['class'=>'form-control','id'=>'pesan','rows'=>3]) !!}
                                @error('pesan')
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


