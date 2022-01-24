@extends('layout/admin/admin')
@section('title','Edit Akun')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Akun {{$find->username}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($find,['method' => 'PATCH','route'=>['akun.update',$find->id],'files'=>true]) !!}
                    <!-- {!! Form::open(['url' => 'nomor/update','files'=>true]) !!} -->
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                {!! Form::text('username',null,['class'=>'form-control','readonly'=>'true','id'=>'username']) !!}
                            </div>
                            <div class="form-group">
                                <label for="tgl_berlanggan">Mulai Berlangganan</label>
                                {!! Form::text('tgl_berlanggan',null,['class'=>'form-control','readonly'=>'true','id'=>'tgl_berlanggan']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                {!! Form::text('nama',null,['class'=>'form-control','required'=>'true','id'=>'nama']) !!}
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor</label>
                                {!! Form::text('nomor',null,['class'=>'form-control','required'=>'true','id'=>'nomor']) !!}
                            </div>
                            <div class="form-group">
                                <label for="tgl_berakhir">Tanggal Berakhir</label>
                                {!! Form::date('tgl_berakhir', $find->tgl_berakhir,['class'=>'form-control','required'=>'true','id'=>'tgl_berakhir']) !!} 
                            </div>
                            <div class="form-group">
                                <label for="id_marketing">Marketing</label>
                                {!! Form::select('id_marketing',$data2,$find->id_marketing,['class'=>'form-control','required'=>'true','placeholder'=>'Marketing','id'=>'id_marketing']) !!} 
                            </div>
                            <div class="form-group">
                                <label for="id_pembagian">Pembagian</label>
                                {!! Form::select('id_pembagian',$data3,$find->id_pembagian,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Kota','id'=>'id_pembagian']) !!} 
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label>
                                {!! Form::select('level',$data4,$find->level,['class'=>'form-control','required'=>'true','placeholder'=>'Level','id'=>'level']) !!} 
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                {!! Form::select('status',$data5,$find->status,['class'=>'form-control','required'=>'true','placeholder'=>'Status','id'=>'status']) !!} 
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                {!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}
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


