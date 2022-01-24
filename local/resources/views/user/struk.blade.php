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
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="{{asset('assets/register/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/register/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/register/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/register/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/register/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => 'user/kirimstruk','files'=>true]) !!}
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    {!! Form::text('username',$find->username,['class'=>'input--style-5']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Paket</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        {!! Form::select('id_paket',$data2,null,['required'=>'true','placeholder'=>'Pilih Paket']) !!}
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Bukti</div>
                            <div class="value">
                                <div class="input-group">
                                {!! Form::file('file_dokumen',['required'=>'true']) !!}
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--green" type="submit">Tambah</button>
                            {!! Form::close() !!}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('assets/register/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{asset('assets/register/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/register/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/register/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('assets/register/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->