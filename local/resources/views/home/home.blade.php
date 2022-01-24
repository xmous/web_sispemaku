<?php
	$page = "Dashboard";
?>
@extends('layout/dosen')
@section('title','Dashboard')
@section('body')
<style>
  .fancybox-content{
    width:320px;
    height:500px;
  }
  </style>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-12">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <!-- <h3>90<sup style="font-size: 20px">%</sup></h3> -->
                <h3>{{$kelas}}</h3>

                <p>Kelas Saya</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{url('kelas')}}" class="small-box-footer">Selengkapnya..<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <div class="card">
                <div class="m-3">
                  <h4>Selamat Datang, {{Auth::User()->nama}}</h4>
                  <p>Selamat bergabung bersama kami di SisPemaKu..</p>
                  <a href="http://localhost:8000?id_user={{Auth::user()->nim}}&nomor={{Auth::user()->nomor}}" class="btn btn-info fancybox2 fancybox.iframe">Scan</a>
                </div>
              </div>
            </section>
          <!-- /.Left col -->
          

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection