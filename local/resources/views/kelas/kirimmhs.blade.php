@extends('layout/dosen')
@section('title','Tambah Mahasiswa')
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
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Mahasiswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => 'kelasdetail','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            {!! Form::text('id_kelas',$id,['class'=>'form-control','hidden'=>'true','id'=>'id_kelas']) !!}
                            <div class="form-group">
                                <label for="id_mhs">Mahasiswa</label>
                                <select name="id_mhs" id="id_mhs" class="select2 form-control" required="true">
                                    <option value="">Pilih Mahasiswa</option>
                                    @foreach($mhs as $d)
                                        <option value="{{$d->id}}">{{$d->nim}} - {{$d->nama}}</option>
                                    @endforeach
                                </select>
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


