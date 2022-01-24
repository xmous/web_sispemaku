<?php
	$page = "Nomor";
?>
@extends('layout/dashboard/main-master')
@section('title','Nomor')
@section('body')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Nomor</h3>
                <a href="{{url('nomor/create')}}" class="btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right; padding:8px;" >
                <i class="fas fa-plus-circle"></i> Tambah
                </a>
                <a href="{{url('nomor/importnomor')}}" class="btn btn-success btn-sm fancybox fancybox.iframe mr-2" style="float:right; padding:8px;" >
                <i class="fas fa-file-import"></i> Import Excel
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                {!! Form::open(['url' => 'nomor/search','files'=>true,'id'=>'cari']) !!}
                <button type="submit" class="pull-right btn btn-warning btn-sm" style="float:right;padding:8px 10px 8px 10px;margin-right:10px"> <i class="fas fa-search"> </i> Cari</button>
                <input name="search[]" value="{{$q}}" class="form-control" style="display:inline;width:275px;float:right;margin-right:10px" placeholder="Cari...">
                {!! Form::close() !!}
                <table id="example1" class="table table-striped table-responsive-md">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Pesan</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=(50 * ($data->currentPage()-1) )+1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->nomor}}</td>
                    <td>{{$d->pesan}}</td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('nomor/'.$d->id.'/edit')}}" class="btn btn-info fancybox fancybox.iframe"><i class="fas fa-eye"></i></a>
                        <a href="{{url('nomor/delete/'.$d->id)}}" class="btn btn-danger hapus"><i class="fas fa-trash" onclick=""></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php $no++; ?>
                  @endforeach
                  </tbody>
                </table>
                <?php 
                    echo $data->render();
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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

  @section('javascript')

  @endsection