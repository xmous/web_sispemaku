@extends('layout/dosen')
@section('title',$find->nama_kelas)
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if ($message = Session::get('sukses'))
                    <div class="alert alert-info mt-2">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kelas {{$find->nama_kelas}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::model($find,['method' => 'PATCH','route'=>['kelas.update',$find->id],'files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                {!! Form::text('nama_kelas',$find->nama_kelas,['class'=>'form-control','disabled'=>'true','id'=>'nama_kelas']) !!}
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="hari">Hari</label>
                                    {!! Form::select('hari',$hari,$find->hari,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="ruangan">Ruang</label>
                                    {!! Form::select('ruangan',$ruang,$find->ruangan,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="jam_mulai">Jam Mulai</label>
                                    {!! Form::select('jam_mulai',$jam,$find->jam_mulai,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="jam_akhir">Jam Berakhir</label>
                                    {!! Form::select('jam_akhir',$jam,$find->jam_akhir,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">Data Mahasiswa</h3>
                <a href="{{url('kelasdetail/'.$id)}}" class="btn btn-primary btn-sm fancybox fancybox.iframe" style="float:right" >
                  Tambah
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1 ;?>
                  @foreach($data as $d)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$d->get_mhs->nim}}</td>
                    <td>{{$d->get_mhs->nama}}</td>
                    <td>{{$d->get_mhs->nomor}}</td>
                    <td class="text-left py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="{{url('kelasdetail/delete/'.$d->id.'/'.$id)}}" class="btn btn-danger hapus"><i class="fas fa-trash"></i></a>
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


