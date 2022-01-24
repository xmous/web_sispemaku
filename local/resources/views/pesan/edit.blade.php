@extends('layout/admin/admin')
@section('title','Pesan')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pesan {{$find->id}}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless table-responsive">
                            <tr>
                                <td><b>Username</b></td>
                                <td>:</td>
                                <td>{{$find->get_user->username}}</td>
                            </tr>
                            <tr>
                                <td><b>Tanggal Kirim</b></td>
                                <td>:</td>
                                <td>{{date('d M Y', strtotime($find->created_at))}}</td>
                            </tr>
                            <tr>
                                <td><b>Jam Kirim</b></td>
                                <td>:</td>
                                <td>{{date('H:i:s', strtotime($find->created_at))}}</td>
                            </tr>
                            <tr>
                                <td><b>Pesan</b></td>
                                <td>:</td>
                                <td>{{$find->pesan}}</td>
                            </tr>
                            <tr>
                                <td><b>Status</b></td>
                                <td>:</td>
                                <td>
                                    <div class="badge badge-success">{{'Berhasil : '.$find->berhasil}}</div>
                                    <div class="badge badge-danger">{{'Gagal : '.$find->gagal}}</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Kirim Lagi</button>
                    </div>
                </div>
            </div>
          <!-- /.col -->
        </div></div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection


