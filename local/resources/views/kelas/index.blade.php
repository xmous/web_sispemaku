<?php
	$page = "Daftar Kelas";
?>
@extends('layout/dosen')
@section('title','kelas')
@section('body')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Kelas</h3>
                <a href="{{url('kelas/create')}}" class="btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right" >
                  Tambah
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Hari</th>
                    <th>Jam Kelas</th>
                    <th>Ruangan</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->nama_kelas}}</td>
                    <td>
                        @if($d->hari == 1)
                            {{'Senin'}}
                        @elseif($d->hari == 2)
                            {{'Selasa'}}
                        @elseif($d->hari == 3)
                            {{'Rabu'}}
                        @elseif($d->hari == 4)
                            {{'Kamis'}}
                        @elseif($d->hari == 5)
                            {{'Jumat'}}
                        @elseif($d->hari == 6)
                            {{'Sabtu'}}
                        @else
                            {{'Minggu'}}
                        @endif
                    </td>
                    <td>{{$d->get_mulai->masuk}} - {{$d->get_akhir->keluar}}</td>
                    <td>{{$d->get_ruang->nama_ruang}}</td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('kelas/'.$d->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{url('kelas/delete/'.$d->id)}}" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                  <?php $no++; ?>
                  @endforeach
                  </tbody>
                </table>
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

    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
  @endsection