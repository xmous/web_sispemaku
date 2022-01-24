@extends('layout/admin/admin')
@section('title','pembagian')
@section('body')

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Pembagian</h3>
                <a href="{{url('admin/pembagian/create')}}" class="btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right" >
                  Tambah
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Pembagian</th>
                    <th>Pembagian</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->id}}</td>
                    <td>{{$d->nama_pembagian}}</td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('admin/pembagian/'.$d->id.'/edit')}}" class="btn btn-info fancybox fancybox.iframe"><i class="fas fa-eye"></i></a>
                        <a href="{{url('admin/pembagian/delete/'.$d->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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