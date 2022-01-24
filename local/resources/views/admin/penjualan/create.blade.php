@extends('layout/admin/admin')
@section('title','Tambah Paket')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Paket</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => 'admin/penjualan','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_account">Akun</label>
                                {!! Form::select('id_account',$user,null,['class'=>'select2 form-control','style'=>'width:100%','required'=>'true','placeholder'=>'Pilih Akun','id'=>'id_account']) !!}
                            </div>
                            <div class="form-group">
                                <label for="paket">Paket</label>
                                {!! Form::select('id_paket',$data,null,['class'=>'form-control','required'=>'true','placeholder'=>'Pilih Paket','id'=>'paket']) !!}
                            </div>
                            <div class="form-group">
                                <label for="file">Bukti Pembayaran</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        {!! Form::file('file_dokumen') !!}
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


