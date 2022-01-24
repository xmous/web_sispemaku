@extends('layout/admin/admin')
@section('title','Penjualan')
@section('body')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Penjualan</h3>
                <a href="{{url('admin/penjualan/create')}}" class="pull-right btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right;padding:8px" >
                  Transaksi
                </a>
                {!! Form::open(['url' => 'admin/penjualan/search','files'=>true]) !!}
                    <button type="submit" class="pull-right btn btn-warning btn-sm" style="float:right;padding:8px;margin-right:10px">Cari</button>
                <input name="search" value="{{$q}}" class="form-control" style="display:inline;width:200px;float:right;margin-right:10px">
                {!! Form::close() !!}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Beli</th>
                    <th>Username</th>
                    <th>Marketing</th>
                    <th>Paket</th>
                    <th>Bukti</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=(10 * ($data->currentPage()-1) )+1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{date('d M Y', strtotime($d->created_at))}}</td>
                    <td>{{$d->get_user->username}}</td>
                    <td>{{$d->get_marketing->username}}</td>
                    <td>{{$d->get_paket->judul}}</td>
                    <td>
                        @if($d->bukti != null)
                            <a href="{{asset('assets/upload/bukti/'.$d->bukti)}}" class="badge badge-success fancybox fancybox.iframe">cek</a>
                        @else
                            <span class="badge badge-danger">Belum Upload Bukti</span> 
                        @endif
                    </td>
                    <td>
                        @if($d->approved == 0)
                            {{'Belum Bayar'}}
                        @elseif($d->approved == 1)
                            {{'Menunggu Konfirmasi'}}
                        @else($d->approved == 2)
                            {{'Sudah Dikonfirmasi'}}
                        @endif
                    </td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        @if($d->approved == 1)
                            <a href="{{url('admin/penjualan/ubah/'.$d->id)}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                        @endif
                        <a href="{{url('admin/penjualan/'.$d->id.'/edit')}}" class="btn btn-info fancybox fancybox.iframe"><i class="fas fa-eye"></i></a>
                        <a href="{{url('admin/penjualan/delete/'.$d->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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