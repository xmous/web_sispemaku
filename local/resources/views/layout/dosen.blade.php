<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISPEMAKU | @yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Fancybox -->
  <link rel="stylesheet" href="{{asset('assets/fancybox/dist/jquery.fancybox.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/dist/css/adminlte.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('assets/adminlte/plugins/summernote/summernote-bs4.min.css')}}">
  <!-- Whatsapp Button -->
  <link rel="stylesheet" href="{{asset('assets/css/whatsapp.css')}}">
  <style>
    #overlay {
      color: #666666;
      position: fixed;
      height: 100%;
      width: 100%;
      z-index: 5000;
      top: 0;
      left: 0;
      float: left;
      text-align: center;
      padding-top: 25%;
      display: none;
    }
  </style>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/adminlte/dist/img/logo.png')}}" alt="whatsappbroadcaster" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{url('logout')}}" class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">User</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-success">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('assets/adminlte/dist/img/logo.png')}}" alt="whatsapp broadcaster Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SISPEMAKU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::User()->nama}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <?php
          if (!isset($page))
            $page = "";
          
          if (!isset($subpage)) {
            $subpage="";
          }
        ?>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">User</li>
          <li class="nav-item">
            <a href="{{url('home')}}" class="nav-link <?php if($page == "Dashboard") echo "active";?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('kelas')}}" class="nav-link <?php if($page == "Daftar Kelas") echo "active";?>">
              <i class="fa fa-key nav-icon"></i>
              <p>Daftar Kelas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('broadcast')}}" class="nav-link <?php if($page == "Broadcast") echo "active";?>">
              <i class="nav-icon fas fa-reply-all"></i>
              <p>Broadcast</p>
            </a>
          </li>

          <li class="nav-header">User</li>
          <li class="nav-item <?php if($page == "Pengaturan") echo "menu-open";?>">
            <a href="#" class="nav-link <?php if($page == "Pengaturan") echo "active";?>">
              <i class="nav-icon fas fa-fw fa-cogs"></i>
              <p>
                Pengaturan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('profil')}}" class="nav-link <?php if($subpage == "Profil") echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('password')}}" class="nav-link <?php if($subpage == "Password") echo "active";?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ubah Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('teskirim')}}" class="nav-link <?php if($page == "Tes Kirim") echo "active";?>">
              <i class="nav-icon fas fa-fw fa-comment-alt"></i>
              <p>
                Tes Kirim
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">{{$page}}</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- MODAL LOGOUT -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Keluar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Anda yakin ingin keluar?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <a href="{{url('logout')}}" class="btn btn-danger">Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL LOGOUT -->


  @yield('body')

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="text-center">
        Copyright &copy;{{ date('Y') }} <a href="#">SISPEMAKU</a>.
      </div>
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<!-- <script src="{{asset('assets/adminlte/plugins/sweetalert2/sweetalert2.min.js')}}"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- jquery-validation -->
<script src="{{asset('assets/adminlte/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/adminlte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/adminlte/dist/js/demo.js')}}"></script>
<script src="{{asset('assets/fancybox/dist/jquery.fancybox.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Datatable -->
<script src="{{asset('assets/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

@yield('javascript')

<script>
  function submit_data(){

console.log("SDf");

}
  $('.fancybox').fancybox({
      type: "iframe",
      afterClose: function() {   
          location.reload(); 
          }
  });
  
        $('.fancybox2').fancybox({
            type: "iframe",
        
           
        });
  

  $(function () {
    bsCustomFileInput.init();

  });

  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
  });

  
  $('.hapus').on('click', function () {
      return confirm('Are you sure?');
  });


</script>

</body>
</html>
