@extends('layout/admin/admin')
@section('title','Akun')
@section('body')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Akun</h3>
                <a href="{{url('akun/create')}}" class="pull-right btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right;padding:8px" >
                  Tambah Akun
                </a>
                {!! Form::open(['url' => 'akun/akun_search','files'=>true]) !!}
                    <button type="submit" class="pull-right btn btn-warning btn-sm" style="float:right;padding:8px;margin-right:10px">Cari</button>
                <input name="search[]" value="{{$q}}" class="form-control" style="display:inline;width:200px;float:right;margin-right:10px">
                {!! Form::select('search[]',['semua'=>'Semua','aktif'=>'Aktif','nonaktif'=>'Non Aktif'],$status,['class'=>'form-control','style'=>'padding: 8px;display:inline;width:200px;float:right;margin-right:10px']) !!}
                <input name="search[]" value="{{$tanggal}}" class="form-control" id="datepicker" style="display:inline;width:200px;float:right;margin-right:10px" data-zdp_readonly_element="false">
              
           
                {!! Form::close() !!}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Pembagian</th>
                    <th>Marketing</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Berakhir</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=(10 * ($data->currentPage()-1) )+1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->nama_pembagian}}</td>
                    <td>{{$d->marketing}}</td>
                    <td>{{date('d M Y', strtotime($d->tgl_berlanggan))}}</td>
                    <td>{{date('d M Y', strtotime($d->tgl_berakhir))}}</td>
                    <td>{{$d->status}}</td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('akun/'.$d->id.'/edit')}}" class="btn btn-info fancybox fancybox.iframe"><i class="fas fa-eye"></i></a>
                        <a href="{{url('akun/delete/'.$d->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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


  @endsection

@section('javascript')

<script>
    $(function () {
        $('#datepicker').Zebra_DatePicker();


        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

@endsection