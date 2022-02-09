<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wahana Multi Logistics</title>
    <meta name="description" content="wmlogistics,wml,wahana multi logistik,wahana,wmlogistics.co.id,dgpack,logistik">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="SDsevYWVCOfZySvTRsctRyMg0YG13gwyNaYHGiuqh24" />
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
        .slider-height {
            min-height: 630px;
        }
        .slider-height2 {
            min-height: 160px;
        }

        .main-header{
            position: sticky;
            left: 0;
            right: 0;
            top: 20px;
            z-index: 9999;
            /*background-color: transparent;*/
            -webkit-transition: .5s;
            transition: .5s;
            padding: 10px;
        }
        @media (max-width: 575px){
            .about-low-area{
                display: none;
            }
            .main-header{
                position: relative !important;
                top: 0 !important;
            }
        }
        .card h5 a:hover {
            color: #a91605;
        }
        .header-area {
            background: rgba(16, 24, 79, 0.95);
            /*background: linear-gradient( 45deg, #202168, #07103b);*/
            z-index: auto;
            position: static;
            top: auto;
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
            border: solid;
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
        .categories-area .single-cat .cat-icon span {
            margin-bottom: 0px;
        }
        .categories-area .single-cat::before {
            background: #a91605;
        }
        .categories-area .single-cat {
            background: #1a1a4c;
            padding: 18px 22px;
             background-image: -webkit-radial-gradient(top, circle cover, #27246d 50%, #7676b4 50%);
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
            padding-top: 65px;
        }
        .slider-area form.search-box .search-form a {
            background: #a91605;
        }
        .slider-area .hero__caption h1{
            color:#040474;
        }
        .btn {
            background: #d71700;
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
                                    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/logo-wml-2.png" style="width: 200px;" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper  d-flex align-items-center justify-content-end">

                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="blue-bg"><a href="<?= base_url(); ?>"><span>Home</span></a></li>
                                                <li class="blue-bg"><a href="<?= base_url(); ?>tracking"><span>Tracking</span></a></li>
                                                <li class="blue-bg"><a href="<?= base_url(); ?>about"><span>About</span></a></li>
                                                <li class="blue-bg"><a href="<?= base_url(); ?>services"><span>Services</span></a></li>
                                                <!-- <li class="blue-bg"><a href="blog.html"><span>Blog</span></a>
                                                    <ul class="submenu">
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog_details.html">Blog Details</a></li>
                                                        <li><a href="elements.html">Element</a></li>
                                                    </ul>
                                                </li> -->
                                                <li class="blue-bg"><a href="<?= base_url(); ?>contact"><span>Contact</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                        <a href="<?= base_url(); ?>dgpack" class="btn header-btn">Wahana DGPack</a>
                                    </div>
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
        <?php
            if ($this->router->fetch_class() != 'home'){            
                $this->load->view($main); 
            }
            else {                  
                $this->load->view('home/index'); 
            } 
        ?>
        
    </main>
    <footer>
        <div class="color-part2"></div>
        <div class="color-part"></div>
        <div class="container-fluid">
            <div class="row block-content" style="margin-bottom: 0;">
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
                    <!-- <a href="#" class="btn btn-lg btn-danger">GET A FREE QUOTE</a> -->
                </div>
                <div class="col-xs-4 col-sm-2 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <h4>WE OFFERS</h4>
                    <nav>
                        <a href="<?= base_url() ?>services">Sea Freight</a>
                        <a href="<?= base_url() ?>services">Road Transportation</a>
                        <a href="<?= base_url() ?>services">Air Freight</a>
                        <a href="http://www.atrhaya.co.id">Training</a>
                    </nav>
                </div>
                <div class="col-xs-6 col-sm-2 wow zoomIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: zoomIn;">
                    <h4>MAIN LINKS</h4>
                    <nav>
                        <a href="<?= base_url() ?>">Home</a>
                        <a href="<?= base_url() ?>services">Our Services</a>
                        <a href="<?= base_url() ?>about">About Us</a>
                        <a href="<?= base_url() ?>contact">Contact</a>
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
                        <span>
                            <i class="fa fa-location-arrow"></i>
                            <strong>Branch Surabaya</strong>
                            <br>Perkantoran Pasar Wisata<br>
                            <span style="padding-left: 25px;margin-bottom: 0;">Jl. Raya Pabean Blok I/6, Pabean Sedati, </span>
                            <span style="padding-left: 25px;margin-bottom: 0;">Sidoarjo
                            Jawa Timur 61253</span>
                        </span>
                        <span>
                            <i class="fa fa-location-arrow"></i>
                            <strong>Branch Cengkareng</strong>
                            <br>Komp. Ruko Duta Garden Square<br>
                            <span style="padding-left: 25px;margin-bottom: 0;">Blok C-35, Jurumudi Baru, Benda
                                Tangerang – Banten 15124</span>
                        </span>
                        
                        <span><i class="fa fa-phone"></i>+ 6221 84998777</span>
                        <span><i class="fa fa-envelope"></i>herwinda_winda@wahanamulti.com</span>
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
    <script src="<?= base_url(); ?>assets/js/tilt.jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script> -->
    
    <script type="text/javascript">
        $(document).ready(function(){
            

            onHoverthreeDmovement();

            $(".collapse.show").each(function(){
                $(this).prev(".card-header").find(".fas").addClass("fa-minus").removeClass("fa-plus");
            });
            
            $(".collapse").on('show.bs.collapse', function(){
                $(this).prev(".card-header").find(".fas").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
                $(this).prev(".card-header").find(".fas").removeClass("fa-minus").addClass("fa-plus");
            });
        });

        function onHoverthreeDmovement() {
            var tiltBlock = $('.js-tilt');
            if(tiltBlock.length) {
                $('.js-tilt').tilt({
                    maxTilt: 20,
                    perspective:700, 
                    glare: true,
                    maxGlare: 0
                })
            }
        }
      
    </script>
    <? $this->load->view($js); ?> 
</body>
</html>
