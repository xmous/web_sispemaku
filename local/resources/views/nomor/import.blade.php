@extends('layout/dashboard/main-master')
@section('title','Import Nomor')
@section('body')

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                
                    <div class="card-header">
                        <h3 class="card-title">Import Nomor</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['url' => 'nomor/importnomor','files'=>true]) !!}
                    {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="file">Masukkan File Excel/CSV</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        {!! Form::file('file_dokumen',['required'=>'true']) !!}
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

  @if ($message = Session::get('sukses'))
    <script>
        Toast.fire({
            icon: 'success',
            title: '{{ $message }}'
        })
    </script>
  @endif

  @endsection

  @section('javascript')
    
  @endsection


