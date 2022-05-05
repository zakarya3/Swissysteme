<!doctype html>
<html class="no-js" lang="">
<!-- Mirrored from www.devsnews.com/template/Swissysteme/Swissysteme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 11:17:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Swissysteme | Produits D'une Qualité maximale et excellent services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/logo/shortcut.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- header-area start -->
    <header id="top-menu">
        <div class="header-top-area d-none d-lg-block">
            <div class="container custom-container">
                <div class="header-top-bg grey-bg pt-25 pb-15 pr-115 pl-100">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-6 d-none d-lg-block">
                            <div class="headers2 d-sm-flex align-items-center justify-content-center">
                                <div class="headers2__cta__icon mr-20">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="headers2__cta">
                                    <h6>Siège social</h6>
                                    <span>N°78 Av el Amir Abd  Elkader El Massira - Agadir</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="headers2 d-flex align-items-center justify-content-center">
                                <div class="headers2__cta__icon mr-20">
                                    <i class="flaticon-mail"></i>
                                </div>
                                <div class="headers2__cta">
                                    <h6>Adresse e-mail</h6>
                                    <span>info@swissysteme.ma</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-lg-block">
                            <div class="headers2 d-flex align-items-center justify-content-center">
                                <div class="headers2__cta__icon mr-20">
                                    <i class="flaticon-available"></i>
                                </div>
                                <div class="headers2__cta">
                                    <h6>Numéro de téléphone</h6>
                                    <span>+212 528 23 23 29</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="headers2 header2__social text-right">
                               <a href="https://www.facebook.com/Swiss-systeme-101694591851221"><i class="fab fa-facebook-f"></i></a>
                               <a href="#"><i class="fab fa-twitter"></i></a>
                               <a href="https://www.instagram.com/swissysteme/"><i class="fab fa-instagram"></i></a>
                               <a href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area">
            <div class="container custom-container">
                <div class="main-header-bg pr-115 pl-115 white-bg">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                            <div class="logo">
                                <a class="logo-img" href="index.html"><img src="{{ asset('frontend/images/logo/logo.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 d-none d-lg-block">
                            <div class="main-menu d-none d-lg-block text-right">
                                <nav>
                                    <ul>
                                        <li><a class="active" href="{{ url('/') }}">Acceuil</a></li>
                                        <li><a href="#">Produits <i class="far fa-chevron-down"></i></a>
                                            <ul class="submenu">
                                                @foreach ($category as $item)
                                                 <li><a href="{{ url('products/products-items/'.$item->id) }}">{{ $item->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="portfolio-details.html">Projets</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                        <li><a href="shop.html">Références</a></li>
                                        <li><a href="{{ url('myorders') }}">Mes commandes</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-4 col-6 text-right">
                            <div class="hamburger-menu">
                                <a href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="index.html">
                    <img src="{{ asset('frontend/images/logo/logo-svg.svg') }}" style="width: 80%;" alt="logo">
                </a>
            </div>
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">Présentation</h4>
                    <p class="mb-30">
                        Swissysteme est une société de distribution,
                        d'installation et de conseils. Cette
                        société
                        est
                        née d'une volonté de
                        répondre au mieux aux attentes des particuliers et
                        industriels dans le secteur d'électricité,
                        des
                        énergies
                        renouvelables, de climatisation et de plomberie.
                    </p>
                    <a class="theme_btn" href={{ url('/contact') }}">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                <li class="has-dropdown">
                    <a href="index.html">Accueil</a>
                </li>
                <li class="has-dropdown">
                    <a href="#">Produits</a>
                    <ul class="sub-menu">
                        @foreach ($category as $item)
                            <li><a href="{{ url('products/products-items/'.$item->id) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="portfolio-details.html">Projets</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li><a href="contact.html">Références</a></li>
                <li><a href="{{ url('myorders') }}">Mes commandes</a></li>
                <li><a href="{{ url('cart') }}">Panier</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->
    @yield('content')
    <!--footer-area start-->
    <footer class="footer-area pos-rel black-soft-bg pt-100">
        <div class="fot-shape pos-abl">
            <img src="{{ asset('frontend/images/shape/fot-shape2.png') }}" alt="">
        </div>
        <div class="fot-shape-two pos-abl">
            <img src="{{ asset('frontend/images/shape/fot-shape3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row footer-top-cta pb-50">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer__widget black-soft-bg2 text-center mb-30 pt-40 pb-40">
                        <div class="footer__widget__icon mb-10"><img src="{{ asset('frontend/images/icon/icon4.png') }}" alt=""></div>
                        <div class="footer__widget__icon__block mb-10"><img src="{{ asset('frontend/images/icon/icon04.png') }}" alt=""></div>
                        <h6 class="mb-10">Phone Number</h6>
                        <span>+212 528 23 23 29</span>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer__widget black-soft-bg2 text-center mb-30 pt-50 pb-50">
                        <div class="footer__widget__icon mb-10">
                            <a href="index.html" class="footer-logo"><img src="{{ asset('frontend/images/logo/logo-svg.svg') }}" style="width: 80%;" alt=""></a>
                        </div>
                        <div class="footer__widget__icon__block mb-10"><img src="{{ asset('frontend/images/logo/logo-svg.svg') }}" style="width: 80%;" alt=""></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer__widget black-soft-bg2 text-center mb-30 pt-40 pb-40">
                        <div class="footer__widget__icon mb-10"><img src="{{ asset('frontend/images/icon/icon6.png') }}" alt=""></div>
                        <div class="footer__widget__icon__block mb-10"><img src="{{ asset('frontend/images/icon/icon06.png') }}" alt=""></div>
                        <h6 class="mb-10">Email Address</h6>
                        <span>info@swissysteme.ma</span>
                    </div>
                </div>
            </div>
            <div class="row footer-bottom-area pb-30 mb-30">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer__widget mb-30 pr-30">
                        <h5 class="bottom-line pos-rel mb-30 pb-25">About Company</h5>
                        <p>SwisSystme est une société de distribution, d'installation et de conseils. Cette société est née d'une volonté de répondre au mieux aux attentes des particuliers et industriels dans le secteur d'électricité, des énergies renouvelables, de climatisation et de plomberie.</p>
                        <div class="header2__social foter__social mt-15">
                            <a href="https://www.facebook.com/Swiss-systeme-101694591851221"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/swissysteme/"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6">
                    <div class="footer__widget mb-30">
                        <h5 class="bottom-line pos-rel mb-30 pb-25">Quick Links</h5>
                        <ul class="fot-list">
                            <li><a href="{{ url('/') }}"><i class="fas fa-chevron-double-right"></i> Accueil</a></li>
                            <li><a href="{{ url('/contact') }}"><i class="fas fa-chevron-double-right"></i> Contact</a></li>
                            <li><a href="#"><i class="fas fa-chevron-double-right"></i> Références</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7">
                    <div class="footer__widget mb-30 ml-35">
                        <h5 class="bottom-line pos-rel mb-30 pb-25">Bienvenue sur :</h5>
                        <img style="width: 100%;" src="{{ asset('frontend/images/logo/logo-svg.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row copy-right-area pos-rel">
                <!--scroll-target-btn-->
                <a href="#top-menu" class="scroll-target"><i class="far fa-long-arrow-up"></i></a>
                <!--scroll-target-btn-->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="copyright text-left mb-40">
                        <p>Copy@ 2020 <a href="#">Swissysteme</a>, Al Right Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="bottom-nav text-right mb-30">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="{{ url('/dashboard') }}">Connexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer-area end-->



    <!-- JS here -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/one-page-nav-min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('frontend/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/qty.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>


<!-- Mirrored from www.devsnews.com/template/Swissysteme/Swissysteme/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2022 11:18:29 GMT -->
</html>