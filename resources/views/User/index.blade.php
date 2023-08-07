
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Mewah Rent</title>
      <link rel="shortcut icon" href="{{asset('images/logomewahicon.png')}}">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('images/logomewahfix.png')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->

      <header>
         <!-- header inner -->
         <div  class="head_top">
            <div class="header">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="/"><img src="{{ asset('images/logomewahfix.png') }}" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                 
                                 @if(Auth::check())
                                    <li class="nav-item">
                                       <a class="nav-link" href="{{ route('home') }}">Admin</a>
                                    </li>
                                 @else
                                    <li class="nav-item">
                                       <a class="nav-link" href="/"> Home  </a>
                                    </li>
                                 @endif
                                 <li class="nav-item">
                                    <a class="nav-link" href="#about">About Us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#product">Product</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('faqUser') }}">FAQ</a>
                                 </li>
                              </ul>
                              <!--<div class="sign_btn"><a href="#contact">Contact Us</a></div>-->
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
               <div class="containr-fluid">
                  <div class="row d_flex">
                     <div class="col-md-4">
                        <div class="text-bg">
                           <h3>Selamat Datang<br>di Rental Mewah</h3>
                           <strong>Persewaan Komputer dan Laptop</strong>
                           <span>Multimedia ? Juga ada!</span>
                           <a href="#product">Sewa Sekarang</a>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="text-img"> <!--ini adalah wadah untuk bentuk banner utama-->
                           <figure><img src="{{ asset('images/homepic1.png') }}" alt="#"/></figure>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </header>
      <!-- end banner -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Mewah Rent</h2>
                     <span>Let's get to know more about us!</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2 ">
                  <div class="about_box ">
                     <figure><img src="{{ asset('images/HomeAbout.png') }}" width="500" height="350" alt="#"/></figure>
                     <a class="read_more" href="{{ route('aboutUser') }}">Read more</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <!-- best -->
      <div id="product" class="best">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                  <br>
                  <br>
                  <br>
                  <br>
                     <h2>Our Products</h2>
                     <span>Berikut adalah produk-produk multimedia yang kami sewakan</span>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach($data_category as $kategori)
              
                  <div class = "containerche col-md-4">
                     <div class = "cardche">
                        <div class = "imageche">
                           <figure><img class="img-che" src="{{ asset('thumb/'.$kategori->image_link) }}" alt="#"/></figure>
                           <strong>{{ $kategori->title }}</strong>
                        </div>
                       
                        <div class = "content">
                           <!-- <h3>{{ $kategori->title }}</h3> -->
                           <p>{!! $kategori->description !!}</p> <br>
                           <form action="{{ route('user.produklain', $kategori->title) }}" method="post">
                              @csrf
                              <button class="btn btn-warning">Selengkapnya</button>
                           </form> <br>
                        </div>
                     </div>    
                  </div>
               
               @endforeach
              
            </div>
         </div>
      </div>
      <!-- end best -->
      <!-- request -->
      <div id="contact" class="request">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Kotak Saran</h2>
                     <span>Isikan Pesan Masukan Anda Pada Formulir Berikut <br>
                     Masukan Anda Akan Membantu Meningkatkan Pelayanan Kami Menjadi Lebih Baik Lagi</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="black_bg">
                     <div class="row">
                        <div class="col-md-7 ">
                           <form class="main_form" method="post" action="{{route('adminPesan.store')}}">
                           @csrf
                              <div class="row">
                                 <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Nama" type="text" name="nama">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Nomor Telepon" type="text" name="no_telpon">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="text" name="email">
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Pesan" type="text" name="pesan_user"> Message </textarea>
                                 </div>
                                 <div class="col-sm-12">
                                    <button type="submit" class="send_btn">Send</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-md-5">
                           <div class="mane_img">
                              <figure><img src="{{ asset('images/reqpict.png') }}" alt="#"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end request -->
      <!-- two_box section -->
      @foreach($data_promo as $promo)
      <div  class="two_box">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="two_box_img">
                     <figure><img src="{{ asset('thumb/'.$promo->gambar_promo) }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="two_box_img">
                     <h2><span class="offer">{{ $promo->judul_promo }} </span></h2>
                     <p>{!! $promo->deskripsi_promo !!}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
      <!-- end two_box section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        @foreach($data_testimoni as $testimoni)
                           <li data-target="#myCarousel" data-slide-to="{{ $testimoni->id }}"></li>
                        @endforeach
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          <h3>Mewah Rent</h3>
                                          <p>
                                             <i class="padd_rightt0"><img src="{{ asset('images/te1.png') }}" alt="#"/></i>
                                                Baca Testimoni Para Peminjam 
                                             <i class="padd_leftt0"><img src="{{ asset('images/te2.png') }}" alt="#"/></i> 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @foreach($data_testimoni as $testimoni)
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div  class="col-md-12">
                                       <div class="test_box">
                                          
                                          <h3>{{ $testimoni->sumber }}</h3>
                                          <p>
                                             {!! $testimoni->testimoni !!} 
                                          </p>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">


                  <div class="col-md-6">
                     @foreach($data_lokasi as $lokasi)
                     <div class="cont">
                        <iframe src="{{$lokasi->map}}" 
                        width="525" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                     @endforeach
                     <!--
                     <div id="map"></div>
                     <script>
                        function initMap(){
                           var options = {
                              zoom:8,
                              center:{lat:42.3601,lng:-71.0589}
                           }

                           var map = new 
                           google.maps.Map(document.getElementById('map'), options);

                        }
                     </script>
                     <!-- Async script executes immediately and must be after any DOM elements used in callback. --
                     <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXJ9Iv2tI8TRuDf_7b5jzRePaDaXG6CsE&callback=initMap&libraries=&v=weekly"
                        async
                     ></script>
                      -->

                  </div>



                  <div class="col-md-3">
                     <div class="cont_call">
                        <h3><strong class="multi">Alamat</strong></h3> <!--Data Alamat dari database-->
                        @foreach($data_lokasi as $lokasi)
                         <img src="{{ asset('images/pin.png') }}" height="30" width="30">
                         <h5><strong class="contact"> {{ $lokasi->alamat }} </strong></h5>
                        @endforeach

                        <h3><strong class="multi">Kontak</strong></h3> <!--Data Kontak dari database-->
                        @foreach($data_kontak as $kontak)
                        @if(!empty($kontak->no_telp))
                           <h5><strong class="contact"> <i class='fa fa-phone'></i>
                              {{ $kontak->no_telp }}
                              </strong>
                           </h5>
                           @if($kontak->tipe == 'ya')
                              <a class="btn-wa text-link" href="https://wa.me/{{ $kontak->no_telp }}">WhatssApp Now!</a> <br> <br>
                           @endif
                        @endif
                        @endforeach

                        @foreach($data_kontak as $kontak)
                        @if(!empty($kontak->email))
                           <h5><strong class="contact"> <i class='fa fa-envelope'></i>
                              {{ $kontak->email }}
                              </strong>
                           </h5>
                        @endif
                        @endforeach

                     </div>
                  </div>

                  <div class="col-md-3">
                     <h3><strong class="multi">Media Sosial</strong></h3> <!--Data Kontak dari database-->
                     @foreach($data_sosial as $sosial)
                        <h5><strong class="contact"> <i class='fa fa-thumb-tack'></i>
                           {{$sosial->media}} : <a class="link-social" href="{{$sosial->link}}"> {{ $sosial->username }} </a>
                           </strong>
                        </h5>
                     @endforeach
                  </div>
                  
               </div>
               <hr color="white">

               <div class="row">
                  <div class="col-md-1">
                     <h3><strong class="multi" align="center">Our Partners</strong></h3> <!--Data Kontak dari database-->
                  </div>

                  <div class="col-md-11">
                  @foreach($data_partner as $partner)
                  @if($partner->display == '1:1')
                     <a href="{{ $partner->link }}">
                        <img class="partner-pic" src="{{ asset('thumb/'.$partner->foto) }}" style="width: 30px; height: 30px"> <!--Data Kontak dari database-->
                     </a>
                  @else
                     <a href="{{ $partner->link }}">
                        <img class="partner-pic" src="{{ asset('thumb/'.$partner->foto) }}" style="width: 85px; height: 30px"> <!--Data Kontak dari database-->
                     </a>
                  @endif
                  @endforeach
                  </div>

               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>
                           © <script>document.write(new Date().getFullYear());</script> All Rights Reserved.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

