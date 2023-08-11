<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Website Pulau Abang">
    <meta name="keywords" content="Puncaksosok, Objekwisata, Yogyakarta" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>Pulau Abang</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/pulau_abang/logopulauabang.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet"> -->
   
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Modernizr
    ================================================== -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- animation aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- ====== Header Mobile Area ====== -->
    <header class="mobile-header-area bg-nero hidden-md hidden-lg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 tb">
                    <div class="mobile-header-block">
                        <div class="menu-area tb-cell">
                            <!--Mobile Main Menu-->
                            <div class="mobile-menu-main hidden-md hidden-lg">
                                <div class="menucontent overlaybg"></div>
                                <div class="menuexpandermain slideRight">
                                    <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                        <span></span>
                                    </a>
                                    <span id="menu-marker"></span>
                                </div><!--/.menuexpandermain-->
                                <div id="mobile-main-nav" class="main-navigation slideLeft">
                                    <div class="menu-wrapper">
                                        <div id="main-mobile-container" class="menu-content clearfix"></div>
                                        
                                    </div>
                                </div><!--/#mobile-main-nav-->
                            </div><!--/.mobile-menu-main-->
                        </div><!-- /.menu-area -->
                        <div class="logo-area tb-cell">
                            <div class="site-logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/images/pulau_abang/logopulauabang.png') }}" 
                                    style="width: 250px; height: 75px;" alt="site-logo" />
                                </a>
                            </div><!-- /.site-logo -->

                            
                        </div><!-- /.logo-area -->
                        <div class="search-block tb-cell">
                            <a href="#" class="main-search"><i class="fa fa-search"></i></a>
                        </div><!-- /.search-block -->
                        <div class="additional-content tb-cell">
                            <a href="#" class="trigger-overlay"><i class="fa fa-sliders"></i></a>
                        </div><!-- /.additional-content -->
                    </div><!-- /.mobile-header-block -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.mobile-header-area --> 

    <!-- ====== Header Top Area ====== -->
    <header class="header-area bg-nero hidden-xs hidden-sm">
        <div class="container">
            <div class="header-top-content">
                <div class="row">
                    <div class="col-md-4 col-sm-4 mobile-center">
                        <div class="site-logo">
                            <a href="index.html">
                                <img src="{{ asset('assets/images/pulau_abang/logopulauabang.png') }}" style="width: 150px; height: 65px;" alt="site-logo" />
                            </a>
                        </div><!-- /.site-logo -->
                        
                    </div><!-- /.col-md-8 -->
                    <div class="col-md-7 col-sm-12 ">
                        <div class="left-content">
                            <nav id="main-nav" class="site-navigation top-navigation">
                                <div class="menu-wrapper">
                                    <div class="menu-content">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="#">Home</a>
                                            
                                            </li>
                                            <li>
                                                <a href="D:\Yahya\Mata Kuliah\Semester 6\KKN-PPM UGM Galang 2023\Web Pulau Abang\AbangKecilWP\resources\views\User\artikel.php">Artikel</a>
                                             </li>
                                            <li>
                                                <a href="about.html">Galeri</a>
                                            </li>
                                            
                                            <li>
                                                <a href="gallery.html">Hal Menarik</a>
                                                
                                            </li>
                                            <li>
                                                <a href="storymaps.html">Peta Potensi</a>
                                            </li>
                                           
                                        </ul> <!-- /.menu-list -->
                                    </div> <!-- /.menu-content-->
                                </div> <!-- /.menu-wrapper --> 
                            </nav><!-- /.site-navigation -->
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.header-top-content -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Artikel</a></li>
                    <li><a href="gallery.html">Galeri</a></li>
                    <li><a href="faq.html">Hal Menarik</a></li>
                    <li><a href="storymaps.html">Peta Potensi</a></li>
                </ul>
            </nav>
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Find Your Apartment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->  

        <!-- Registrar Or Sign In-content -->
        <div class="cd-user-modal">
            <div class="cd-user-modal-container">
                <ul class="cd-switcher">
                    <li><a href="#0">Sign in</a></li>
                    <li><a href="#0">New account</a></li>
                </ul>

                <!-- log in form -->
                <div id="cd-login"> 
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signin-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signin-password">Password</label>
                            <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Remember me</label>
                        </p>

                        <p class="fieldset">
                            <input class="full-width" type="submit" value="Login">
                        </p>
                    </form>
                    
                    <p class="cd-form-bottom-message">
                        <a href="#0">Forgot your password?</a>
                    </p>
                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-login -->

                <!-- sign up form -->
                <div id="cd-signup">
                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-username" for="signup-username">Username</label>
                            <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-email" for="signup-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <label class="image-replace cd-password" for="signup-password">Password</label>
                            <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                            <a href="#0" class="hide-password">Hide</a>
                            <span class="cd-error-message">Error message here!</span>
                        </p>

                        <p class="fieldset">
                            <input type="checkbox" id="accept-terms">
                            <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                        </p>

                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Create account">
                        </p>
                    </form>

                    <a href="#0" class="cd-close-form">Close</a>
                </div> <!-- cd-signup -->
                
                <!-- reset password form -->
                <div id="cd-reset-password">
                    <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                    <form class="cd-form">
                        <p class="fieldset">
                            <label class="image-replace cd-email" for="reset-email">E-mail</label>
                            <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                            <span class="cd-error-message">Error message here!</span>
                        </p>
                        <p class="fieldset">
                            <input class="full-width has-padding" type="submit" value="Reset password">
                        </p>
                    </form>

                    <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                </div> <!-- cd-reset-password -->
                <a href="#0" class="cd-close-form">Close</a>
            </div> <!-- cd-user-modal-container -->
        </div> <!-- cd-user-modal -->
    </div><!-- /.header-overlay-content -->

    <!-- ======slider Area====== --> 
    <div class="slider-area">
        <div class="pogoSlider">
            <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/pulau_abang/pantai\ pasir\ merahh.png);">
                <div class="container-slider one">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Selamat Datang di</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">PULAU ABANG</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Telusuri Pulau Abang Kecil, Abang Besar, Pengalap, Dedap, dan 48 pulau penuh keindahan lainnya yang jarang diketahui</p>
                                <!-- <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a> -->
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
            <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/pulau_abang/anemon.jpg);">
                <div class="container-slider one">                    
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="slider-text-content" >
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500" style="color: black;">Wisata Snorkeling </h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500" style="color: black;">Pulau Dedap</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500" style="color: black;">Salah satu pulau tak berpenghuni yang terkenal dengan keindahan terumbu karang, ikan nemo, serta hamparan hutan mangrove di sisi kanan dan kiri kanan garis pantai.</p>
                                <!-- <a href="#" class="button pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Special Offer</a> -->
                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
        </div><!-- .pogoSlider -->
    </div><!-- /.slider-area container-fluid -->

    <!-- ====== Category Menu ====== --> 
    <div class="category-menu margin-less-top">
        <div class="container-fluid pd-zero">
            <div class="row">
                <div class="col-md-12">
                    <div class="category-menu-content">
                        <div class="category-title">
                            <h3><span>Fasilitas</span></h3>
                        </div><!-- /.category-titel -->
                        <div class="category-slider bg-white-smoke owl-carousel">
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-one.png') }}" alt="" />
                                    <h4>Kuliner</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-two.png') }}" alt="" />
                                    <h4>Homestay</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-three.png') }}" alt="category" />
                                    <h4>Wisata</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="booking.html"><img src="{{ asset('assets/images/category/category-four.png') }}" alt="category" />
                                    <h4>Gallery</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item --> 
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="storymaps.html"><img src="{{ asset('assets/images/category/category-ten.png') }}" alt="category" />
                                    <h4>Story Maps</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-five.png') }}" alt="category" />
                                    <h4>Sekolah</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                   <a href="contact.html"> <img src="{{ asset('assets/images/category/category-six.png') }}" alt="category" />
                                    <h4>Sumber Air</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-seven.png') }}" alt="category" />
                                    <h4>Kelurahan</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="faq.html"><img src="{{ asset('assets/images/category/category-eight.png') }}" alt="category" />
                                    <h4>Tempat Ibadah</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="https://wa.link/5q4k9l"><img src="{{ asset('assets/images/category/category-nine.png') }}" alt="category" />
                                    <h4>Pelabuhan Umum</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                   <a href="#"> <img src="{{ asset('assets/images/category/category-six.png') }}" alt="category" />
                                    <h4>Kegiatan Luar</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-five.png') }}" alt="category" />
                                    <h4>Lingkungan</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                            <div class="item">
                                <div class="category-list style-one">
                                    <a href="#"><img src="{{ asset('assets/images/category/category-three.png') }}" alt="category" />
                                    <h4>Aktivitas Warga</h4></a>
                                </div><!-- /.category-list -->
                            </div><!-- /.item -->
                        </div><!-- /.category-slider -->  
                    </div><!-- /.category-menu-content -->
                </div> <!-- category-menu -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.catagory-menu -->

  
    <!-- ====== Our  ====== --> 
    <div class="our-">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">Our Profile</h2>
                        <h5 class="sub-title">Welcome to Pulau Abang Kecik</h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-2">
                    <div class="tab-list">
                        <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist" data-aos="fade-right">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About Pulau Abang Kecil</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Live Music</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Culinary</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Coffee Bar</a>
                            </li>
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="about-mobile">
                                <option value='0'>About Pulau Abang Kecil</option>
                                <option value='1'>Live Music</option>
                                <option value='2'>Culinary</option>
                                <option value='3'>Coffee Bar</option>
                            </select>
                        </form>
                    </div> <!-- /.tab-list -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p style="text-align: justify;">Wisata malam di Pulau Abang Kecil menawarkan keindahan kota Yogyakarta di malam hari dari puncak bukit. Dengan panoramanya yang indah dan suasananya yang nyaman, bukit di daerah Jambon menjadi salah satu pilihan terbaik untuk Anda yang ingin menghabiskan malam yang romantis di Yogyakarta.</p>
                                    <!-- <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                         <li>Cras etitikis mauris egeth lorem ultricies</li>
                                         <li>Amorem ipsum dolor sit amet, consectetur </li>
                                         <li>Cras etitikis mauris egeth lorem ultricies</li>
                                         <li>Amorem ipsum dolor sit amet, consectetur </li>
                                         <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul> -->
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6" data-aos="fade-left">
                                <div class="image-content">
                                    <img src="{{ asset('assets/images/image_profile.jpg') }}" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->
                          
                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p style="text-align: justify;">Alunan merdu musik akustik hadir untuk menemani momen romantis di Pulau Abang Kecil. Pertunjukan musik akustik diselenggarakan setiap malam yang berlangsung dari sore hingga malam hari. Pengunjuga juga bisa menyumbangkan suara bersama para band karena pengisi live music terbuka untuk umum. Panggung live music ini juga digunakan untuk berbagai acara lain seperti pentas tari atau seni pertunjukan lainnya. Pengunjung pasti akan dimanjakan dengan latar tempat yang cantik dan penampilan-penampilan yang menarik.</p>
                                    <!-- <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul> -->
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6" data-aos="fade-left">
                                <div class="image-content">
                                    <img src="{{ asset('assets/images/live_music.JPG') }}" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->
                        
                        <div role="tabpanel" class="tab-pane fade row" id="messages">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p style="text-align: justify;">Berbagai macam kuliner di Pulau Abang Kecil akan menemani Anda untuk menghabiskan malam yang romantis. Terdapat stand warung yang berjajar dengan beragam makanan yang dijual mulai dari makanan ringan hingga beberapa menu wisata kuliner Jogja. Soal harga pastinya cukup terjangkau dengan suasana ala cafe yang khas. Dengan beragam pilihan makanan dan minuman, tentunya membuat para pengunjung dapat menikmati piknik santai yang sangat berkesan.</p>
                                    <!-- <ul>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                        <li>Amorem ipsum dolor sit amet, consectetur </li>
                                        <li>Cras etitikis mauris egeth lorem ultricies</li>
                                    </ul> -->
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6" data-aos="fade-left">
                              <div class="image-content">
                                  <img src="{{ asset('assets/images/gallery/gallery-7.jpg') }}" alt="about" />
                              </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                         </div> <!-- /.messages -->
                    </div> <!-- /.tab-content -->
                 </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->

    <!-- ====== Homestay Area ====== --> 
    <div class="apartments-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one border">
                        <h2 class="title">Facility</h2>
                        <h5 class="sub-title">Menikmati fasilitas yang ada di Desa Wisata Pulau Abang Kecil</h5>
                    </div><!-- /.Apartments-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-down">
                    <div class="apartments-content">
                        <div class="image-content">
                           <a href="comming.html"><img src="{{ asset('assets/images/homestay.jpg') }}" alt="apartment" /></a>
                        </div><!-- /.image-content -->
                   
                        <div class="text-content">
                            <div class="top-content">
                               <h3><a href="comming.html">Homestay</a></h3>
                               <!-- <span>
                                   <i class="fa fa-map-marker"></i>
                                   (Lokasi)
                               </span>  -->
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <!-- <div class="meta-bed-room">
                                   <i class="fa fa-wifi"></i> WiFi
                                </div>
                                <div class="meta-bath-room">                                
                                   <i class="fa fa-tv"></i>TV
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                   Rp500.000,00
                                </div> -->
                                <!-- <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-up">
                    <div class="apartments-content">
                        <div class="image-content">
                           <a href="comming.html"><img src="{{ asset('assets/images/aula.JPG') }}" alt="apartment" /></a>
                        </div><!-- /.image-content -->
                   
                        <div class="text-content">
                            <div class="top-content">
                               <h3><a href="comming.html">Aula</a></h3>
                               <!-- <span>
                                   <i class="fa fa-map-marker"></i>
                                   (Lokasi)
                               </span>  -->
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <!-- <div class="meta-bed-room">
                                   <i class="fa fa-wifi"></i> WiFi
                                </div>
                                <div class="meta-bath-room">                                
                                   <i class="fa fa-tv"></i>TV
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                   Rp500.000,00
                                </div> -->
                                <div class="share-meta dropup pull-right">
                                    <!-- <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->
                <div class="clearfix hidden-md hidden-lg"></div>
                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-down">
                    <div class="apartments-content">
                        <div class="image-content">
                           <a href="booking.html"><img src="{{ asset('assets/images/image_profile.jpg') }}" alt="apartment" /></a>
                        </div><!-- /.image-content -->
                   
                        <div class="text-content">
                            <div class="top-content">
                               <h3><a href="booking.html">Camping</a></h3>
                               <!-- <span>
                                   <i class="fa fa-map-marker"></i>
                                   (Lokasi)
                               </span>  -->
                            </div><!-- /.top-content -->
                            <div class="bottom-content clearfix">
                                <!-- <div class="meta-bed-room">
                                   <i class="fa fa-wifi"></i> WiFi
                                </div>
                                <div class="meta-bath-room">                                
                                   <i class="fa fa-tv"></i>TV
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                   Rp500.000,00
                                </div> -->
                                <div class="share-meta dropup pull-right">
                                    <!-- <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                           <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->
                <!-- <div class="clearfix hidden-md hidden-lg"></div>
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-single.html"><img src="assets/images/apartment/apartment-five.png" alt="apartment" /></a> -->
                        </div><!-- /.image-content -->
                    
                        <!-- <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    Dhanmondi, Dhaka
                                </span>  -->
                            </div><!-- /.top-content -->
                            <!-- <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-bed"></i> 3 Bedrooms
                                </div>
                                <div class="meta-bath-room">                                
                                    <i class="fa fa-bath"></i>2 Bathroom
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    $200
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a> -->
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->
                <!-- <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="apartments-content">
                        <div class="image-content">
                            <a href="apartment-single.html"><img src="assets/images/apartment/apartment-six.png" alt="apartment" /></a> -->
                        </div><!-- /.image-content -->
                    
                        <!-- <div class="text-content">
                            <div class="top-content">
                                <h3><a href="apartment-single.html">Family Apartment</a></h3>
                                <span>
                                    <i class="fa fa-map-marker"></i>
                                    Dhanmondi, Dhaka
                                </span> 
                            </div>/.top-content -->
                            <!-- <div class="bottom-content clearfix">
                                <div class="meta-bed-room">
                                    <i class="fa fa-bed"></i> 3 Bedrooms
                                </div>
                                <div class="meta-bath-room">                                
                                    <i class="fa fa-bath"></i>2 Bathroom
                                </div>
                                <span class="clearfix"></span>
                                <div class="rent-price pull-left">
                                    $200
                                </div>
                                <div class="share-meta dropup pull-right">
                                    <ul>
                                        <li class="dropup">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-star-o"></i></a>
                                        </li>
                                    </ul> -->
                                </div>
                            </div><!-- /.bottom-content -->
                        </div><!-- /.text-content -->
                    </div><!-- /.partments-content -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            <!-- <a href="#" class="button nevy-button">All Apartments</a> -->
        </div><!-- /.container -->
    </div><!-- /.Apartments-area-->

    <!-- ====== Fun Facts Area======= -->
    <!-- <div class="fun-fects-area" style="background-image:url(assets/images/count-down-image.png)">
        <div class="container">
            <div class="stat">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="2500" data-speed="3000">2500</h3>
                        <div class="milestone-details">Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="3055" data-speed="3000">3055</h3>
                        <div class="milestone-details">Booking</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="50" data-speed="3000">50</h3>
                        <div class="milestone-details">Swimming</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="1530" data-speed="3000">1530</h3>
                        <div class="milestone-details">Apartment</div>
                    </div>
                </div> -->
            <!--  </div>stat -->
       <!--   </div>/.container -->
    <!-- </div>/.fun-fects-area -->

    <!-- ====== Gallery Area ====== --> 
    <div class="gallery-area">
        <div class="container-fluid">
            <div class="container-large-device">
                <div class="row">
                    <div class="col-md-7">
                        <div class="gallery-left-content">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-right">
                                    <a class="image-pop-up" href="{{ asset('assets/images/album/image1.JPG') }}">
                                        <img src="{{ asset('assets/images/album/image1.JPG') }}" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-down">
                                    <a class="image-pop-up" href="{{ asset('assets/images/album/image2.JPG') }}">
                                        <img src="{{ asset('assets/images/album/image2.JPG') }}" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-left">
                                    <a class="image-pop-up" href="{{ asset('assets/images/album/image3.JPG') }}">
                                        <img src="{{ asset('assets/images/album/image3.JPG') }}" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-right">
                                    <a class="image-pop-up" href="{{ asset('assets/images/album/image5.JPG') }}">
                                        <img src="{{ asset('assets/images/album/image5.JPG') }}" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-up">
                                    <a class="image-pop-up" href="{{ asset('assets/images/album/image4.jpg') }}">
                                        <img src="{{ asset('assets/images/album/image4.jpg') }}" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                                <div class="col-md-4 col-sm-6 col-xs-6" data-aos="fade-left">
                                    <a class="image-pop-up" href="{{ asset('assets/images/album/image6.JPG') }}">
                                        <img src="{{ asset('assets/images/album/image6.JPG') }}" alt="gallery" />
                                    </a>
                                </div><!-- /.col-md-4 -->
                            </div><!-- /.row -->
                        </div><!-- /.left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="gallery-right-content">
                            <h2>Pulau Abang Kecil<br/>Photo Gallery</h2>
                            <h3>Pulau Abang Kecil<br/>Hidden Game</h3>
                            <p>Ingin melihat lebih lagi setiap sudut yang ada di Desa Wisata Pulau Abang Kecil? klik button yang ada di bawah</p>
                            <a href="gallery.html" class="button nevy-button">All Photos &amp; Videos</a>
                        </div><!-- /.right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-large-device  -->
        </div><!-- /.container-fluid-->
    </div><!-- /.gallery-area -->
    
    <!-- ====== Call To Action ======= --> 
    <div class="call-to-action overlay-bg" data-aos="fade-right" style="background-image:url(assets/images/gallery/gallery-5.jpg)">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Untuk informasi lebih lanjut</h3>
                        <h4>Hubungi kami ... </h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="#">WhatsApp: <span></span>+62 856-4314-9900(Rudi)<span></a></h4>
                        <a href="https://wa.link/5q4k9l" class="button">Contact us</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->

    <!-- ====== Testimonial Area ====== --> 
    <div class="testimonial-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-heading-content">
                        <h2 class="title">Pulau Abang Kecil</h2>
                        <i class="fa fa-quote-right"></i>
                        <h2 class="sub-title">Pemandangan Pulau Abang Kecil</h2>
                    </div><!-- /.testimonial-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="photo-gallery-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="gallery-image-content">
                                <img src="{{ asset('assets/images/gallery/gallery-1.jpg') }}" alt="blog" data-aos="fade-right"/>
                                <div class="overlay-background gradient-transparent"> 
                                    <a href="assets/images/gallery/gallery-1.jpg" class="image-pop-up">
                                        <span><i class="fa fa-picture-o"></i>View</span>
                                    </a><!-- /.hover-content -->
                                </div><!-- /.hover-content -->
        
                            </div><!-- /.image-content -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="gallery-image-content">
                                <img src="{{ asset('assets/images/gallery/gallery-2.jpg') }}" alt="blog" data-aos="fade-right"/>
                                <div class="overlay-background gradient-transparent"> 
                                    <a href="assets/images/gallery/gallery-2.jpg" class="image-pop-up">
                                        <span><i class="fa fa-picture-o"></i>View</span>
                                    </a><!-- /.hover-content -->
                                </div><!-- /.hover-content -->
                            </div><!-- /.image-content -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="gallery-image-content">
                                <img src="{{ asset('assets/images/gallery/gallery-3.jpg') }}" alt="blog" data-aos="fade-left"/>
                                <div class="overlay-background gradient-transparent"> 
                                    <a href="assets/images/gallery/gallery-3.jpg" class="image-pop-up">
                                        <span><i class="fa fa-picture-o"></i>View</span>
                                    </a><!-- /.hover-content -->
                                </div><!-- /.hover-content -->
                            </div><!-- /.image-content -->
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="gallery-image-content">
                                <img src="{{ asset('assets/images/gallery/gallery-7.jpg') }}" alt="blog" data-aos="fade-left"/>
                                <div class="overlay-background gradient-transparent"> 
                                    <a href="assets/images/gallery/gallery-7.jpg" class="image-pop-up">
                                        <span><i class="fa fa-picture-o"></i>View</span>
                                    </a><!-- /.hover-content -->
                                </div><!-- /.hover-content -->
                            </div><!-- /.image-content -->
                        </div><!-- /.col-md-3 -->
                    </div>    
        </div><!-- /.container -->
    </div><!-- /.testimonial area -->

    <!-- ====== Contact Area ====== --> 
    <div class="contact-area" >
        <div class="container-large-device">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-12">
                        <div class="heading-content-two available"><br/> 
                            <h3 class="title">Buka mulai jam: 06.00 WIB - 23.00 WIB</h3>
                        </div><!-- /.testimonial-heading-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="map-left-content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.2233037600477!2d110.42400171415535!3d-7.87168708045022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a56ab2b3ba907%3A0xf5f033d78fb5804c!2sPuncak%20Sosok!5e0!3m2!1sen!2sid!4v1665632959324!5m2!1sen!2sid" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><!-- /.mapl-left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="map-right-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-address-book"></i>Alamat</h4>
                                        <p>Jambon, Bawuran, Kec. Pleret, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55791</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Email</h4>
                                        <p>puncaksosok2017@gmail.com</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>WhatsApp</h4>
                                        <p>Rudi <br/>+62 856-4314-9900</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                        <div class="social-icon">
                                            <a href="https://www.instagram.com/puncak_sosok"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </div><!-- /.Social-icon -->
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.map-right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.contact-area -->

    <!-- ====== Blog Area ====== --> 
    <!-- <div class="blog-area bg-gray-color">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="heading-content-one">
                        <h2 class="title">Our Blog Post</h2>
                        <h5 class="sub-title">Our News Feed</h5> -->
                    </div><!-- /.blog-heading-content -->
                </div><!-- /.row -->
            </div><!-- /.col-md-12 -->
            <!-- <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog-one.png" alt="blog" /> -->
                            <!-- </a> -->
                        </figure><!-- /.post-thumb -->
                        <!-- <div class="post-content">  
                            <div class="entry-meta">
                                <span class="entry-date">
                                    July 25, 2016
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span> -->
                            </div><!-- /.entry-header -->
                            <!-- <div class="entry-header">
                                <h3><a href="blog-single.html">Finding best places to visit in California</a></h3> -->
                            </div><!-- /.entry-header -->
                            <!-- <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span> -->
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
                <!-- <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog-two.png" alt="blog" /> -->
                            </a>
                        </figure><!-- /.post-thumb -->
                        <!-- <div class="post-content">  
                            <div class="entry-meta">
                                <span class="entry-date">
                                    July 25, 2016
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a> -->
                                </span>
                            </div><!-- /.entry-header -->
                            <!-- <div class="entry-header">
                                <h3><a href="blog-single.html">Finding best places to visit in California</a></h3> -->
                            </div><!-- /.entry-header -->
                            <!-- <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span> -->
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
                <!-- <div class="col-md-4 col-sm-6 col-xs-6">
                    <article class="post">
                        <figure class="post-thumb">
                            <a href="blog-single.html">
                                <img src="assets/images/blog/blog-three.png" alt="blog" /> -->
                            </a>
                        </figure><!-- /.post-thumb -->
                        <!-- <div class="post-content">  
                            <div class="entry-meta">
                                <span class="entry-date">
                                    July 25, 2016
                                </span>
                                <span class="devied"></span>
                                <span class="entry-category">
                                    <a href="#">Rooms &amp; suites</a>
                                </span> -->
                            </div><!-- /.entry-header -->
                            <!-- <div class="entry-header">
                                <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                            </div>/.entry-header -->
                            <!-- <div class="entry-footer">
                                <div class="entry-footer-meta">
                                    <span class="view"><i class="fa fa-eye"></i>35</span>
                                    <span class="like"><a href="#"><i class="fa fa-heart-o"></i>09</a></span>
                                    <span class="comments"><a href="#"><i class="fa fa-comments"></i>05</a></span> -->
                                </div><!-- /.entry-footer-meta -->
                            </div><!-- /.entry-footer -->
                        </div><!-- /.post-content -->
                    </article><!-- /.post -->
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
            <!-- <a href="blog.html" class="button">show all</a> -->
        </div><!-- /.container -->
    </div><!-- /.Blog-area -->

    <!-- ====== Footer Area ====== --> 
    <footer class="footer-area" style="background-image:url(assets/images/pulau_abang/bgfooterr.png)">
       <div class="container">
           <div class="row">
               <div class="col-md-4">
                   <div class="widget widget_about yellow-color">    
                       <div class="widget-title-area">
                           <h3 class="widget-title">
                               Tentang Kami
                           </h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <div class="widget-about-content">
                           <img src="{{ asset('assets/images/pulau_abang/logokkn.png') }}" alt="house" />
                           <p style="text-align: justify;">Situs ini merupakan situs profil hasil kerja sama antara Pemerintah Kelurahan Pulau Abang dengan Tim KKN-PPM UGM 2023 Galang Gemilang yang difasilitasi oleh Universitas Gadjah Mada. Semua informasi yang tersaji bertujuan untuk mengenalkan Kelurahan Pulau Abang beserta potensinya terhadap masyarakat luas.</p>
                           
                       </div><!-- /.widget-content -->
                   </div><!-- /.widget widget_about -->
               </div><!-- /.col-md-4 -->
               
               <div class="col-md-4">
                   <div class="widget widget_instagram yellow-color">
                       <div class="widget-title-area">
                           <h3 class="widget-title">Cek Berita Terbaru</h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                       <div class="instagram-image-content">
                        

                       </div><!-- /.instagram-image-content -->
                   </div><!-- /.widget -->
               </div><!-- /.col-md-4 -->
               <div class="col-md-4">
                   <div class="widget widget_instagram yellow-color">
                       <div class="widget-title-area">
                           <h3 class="widget-title">Instagram Image</h3><!-- /.widget-title -->
                       </div><!-- /.widget-title-area -->
                   </div><!-- /.widget -->
               </div><!-- /.col-md-4 -->
           </div><!-- /.row -->
           <div class="row">
               <div class="col-md-12">
                   <div class="bottom-content">
                       <p>Copyright  &copy;2023 <a href="#">KKN-PPM UGM GALANG GEMILANG </a></p>
                   </div><!-- /.bottom-top-content -->
               </div><!-- /.col-md-12 -->
           </div><!-- /.row -->
       </div><!-- /.container -->
    </footer><!-- /.footer-area -->

    <!-- All The JS Files
    ================================================== --> 
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> <!-- main-js -->
    <!-- animation aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>

