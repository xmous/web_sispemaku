<!DOCTYPE html>
<!--
	Canvas by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Whatsapp Broadcaster | Aplikasi Pengirim Pesan Whatsapp</title>

    <!-- =============== Bootstrap Core CSS =============== -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <!-- =============== Google fonts =============== -->
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<!-- =============== fonts awesome =============== -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <!-- =============== Plugin CSS =============== -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" type="text/css">
    <!-- =============== Custom CSS =============== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <!-- =============== Owl Carousel Assets =============== -->
    <link href="{{asset('assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <style>
            .el1{
                width: 90%;
            }
        </style>

</head>

<body>
    <!-- =============== Preloader =============== -->
    <div id="preloader">
        <div id="loading">
        </div>
    </div>
    <!-- =============== nav =============== -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{asset('assets/img/wabroadcaster.png')}}" alt="Logo">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#how-it-works">How it works</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Screenshots">Screenshots</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#Price">Price</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('login') }}">Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="https://akun.usersendblast.my.id/">Clientarea</a>
                        </li>
                    </ul>
                </div>
                <!-- =============== navbar-collapse =============== -->

            </div>
        </div>
        <!-- =============== container-fluid =============== -->
    </nav>
    <!-- =============== header =============== -->
    <header>
		<!-- =============== container =============== -->
        <div class="container">
            <div class="header-content row">
                <div class="col-xs-12 col-sm-5 col-md-5">
                    <h2 class="wow bounceIn animated" data-wow-delay=".40s">{{$utama->judul}}</h2>
                    <h3 class="wow bounceIn animated" data-wow-delay=".50s">{{$utama->tagline}}</h3>
                    <p class="wow bounceIn animated" data-wow-delay=".60s">{{$utama->isi}}</p>
                    <p>
                        <a href="#Price">
                            <div class="btn btn-primary btn-lg btn-ornge wow bounceIn animated" data-wow-delay="1s"><i class="hbtn"></i> <span style="color:#fff;">Order Sekarang</span> <i class="fa fa-cloud-download"></i>
                            </div>
                        </a>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-7 wow slideInLeft animated">
                    <img src="{{asset('assets/img/detail.png')}}" alt="phones" />
                </div>
            </div>
        </div>
		<!-- =============== container end =============== -->
    </header>
    <!-- =============== About =============== -->
    <section id="about" class="">
		<!-- =============== container =============== -->
        <div class="container">
            <span class="angle2"></span>
            <span class="angle"></span>
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-3 wow fadeInLeft animated" data-wow-delay=".5s">
                    <h1><span>WELCOME!</span> {{$about->judul}} </h2>      
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-9 wow fadeInRight animated" data-wow-delay=".5s">
                  <h2>{{$about->tagline}}</h2>
                  <p>{{$about->isi}}</p>
                  </div>     
            </div>
        </div>   
		<!-- =============== container end =============== -->		
    </section>
    <!-- =============== how it works =============== -->
    <section id="how-it-works" class="parallax">
	<!-- =============== container =============== -->
    <div class="container">
     <span class="angle2"></span>
    <span class="angle"></span>
     <div class="row">

       <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".5s">
           <h2>Apa saja <span>Fitur Kita</span></h2>
           <p>Whatsapp Broadcaster adalah tool berbasis website. Anda dapat menggunakan Handphone, Tablet atau PC untuk melakukan aktivitas Broadcast Whatsapp.</p>
       </div>

      <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="row">     
          <div class="col-xs-10 col-sm-10 col-md-10 wow fadeInLeft animated textright" data-wow-delay=".5s">
          <h3>Sync Nomor WhatsApp</h3>
              <p>Sinkronisasi nomor WhatsApp anda untuk melakukan blast ke semua pelanggan dalam sekali klik.</p>     
          </div>
            <div class="col-xs-2 col-sm-2 col-md-2 wow fadeInRight animated" data-wow-delay=".5s">
                <i class="fa fa-apple iconfont"></i>
          </div>    
        </div>
        <div class="row"> 
         <div class="col-xs-10 col-sm-10 col-md-10 wow fadeInLeft animated textright" data-wow-delay=".6s">
         <h3>Sync Contact WhatsApp</h3>
              <p>Import semua contact anda secara otomatis.</p>     
          </div>
            <div class="col-xs-2 col-sm-2 col-md-2 wow fadeInRight animated" data-wow-delay=".6s">
                <i class="fa fa-rocket iconfont"></i>
          </div>     
        </div>
        <div class="row">            
         <div class="col-xs-10 col-sm-10 col-md-10 wow fadeInLeft animated textright" data-wow-delay=".7s">
         <h3>Database Nomor WhatsApp</h3>
              <p>Kami memberikan layanan free database WhatsApp untuk mendukung promosi penjualan produk anda.</p>     
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 wow fadeInRight animated" data-wow-delay=".7s">
                <i class="fa fa-film iconfont"></i>
          </div>         
           
        </div>        
      </div>

      <div class="col-xs-12 col-sm-4 col-md-4 wow bounceIn animated textcenter" data-wow-delay=".4s">
       <img src="{{asset('assets/img/slide-bg2.png')}}" alt="slide-bg" />
      </div>  
         
      <div class="col-xs-12 col-sm-4 col-md-4">
         <div class="row">         
          <div class="col-xs-2 col-sm-2 col-md-2 wow fadeInLeft animated" data-wow-delay=".5s">
                <i class="fa fa-android iconfont2"></i>
          </div>    
          <div class="col-xs-10 col-sm-10 col-md-10 wow fadeInRight animated textleft" data-wow-delay=".5s">
            <h3>Multiple User</h3>
              <p>Satu akun dapat digunakan banyak nomor.</p>     
          </div>
           
        </div>
        <div class="row">    
        <div class="col-xs-2 col-sm-2 col-md-2 wow fadeInLeft animated" data-wow-delay=".6s">
                <i class="fa fa-css3 iconfont2"></i>
          </div>          
          <div class="col-xs-10 col-sm-10 col-md-10 wow fadeInRight animated textleft" data-wow-delay=".6s">
            <h3>Unlimited Broadcast</h3>
              <p>Anda bisa melakukan Broadcast tanpa ada batasan waktu dan kuota, jadi kapanpun dan dimanapun anda bebas melakukannya.</p>     
          </div>
          
        </div>
        <div class="row">    
        <div class="col-xs-2 col-sm-2 col-md-2 wow fadeInLeft animated" data-wow-delay=".7s">
                <i class="fa fa-users iconfont2"></i>
          </div>          
          <div class="col-xs-10 col-sm-10 col-md-10 wow fadeInRight animated textleft" data-wow-delay=".7s">
            <h3>Export & Import Contact</h3>
              <p>Export & Import kontak untuk mempermudah mengambil database nomor Whatsapp dari HP.</p>     
          </div>
           
        </div>        
      </div>
    </div>
    </div>   
	<!-- =============== container end =============== -->	
    </section>
    <!-- =============== Screenshots =============== -->
    <section id="Screenshots" class="">
	<!-- =============== container =============== -->
    <div class="container">
    <span class="angle2"></span>
    <span class="angle"></span>
     <div class="row">

       <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".1s">
           <h2>Screen <span>Shots</span></h2>
           <p>Display your mobile apps awesome features with icon lists and an image carousel of each page. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
       </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="row">     
          <div class="col-xs-12 col-sm-12 col-md-12 wow zoomIn animated textright" data-wow-delay=".1s">           
               <div class="span12">

                      <div id="owl-demo" class="owl-carousel">
                        @foreach($gambar as $g)
                            <div class="item">
                                <!-- <div class="imghover" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image">      -->
                                <div class="imghover" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><img src="{{asset('assets/img/'.$g->isi)}}" alt="Owl Image">    
                                <div class="hover-bg"><i class="fa fa-camera camera"></i></div>                 
                                </div> 
                            </div>
                            <div class="item">
                                <div class="imghover" data-toggle="modal" data-target="#exampleModa2" data-whatever="@mdo">
                                <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image">
                                <div class="hover-bg"><i class="fa fa-camera camera"></i></div>                 
                                </div>
                            </div>
                        <div class="item">
                                <div class="imghover" data-toggle="modal" data-target="#exampleModa3" data-whatever="@mdo">
                                <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image">
                                <div class="hover-bg"><i class="fa fa-camera camera"></i></div>                 
                                </div>
                            </div> 
                            <div class="item">
                                <div class="imghover" data-toggle="modal" data-target="#exampleModa4" data-whatever="@mdo">
                                <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image">
                                <div class="hover-bg"><i class="fa fa-camera camera"></i></div>                 
                                </div>
                            </div>
                        @endforeach
                      </div>              
                    </div>     
                      
        </div>     
          <!-- =============== popup large image =============== -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
          <div class="modal-dialog" role="document">
            <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image" class="el1">
          </div>
         </div>

         <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe2">
          <div class="modal-dialog" role="document">
            <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image" class="el1">
          </div>
         </div>
         
         <div class="modal fade" id="exampleModa3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe3">
          <div class="modal-dialog" role="document">
            <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image" class="el1">
          </div>
         </div>
         
         <div class="modal fade" id="exampleModa4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe4">
          <div class="modal-dialog" role="document">
            <img src="{{asset('assets/img/gbr6.png')}}" alt="Owl Image" class="el1">
          </div>
         </div>
		 <!-- =============== popup large image end =============== -->
      </div>
      
    </div>
    </div>      
	</div><!-- =============== container end =============== -->
    </section>
    <!-- =============== Price =============== -->
    <section id="Price" class="">
	<!-- =============== container =============== -->
        <div class="container">
        <span class="angle2"></span>
        <span class="angle"></span>

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 wow zoomIn animated headding" data-wow-delay=".1s">
               <h2>Price <span>List</span></h2>
               <p>Display your mobile apps awesome features with icon lists and an image carousel of each page. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
           </div>

        @foreach($price as $p)
          <div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn animated" >
          <div class="price-wrapper ">
		        <h3 class="price-title">{{$p->judul}}</h3>
                    @if($p->tambahan == 2)
                        <div class="price standard">
                    @else
                        <div class="price">
                    @endif
			        <div class="value-box">
				        <div class="value-box-content">
					        <span class="value">
						        <i></i><span class="number">{{$p->tagline}}</span>
					        </span>
					        <span class="month">per Bulan</span>
				        </div>
			        </div>

			        <div class="content-box">			
                        <ul>
                        <?= $p->isi; ?>
                        <!-- <li>1 Akun Whatsapp</li>
                        <li>Send Unlimited Broadcast</li>
                        <li>Multiple User Whatsapp</li>
                        <li>Attach Image Blast</li>
                        <li>Testing Tool</li>
                        <li>7.500 Database</li>
                        <li>Sync Contact From Whatsapp</li>
                        <li>Export & Import Contact</li>
                        <li>Broadcast Status Monitor</li> -->
                        </ul>
			        </div>
			        <div class="sign-box">
                     <a href="#"><span>Register</span></a>			
                    </div>
		        </div>
	        </div>
          </div>
        @endforeach
          <!-- <div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn animated">
            <div class="price-wrapper ">
		        <h3 class="price-title">Personal</h3>
		        <div class="price standard">
			        <div class="value-box">
				        <div class="value-box-content">
					        <span class="value">
						       <span class="number">Rp 70.000</span>
					        </span>
					        <span class="month">per Bulan</span>
				        </div>
			        </div>

			        <div class="content-box">			
                        <ul>
                        <li>1 Akun Whatsapp</li>
                        <li>Send Unlimited Broadcast</li>
                        <li>Multiple User Whatsapp</li>
                        <li>Attach Image Blast</li>
                        <li>Testing Tool</li>
                        <li>7.500 Database</li>
                        <li>Sync Contact From Whatsapp</li>
                        <li>Export & Import Contact</li>
                        <li>Broadcast Status Monitor</li>
                        </ul>
			        </div>
			        <div class="sign-box">
                     <a href="#"><span>Register</span></a>			
                    </div>
		        </div>
	        </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn animated">
          <div class="price-wrapper ">
		        <h3 class="price-title">Business</h3>
		        <div class="price">
			        <div class="value-box">
				        <div class="value-box-content">
					        <span class="value">
						        <i></i><span class="number"> Rp 600.000 </span>
					        </span>
					        <span class="month">per month</span>
				        </div>
			        </div>

			        <div class="content-box">			
                        <ul>
                        <li>1 Akun Whatsapp</li>
                        <li>Send Unlimited Broadcast</li>
                        <li>Multiple User Whatsapp</li>
                        <li>Attach Image Blast</li>
                        <li>Testing Tool</li>
                        <li>7.500 Database</li>
                        <li>Sync Contact From Whatsapp</li>
                        <li>Export & Import Contact</li>
                        <li>Broadcast Status Monitor</li>
                        </ul>
			        </div>
			        <div class="sign-box">
                     <a href="#"><span>Register</span></a>			
                    </div>
		        </div>
	        </div> 
          </div>    -->
        </div>
        </div>    <!-- =============== container end =============== -->  
        </section>
    <!-- =============== Contact =============== -->
    <section id="contact">
	<!-- =============== container =============== -->
		<div class="container">
			    <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated headding" data-wow-delay=".1s">
                 </div>
                </div>

			<div class="row">

				<div class="col-xs-12 col-sm-8 col-md-8 wow bounceIn animated headding" data-wow-delay=".1s">

                    <h2>Contact <span>Us</span></h2>
                    <p>Display your mobile apps awesome features with icon lists and an image carousel of each page. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation.</p>
               
				</div>
                <!-- <div class="col-xs-12 col-sm-4 col-md-4 wow bounceIn animated map" data-wow-delay=".5s">

					  <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d6508922.473104964!2d-123.76275651635396!3d37.19583981824279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCalifornia%2C+United+States!5e0!3m2!1sen!2sin!4v1450994260631" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div> -->
                 <div class="col-xs-12 col-sm-4 col-md-4 wow bounceIn animated" data-wow-delay=".6s">

					  <section id="text-15" class="widget widget_text">
                         <h3 class="widget-title">California, United States</h3> <div class="textwidget">785, Firs Avenue, place Mall,<br>
                        <p>Tel: 01 234-56786<br>
                        Mobile: 01 234-56786<br>
                        E-mail: <a href="#">info@templatestock.com</a></p>
                        <a href="#">Get directions on the map</a> →</div>
                    </section>

				</div>                
			</div>
		</div><!-- =============== container end =============== -->
	</section>
    <!-- Footer -->
    <footer id="footer">
	<!-- =============== container =============== -->
    <div class="container">
			    <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

					<ul class="social-links">
						<li><a class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-name: fadeInUp;"><i class="fa fa-facebook"></i></a></li>
						<li><a data-wow-delay=".1s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;"><i class="fa fa-twitter"></i></a></li>
						<li><a data-wow-delay=".2s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><i class="fa fa-google-plus"></i></a></li>
						<li><a data-wow-delay=".4s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><i class="fa fa-pinterest"></i></a></li>
						<li><a data-wow-delay=".5s" class="wow fadeInUp animated" href="index.html#" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"><i class="fa fa-envelope"></i></a></li>
					</ul>

                    <p class="copyright">
                        &copy;{{date('Y')}} wabroadcaster
					</p>

				</div>
			</div>
    </div><!-- =============== container end =============== -->
	</footer>
    <!-- =============== jQuery =============== -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.fittext.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="{{asset('assets/js/creative.js')}}"></script>
    <!-- =============== owl carousel =============== -->
    <script src="{{asset('assets/owl-carousel/owl.carousel.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                autoPlay: 3000,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });

        });
    </script>
</body>
</html>