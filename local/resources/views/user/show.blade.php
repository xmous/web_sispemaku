<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Detail - WaBroadcaster</title>

    <!-- Icons font CSS-->
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" media="all">
    <link href="{{asset('assets/register/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/register/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    
    <!-- Vendor CSS-->
    <link href="{{asset('assets/register/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="{{asset('assets/register/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/register/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper">
            <div class="card card-5">
                <div class="card-heading">
                    @if($find->status == 'aktif')
                        <h2 class="title">
                            {{$find->username}}
                            <div class="badge badge-success">Aktif</div>
                        </h2>
                    @else
                        <h2 class="title">
                            {{$find->username}}
                            <div class="badge badge-danger">Nonaktif</div>
                        </h2>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="mt-3 ml-4">Tanggal Berakhir : {{$find->tgl_berakhir}}</h4>
                        </div>
                        <div class="col-md-4">
                            <a href="{{url('user/struk/'.$find->id)}}" class="btn btn-primary mt-3 mr-5 text-right "style="float: right;">+ Paket</a>
                            <a href="{{ url('user') }}" class="btn btn-success btn-sm mt-3 mr-3" style="float : right">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body"><table id="myTable" class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Beli</th>
                            <th>Tanggal Berakhir</th>
                            <th>Paket</th>
                            <th>Bukti</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no=1 ;?>
                            @foreach($histori as $d)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$d->tgl_mulai}}</td>
                                <td>{{$d->tgl_akhir}}</td>
                                <td>{{$d->get_paket->judul}}</td>
                                <td><a href="{{asset('asset/upload/'.$d->bukti)}}">Cek</a></td>
                                <td>
                                <a href="{{url('user/detailstruk/'.$d->id)}}" class="badge badge-success">Ubah Data</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('assets/register/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets/register/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/register/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/register/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('assets/register/js/global.js')}}"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->