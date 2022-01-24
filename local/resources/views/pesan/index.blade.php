<?php
	$page = "Kirim Massal";
	$subpage = "Pesan";
?>
@extends('layout/dashboard/main-master')
@section('title','Pesan')
@section('body')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Pesan</h3>
                <!-- <a href="{{url('admin/pesan/create')}}" class="pull-right btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right;padding:8px" >
                  Tambah Nomor
                </a> -->
                {!! Form::open(['url' => 'pesan/search','files'=>true]) !!}
                    <button type="submit" class="pull-right btn btn-warning btn-sm" style="float:right;padding:8px;margin-right:10px">Cari</button>
                <input name="search[]" value="{{$q}}" class="form-control" style="display:inline;width:200px;float:right;margin-right:10px">
              
                {!! Form::close() !!}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped table-responsive-md">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Pesan</th>
                    <th>Media</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=(25 * ($data->currentPage()-1) )+1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->created_at}}</td>
                    <td>{{$d->pesan}}</td>
                    <td>
                      @if($d->media !== null)
                        <a href="{{url('assets/upload/'.$d->media)}}" class="badge badge-info fancybox fancybox.iframe">Cek</a>
                      @else
                        -
                      @endif
                    </td>
                    <td>
                      <div class="badge badge-success">{{$d->berhasil}}</div>
                      <div class="badge badge-danger">{{$d->gagal}}</div>
                    </td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('pesan/'.$d->id.'/edit')}}" class="btn btn-info fancybox fancybox.iframe"><i class="fas fa-eye"></i></a>
                        <a href="{{url('pesan/delete/'.$d->id)}}" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a>
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

<!-- <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script> -->

@endsection