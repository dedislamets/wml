<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WML</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.png">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <style type="text/css">
        .card h5 a:hover {
            color: #a91605;
        }
        .header-area {
            background: #a91605;
        }
        .header-sticky.sticky-bar {
            background: #a91605;
        }
        .footer-area {
            background: #040474;
        }
        .main-menu ul li:after {
            /*content: url(assets/img/line-menu.png);
            position: absolute;
            top: 5px;
            right: -8px;*/
        }
        .main-header .main-menu ul li a {
            margin: 10px 0;
            padding: 4px 19px;
            display: inline-block;
            text-decoration:none;
            background-color: #040474;
            /*padding:4px 10px;*/
            border-radius:3px;
                    transform: skewX(-10deg);
                 -o-transform: skewX(-10deg);
               -moz-transform: skewX(-10deg);
            -webkit-transform: skewX(-10deg);
        }
        .main-header .main-menu ul li a span {
             display: inline-block;
            transform: skewX(10deg);
                 -o-transform: skewX(10deg);
               -moz-transform: skewX(10deg);
            -webkit-transform: skewX(10deg);
        }
        .main-header .main-menu ul ul.submenu {
            background: transparent; 
            box-shadow: unset;
            padding: 0px;
        }
        .our-info-area {
            background: #1a1a4c;
             background-image: -webkit-radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%);
             background-image: -moz-radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%);
             background-image: -o-radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%);
             background-image: radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%)
        }
        .our-info-area .single-info .info-caption span {
            color: #fff;
        }
        @media only screen and (min-width: 1200px) and (max-width: 1600px){
            .section-padding30 {
                padding-top: 40px;
                padding-bottom: 170px;
            }
        }
        .categories-area .single-cat::before {
            background: #a91605;
        }
        .categories-area .single-cat {
            background: #1a1a4c;
             background-image: -webkit-radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%);
             background-image: -moz-radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%);
             background-image: -o-radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%);
             background-image: radial-gradient(top, circle cover, #27246d 0%, #1a1a4c 80%)
        }
        .categories-area .single-cat .cat-cap a {
            color: #fff;
            font-size: 31px !important;
        }
        .categories-area .single-cat .cat-cap p {
            color: #fff;
        }
        .slider-area form.search-box .search-form a {
            background: #a91605;
        }
        .slider-area .hero__caption h1{
            color:#040474;
        }
        .btn {
            background: #a91605;
        }
        .clients {
            width: 100%;
            /*float: left;*/
            /*padding: 80px 0;*/
        }
        .clients ul {
            width: 100%;
            float: left;
        }
        .clients ul li {
            width: 16.66666%;
            float: left;
            margin: 0;
        }
        .clients ul li figure {
            width: 100%;
            float: left;
            opacity: 0.5;
            -webkit-transition: .15s ease-in-out;
            -moz-transition: .15s ease-in-out;
            -ms-transition: .15s ease-in-out;
            -o-transition: .15s ease-in-out;
            transition: .15s ease-in-out;
        }
        .clients ul li figure h5 {
            margin: 0;
            padding: 0 10%;
        }
        .clients ul li figure h5 img {
            width: 100%;
        }
        .clients ul li figure:hover {
            opacity: 1;
        }
        footer{
            background: #040474;
            color: #ccc;
            display: block;
            position: relative;
            border-bottom-color: #000;
        }
        footer:before {
            background: #000;
        }
        footer:before {
            height: 65px;
            content: "";
            display: block;
            position: absolute;
            left: 50%;
            width: 50%;
            bottom: 0px;
        }
        footer .color-part2 {
            position: absolute;
            margin-top: -8px;
            text-align: center;
            left: 0px;
            right: 0px;
            z-index: 2;
        }
        footer nav a {
            display: block;
            margin-bottom: 20px;
        }
        footer .color-part2:after {
            content: "";
            display: inline-block;
            border-top: 12px solid #fff;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            height: 0;
            width: 900px;
            max-width: 90%;
            position: relative;
            margin-top: -10px;
        }
        footer .color-part {
            background-color: #a91605;
            position: absolute;
            top: 0px;
            bottom: 0px;
            left: 0px;
            bottom: 0px;
            width: 50%;
            margin-left: -22%;
            -webkit-transform: skew(-20deg);
            -moz-transform: skew(-20deg);
            -o-transform: skew(-20deg);
        }
        
        footer .block-content {
            background: url(assets/img/footer-bg.png) no-repeat center center;
            background-size: cover;

        }
        footer h4 {
            margin-top: 40px;
            color: #fff;
        }
        .block-content {
            margin-bottom: 80px;
        }
        footer, footer a, footer .copy {
            color: #ccc;
        }
        footer .copy, footer:before {
            background: #000;
        }
        footer .copy {
            height: 65px;
            line-height: 75px;
            padding-right: 15px;
            position: relative;
            z-index: 2;
        }
        #back-top {
            background: #a91605;
        }
        #to-top, .two-news{
            background: #333;
        }
        #to-top {
            top: 0px;
            left: -30px;
            cursor: pointer;
            display: block;
            position: absolute;
            width: 80px;
            text-align: center;
            line-height: 60px;
            height: 65px;
            -webkit-transform: skew(-20deg);
            -moz-transform: skew(-20deg);
            -o-transform: skew(-20deg);
        }
        .logo-footer {
            display: block;
            background: url(assets/img/logo-footer.png) no-repeat;
            width: 244px;
            height: 42px;
            margin-top: 41px;
        }
        footer p {
            font-size: 14px;
            margin-top: 30px;
            padding-right: 60px;
            line-height: 20px;
            color: #fff;
        }
        .footer-icons a {
            display: inline-block;
            padding-right: 5px;
        }
        .contact-info {
            margin-top: 30px;
        }
        .contact-info span {
            display: block;
            margin-bottom: 10px;
        }
        .contact-info i {
            display: block;
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-top: 7px;
        }
        .contact-info span:after {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        .testimony-section {
            position: relative;
        }

        .ftco-section {
            padding: 2em 0;
            position: relative;
        }
        .ftco-animate {
            /*opacity: 0;
            visibility: hidden;*/
        }
        .heading-section.heading-section-white .subheading {
            color: #000000;
        }

        .heading-section .subheading {
            font-size: 12px;
            display: block;
            font-weight: 700;
            color: #f79f24;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .heading-section.heading-section-white h2 {
            /*color: #000000;*/
        }
        .heading-section h2 {
            font-size: 36px;
        }
        .testimony-section .owl-carousel {
            margin: 0;
        }
        .testimony-section .owl-carousel .owl-stage-outer {
            padding: 20px 0 2em 0;
            position: relative;
        }
        .testimony-section .owl-nav {
            position: absolute;
            top: 100%;
            width: 100%;
        }
        .testimony-section .owl-nav .owl-prev {
            left: 50%;
            margin-left: -80px;
        }
        .testimony-section .owl-nav .owl-prev, .testimony-section .owl-nav .owl-next {
            position: absolute;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-top: -10px;
            outline: none !important;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            opacity: 0;
        }
        .testimony-section .owl-nav .owl-next {
            right: 50%;
            margin-right: -80px;
        }
        .testimony-section .owl-nav .owl-prev, .testimony-section .owl-nav .owl-next {
            position: absolute;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            margin-top: -10px;
            outline: none !important;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            opacity: 0;
        }
        .testimony-section .owl-dots {
            text-align: center;
        }
        .testimony-section .owl-dots .owl-dot.active {
            background: #064acb;
        }
        .owl-carousel .owl-dots .owl-dot {
            width: 10px;
            height: 10px;
            margin: 5px;
            border-radius: 50%;
            background: #e6e6e6;
            position: relative;
        }
        .testimony-section .owl-dots .owl-dot {
            width: 10px;
            height: 10px;
            margin: 5px;
            border-radius: 50%;
            background: rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        .owl-carousel .owl-dots .owl-dot:after {
            position: absolute;
            top: -2px;
            left: -2px;
            right: 0;
            bottom: 0;
            width: 14px;
            height: 14px;
            content: '';
            border: 1px solid #e6e6e6;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }
        .testimony-wrap {
            display: block;
            position: relative;
            background: white;
            padding: 0 20px;
            border-radius: 5px;
            border: 1px solid rgba(0, 0, 0, 0.02);
            -webkit-box-shadow: 0px 30px 33px -41px rgb(0 0 0 / 24%);
            -moz-box-shadow: 0px 30px 33px -41px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 30px 33px -41px rgb(0 0 0 / 24%);
        }
        .testimony-wrap .icon {
            position: absolute;
            top: -20px;
            left: 20px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f79f24;
        }

        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .testimony-wrap .user-img {
            width: 80px;
            height: 80px;
            position: relative;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }
        .user-img {
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
        .testimony-wrap .position {
            font-size: 14px;
            color: #333333;
        }
        .gallery ul {
            margin-left: -10px;
            margin-right: -10px;
            margin-bottom: 30px;
        }
        .gallery ul li {
            width: 33.33333%;
            float: left;
            /*padding: 15px;*/
        }
        .gallery ul li figure {
            width: 100%;
            float: left;
            background: #a91605;
            background: #a91605;
            margin-block-start: 0;
            margin-block-end: 0;
            margin-inline-start: 0;
            margin-inline-end: 0;
        }
        .gallery ul li figure a {
            float: left;
            width: 100%;
        }
        .gallery ul li figure img {
            width: 100%;
        }
        .gallery ul li:hover img {
            opacity: 0.7;
        }

        .gallery ul li figure img {
            width: 100%;
            height: 250px;
        }
    </style>
</head>
<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="<?= base_url(); ?>assets/img/logo-wml-2.png" style="width: 200px;" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">

                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="blue-bg"><a href="index.html"><span>Home</span></a></li>
                                                <li class="blue-bg"><a href="about.html"><span>About</span></a></li>
                                                <li class="blue-bg"><a href="services.html"><span>Services</span></a></li>
                                                <li class="blue-bg"><a href="blog.html"><span>Blog</span></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li>
                                                <li class="blue-bg"><a href="contact.html"><span>Contact</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <!-- <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="contact.html" class="btn header-btn">Get A Qoue</a>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>

        <div class="slider-area ">
            <div class="slider-active">

                <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(assets/img/bg-main.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="hero__caption">
                                    <h1>Safe & Reliable <span>Logistic</span> Solutions!</h1>
                                </div>

                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Your Tracking ID">
                                    </div>
                                    <div class="search-form">
                                        <a href="#">Track & Trace</a>
                                    </div>
                                </form>

                                <div class="hero-pera">
                                    <p>For order status inquiry</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height d-flex align-items-center" style="background-image: url(assets/img/hero/h1_hero.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9">
                                <div class="hero__caption">
                                    <h1>Safe & Reliable <span>Logistic</span> Solutions!</h1>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="our-info-area pt-70 pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-support"></span>
                            </div>
                            <div class="info-caption">
                                <p>Call Us</p>
                                <span>(021) 84998777</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="info-caption">
                                <p>Email Us</p>
                                <span>sales@wmlogistics.co.id</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-info mb-30">
                            <div class="info-icon">
                                <span class="flaticon-place"></span>
                            </div>
                            <div class="info-caption">
                                <p>Address</p>
                                <span>Jatibening Baru - Pondok Gede</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="categories-area section-padding30" style="padding-bottom: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-tittle text-center mb-80">
                            <span>Our Services</span>
                            <h2>What We Can Do For You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-shipped"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">ROAD FREIGHT</a></h5>
                                <p>Move all your packs and heart with us. Wahana Multi Logistics give the best serve you’ll never forget</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-ship"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">OCEAN FREIGHT</a></h5>
                                <p>Competitive cost for ocean freight and offer much more flexibility in terms of space with Wahana Multi Logistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-airplane"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">AIR FREIGHT</a></h5>
                                <p>Fast and reliable. You deserve to get the best air freight services on it class by trust Wahana Multi Logistic</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-road"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">EXPEDITIED</a></h5>
                                <p>Wahana Multi Logistics let you into the priority level, securing the quality and set the guaranted delivery time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery categories-area section-padding30" style="padding-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-tittle text-center mb-20">
                            <h2>WHY CHOSE US</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="accordion">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <a href="#" style="display: block;" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <span>You are our priority</span>
                                  <i class="fas fa-plus" style="float: right;"></i>
                                </a>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                Get closer than ever to you. So close that we tell you what needed well before you realize it selves
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                <a href="#" style="display: block;" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <span>Profesional staff ready to accompany you</span>
                                  <i class="fas fa-plus" style="float: right;"></i>
                                </a>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                Our team is committed to delivering excellence throughout the process by understanding the company’s objectives
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                <a href="#" style="display: block;" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <span>Competitive price</span>
                                  <i class="fas fa-plus" style="float: right;"></i>
                                </a>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                We do well to ensure that our prices are very affordable compared to prevailing prices while at the same time providing you with superior quality
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <h5 class="mb-0">
                                <a href="#" style="display: block;" class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  <span>Experience services</span>
                                  <i class="fas fa-plus" style="float: right;"></i>
                                </a>
                              </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="card-body">
                                we’ll do our best to leverage our many years of experience to deliver the most professional service in the expedition
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery categories-area section-padding30" style="padding-bottom: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="section-tittle text-center mb-20">
                            <h2>Our Gallery</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <ul>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/5NZ-F_Resize-547x547-1.png" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/Pengiriman-Sampel-COVID-19-wmlogistics-1-1024x768.jpeg" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/Pengiriman-Sampel-COVID-19-wahana-multi-logistik-2-1024x768.jpeg" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/Pengiriman-Sampel-COVID-19-wahana-multi-logistik-1-1024x768.jpeg" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/wmlogistics-crane3-1024x768.jpg" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/WhatsApp-Image-2020-03-15-at-14.40.20-768x1024.jpeg" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/Bio-Bottle-3672-F_ResizeSquare-547x547.png" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/BB-PPM-3095-F_Resize-547x547.png" alt="Image"></a></figure></li>
                            <li><figure><a href="assets/img/image1.jpg" class="fancybox"><img src="assets/img/Pengiriman-Sampel-COVID-19-wmlogistics-2-1024x768.jpeg" alt="Image"></a></figure></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-low-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">

                            <div class="section-tittle mb-35">
                                <span>About Our Company</span>
                                <h2>Safe Logistic & Transport Solutions That Saves our Valuable Time!</h2>
                            </div>
                            <p>Wahana Multi Logistik (WML) agrees and has highest commitment to being able to meet or exceed customer expectations and maintain the quality of service to customers by applying the concept of appropriate operations, continuous improvement, helpful, trustworthiness and cooperation, by enforcing the efficiency of logistics services and providing a health workplace and safety</p>
                            <a href="about.html" class="btn">More About Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">

                        <div class="about-img ">
                            <!-- <div class="about-font-img">
                                <img src="assets/img/gallery/about2.png" alt="">
                            </div> -->
                            <iframe width="560" height="415" src="https://www.youtube.com/embed/NtUZ_w7tSP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row justify-content-end">

                    <div class="col-xl-8 col-lg-9">
                        <div class="contact-form-wrapper">

                            <div class="row">
                                <div class="col-lg-12">

                                    <div class="section-tittle mb-50">
                                        <span>Get a Qote For Free</span>
                                        <h2>Request a Free Quote</h2>
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                                    </div>
                                </div>
                            </div>

                            <form action="#" class="contact-form">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-form">
                                            <input type="text" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="select-items">
                                            <select name="select" id="select1">
                                                <option value="">Freight Type</option>
                                                <option value="">Catagories One</option>
                                                <option value="">Catagories Two</option>
                                                <option value="">Catagories Three</option>
                                                <option value="">Catagories Four</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="City of Departure">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Incoterms">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Weight">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Height">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Width">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="length">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="radio-wrapper mb-30 mt-15">
                                            <label>Extra services:</label>
                                            <div class="select-radio">
                                                <div class="radio">
                                                    <input id="radio-1" name="radio" type="radio" checked="">
                                                    <label for="radio-1" class="radio-label">Freight</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-2" name="radio" type="radio">
                                                    <label for="radio-2" class="radio-label">Express Delivery</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-4" name="radio" type="radio">
                                                    <label for="radio-4" class="radio-label">Insurance</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio-5" name="radio" type="radio">
                                                    <label for="radio-5" class="radio-label">Packaging</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button name="submit" class="submit-btn">Request a Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="ftco-section testimony-section bg-light">
            <div class="container">
                <div class="row justify-content-center pb-3 mb-3">
                    <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                        <span class="subheading">Testimonies</span>
                        <h2>Happy Clients &amp; Feedbacks</h2>
                    </div>
                </div>
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(assets/img/comment/comment_1.png)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(assets/img/comment/comment_2.png)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(assets/img/comment/comment_3.png)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(assets/img/comment/comment_1.png)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(assets/img/comment/comment_2.png)"></div>
                                            <div class="pl-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="clients section-bg" style="background-color: #fff;">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-tittle text-center mb-80">
                        <span style="margin-top: 15px;">Our Clients</span>
                        <h2>THE BEST PARTNER WHO TRUST US</h2>
                    </div>
                </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <ul>
                    <li>
                      <figure>
                        <h5><img src="assets/img/TelkomIndonesia.png" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/logo-inkop.png" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/rsz_dhl.jpg" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/rsz_2logo-pt-len-industri-persero.png" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/logo_ta-1024x341.png" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/Logo-TPK-New_Smaller_V2-921x1024.jpg" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/KUR-BRI.jpg" alt="Image"></h5>
                      </figure>
                    </li>
                    <li>
                      <figure>
                        <h5><img src="<?= base_url(); ?>assets/img/1551665240445-e1580388063157.png" alt="Image"></h5>
                      </figure>
                    </li>
                  </ul>
                </div>
              </div> 
            </div>
        </section>
    </main>
    <footer>
        <div class="color-part2"></div>
        <div class="color-part"></div>
        <div class="container-fluid">
            <div class="row block-content">
                <div class="col-xs-8 col-sm-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <a href="#" class="logo-footer"></a>
                    <p>Is one of logistics company in Indonesia with rapidly growth and focus for their market and customer satisfication. Starting business on 2001 with name PT Wahana Multi Indonesia, we develop existence business in transportation service. We are commit to provide best service to customer which is supported good management and profesional logistics skill</p>
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                        <a href="#"><i class="fa fa-vimeo-square fa-2x"></i></a>
                    </div>
                    <a href="#" class="btn btn-lg btn-danger">GET A FREE QUOTE</a>
                </div>
                <div class="col-xs-4 col-sm-2 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <h4>WE OFFERS</h4>
                    <nav>
                        <a href="#">Sea Freight</a>
                        <a href="#">Road Transportation</a>
                        <a href="#">Air Freight</a>
                        <a href="#">Railway Logistics</a>
                        <a href="#">Packaging &amp; Storage</a>
                        <a href="#">Warehousing</a>
                    </nav>
                </div>
                <div class="col-xs-6 col-sm-2 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <h4>MAIN LINKS</h4>
                    <nav>
                        <a href="01_home.html">Home</a>
                        <a href="06_services.html">Our Services</a>
                        <a href="04_about.html">About Us</a>
                        <a href="07_services.html">News</a>
                        <a href="10_blog.html">Shop</a>
                        <a href="12_contact.html">Contact</a>
                    </nav>
                </div>
                <div class="col-xs-6 col-sm-4 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <h4>CONTACT INFO</h4>
                    
                    <div class="contact-info">
                        <span>
                            <i class="fa fa-location-arrow"></i>
                            <strong>Wahana Multi Logistics.</strong>
                            <br>Jalan Kemang Raya No. 52, Jati Cempaka,<br>
                            <span style="padding-left: 25px;margin-bottom: 0;">Pondok Gede, Jatibening Baru, RT.001/RW.002, Jaticempaka, </span>
                            <span style="padding-left: 25px;margin-bottom: 0;">Kec. Pondokgede, Kota Bekasi, Jawa Barat 17411</span>
                        </span>
                        <span><i class="fa fa-phone"></i>+ 6221 84998777</span>
                        <span><i class="fa fa-envelope"></i>sales@wmlogistics.co.id</span>
                    </div>
                </div>
            </div>
            <div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
                © 2020 PT. Wahana Multi Logistics All Rights Reserved
            </div>
        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/slick.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.js"></script>

    <script src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>

    <script src="<?= base_url(); ?>assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".collapse.show").each(function(){
                $(this).prev(".card-header").find(".fas").addClass("fa-minus").removeClass("fa-plus");
            });
            
            $(".collapse").on('show.bs.collapse', function(){
                $(this).prev(".card-header").find(".fas").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
                $(this).prev(".card-header").find(".fas").removeClass("fa-minus").addClass("fa-plus");
            });
        });
    </script>
</body>
</html>

<?php 
// $this->load->view($js);
// if ($this->router->fetch_class() != 'home'){            
//     $this->load->view($main); 
// }
// else {                  
//     $this->load->view('home/index'); 
// } 
?> 