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
    <title>Registrasi - WaBroadcaster</title>

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

    <style>
        @media only screen and (min-width: 700px){
            .wraptambah{
                margin:0 70px;
            }
        }
        @media only screen and (max-width: 600px) {
            .wraptambah{
                margin:0;
            }
        }
    </style>

</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wraptambah">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Data Customer</h2>
                </div>
                <div class="col-md-12">
                    <div class="card-body">
                        <a href="{{url('user/create')}}" class="btn btn-primary btn-sm mb-3" style="float : right">Tambah</a>
                        <a href="{{ url('home') }}" class="btn btn-success btn-sm mr-3" style="float : right">Kembali</a>
                        <table id="myTable" class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Pembagian</th>
                            <th>Status</th>
                            <th>Tanggal Berakhir</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no=1 ;?>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$d->username}}</td>
                            <td>{{$d->get_pembagian->nama_pembagian}}</td>
                            <td>{{$d->status}}</td>
                            <td>{{$d->tgl_berakhir}}</td>
                            <td>
                            <a href="{{url('user/'.$d->id)}}" class="badge badge-success">Detail</a>
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