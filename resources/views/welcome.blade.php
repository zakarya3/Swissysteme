@extends('layouts.header')
@section('content')

<main>
    <!--slider-area start-->
    <div class="slider-area pos-rel">
        <div class="slider-active">
            <div class="single-slider slider-height pos-rel d-flex align-items-center"
                style="background-image: url({{ asset('frontend/images/slider/slider5.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="slider__content text-center pt-70">
                                <h5 class="line pos-rel mb-30">Photovoltaïque</h5>
                                <h1 class="mb-20" data-animation="fadeInUp" data-delay=".5s">solair</h1>
                                <p class="slider-para mb-25">Le développement durable est un axe majeur de SwisSysteme. Elle sait donc répondre aux exigences de ses clients dans le domaine du photovoltaique.</p>
                                <ul class="btn-list">
                                    <li><a class="theme_btn" href="{{ url('/contact') }}" data-animation="fadeInUp"
                                            data-delay=".7s">Get Started <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a class="theme_btn" href="{{ url('/contact') }}" data-animation="fadeInUp"
                                            data-delay=".8s">Learn More <i class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height pos-rel d-flex align-items-center"
                style="background-image: url({{ asset('frontend/images/slider/slide8.jpg') }});">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="slider__content text-center pt-70">
                                <h5 class="line pos-rel mb-30">Electricité</h5>
                                <h1 class="mb-20" data-animation="fadeInUp" data-delay=".5s">Electricité</h1>
                                <p class="slider-para mb-25">Swissysteme propose une gamme complète de solutions moyenne et basse tension pour installer, connecter, protéger, contrôler et mesurer de nombreuses installations électriques, tableaux, appareils électroniques et électromécaniques.</p>
                                <ul class="btn-list">
                                    <li><a class="theme_btn" href="{{ url('/contact') }}" data-animation="fadeInUp"
                                            data-delay=".7s">Get Started <i class="far fa-long-arrow-right"></i></a></li>
                                    <li><a class="theme_btn" href="{{ url('/contact') }}" data-animation="fadeInUp"
                                            data-delay=".8s">Learn More <i class="far fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height pos-rel d-flex align-items-center"
            style="background-image: url({{ asset('frontend/images/slider/slide7.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider__content text-center pt-70">
                            <h5 class="line pos-rel mb-30">Climatisation</h5>
                            <h1 class="mb-20" data-animation="fadeInUp" data-delay=".5s">Froid</h1>
                            <p class="slider-para mb-25">Spécialiste du froid, SwisSysteme assure l'installation, la mise en service et la maintenance d'installations frigorifiques (froid commercial, froid industriel,...) ou d'équipements de conditionnement d'air et de climatisation.</p>
                            <ul class="btn-list">
                                <li><a class="theme_btn" href="{{ url('/contact') }}" data-animation="fadeInUp"
                                        data-delay=".7s">Get Started <i class="far fa-long-arrow-right"></i></a></li>
                                <li><a class="theme_btn" href="{{ url('/contact') }}" data-animation="fadeInUp"
                                        data-delay=".8s">Learn More <i class="far fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--slider-area start-->
    <!--service-area start-->
    <section class="service-area pos-rel pt-130 pb-110">
        <div class="service-shape pos-abl"><img src="{{ asset('frontend/images/shape/shape5.png') }}sset }}" alt=""></div>
        <div class="container">
            <div class="row service-inner-row">
                <div class="col-xl-4 col-lg-4 col-md-6 ">
                    <div class="card" >
                        <img src="{{ asset('frontend/images/offre/business-concept-with-team-close-up.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" style="margin-top: 12px;">ÉQUIPE HUMAINE</h5>
                          <p class="card-text" style="height: 12vh">Swissysteme présente une équipe humaine hautement qualifiée dans chaque domaine.</p>
                          <a href="{{ url('/contact') }}" style="background-color: #ed2232; margin-top: 10px; border: none;" class="btn btn-primary">Contact</a>
                        </div>
                      </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('frontend/images/offre/handshake-business-men-concept.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" style="margin-top: 12px;">MARCHÉS ET CLIENTS</h5>
                          <p class="card-text" style="height: 12vh">Nous fournissons des produits et des services que dépassent les attentes de nos clients.</p>
                          <a href="{{ url('/contact') }}" style="background-color: #ed2232; margin-top: 10px; border: none;" class="btn btn-primary">Contact</a>
                        </div>
                      </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="card" >
                        <img src="{{ asset('frontend/images/offre/hands-with-world-plant.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" style="margin-top: 12px;">QUALITÉ ET ENVIRONNEMENT</h5>
                          <p class="card-text" style="height: 12vh">Nous respectons la législation existante au moment en comportant d'une manière respectueuse avec l'environnement.</p>
                          <a href="{{ url('/contact') }}"y style="background-color: #ed2232; margin-top: 10px; border: none;" class="btn btn-primary">Contact</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!--service-area end-->
    <!--history-area start-->
    <section class="history-area pos-rel pt-80 pb-120">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="history mb-30">
                        <div class="history__thumb data-tilt ">
                            <img class="img-fluid" src="{{ asset('frontend/images/chose/chose6.jpg') }}" alt="">
                        </div>
                        <div class="history__progress d-sm-flex align-items-center justify-content-between theme-bg ml-70 pos-rel">
                            <div class="chart pos-rel mr-40" data-percent="100" aria-valuemin="70" data-scale-color="#ffb400">
                                <div class="chart__number pos-abl">100<span>%</span></div> 
                            </div>
                            <div class="history__progress__text">
                                <h5>FIABILITÉ</h5>
                                <h5>EFFICACITÉ</h5>
                                <h5>SOUTENABILITÉ</h5>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="history-wrapper pl-135">
                        <div class="section-title mb-45">
                            <h6 class="mb-30">Présentation</h6>
                            <h2 class="mb-30">Produits d'une qualité maximale et excellente services</h2>
                        </div>
                        <div class="history__content">
                            <h2 class="history__content__title mt-10 mr-25">S</h2>
                            <span class="history__content__para">SwisSystme est une société de distribution, d'installation et de conseils. Cette société est née d'une volonté de répondre au mieux aux attentes des particuliers et industriels dans le secteur d'électricité, des énergies renouvelables, de climatisation et de plomberie.
                            </span>
                            <p class="mt-30 mb-40"></p>
                            <a href="{{ url('/contact') }}" class="theme_btn">Learn More <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--history-area end-->
    <!--promotion-area start-->
    <section class="promotion-area black-soft-bg pos-rel pt-125 pb-100">
        <div class="promotion-shape-one pos-abl"><img src="{{ asset('frontend/images/promotion-shape/shape2.png') }}" alt=""></div>
        <div class="promotion-shape-two pos-abl"><img src="{{ asset('frontend/images/promotion-shape/shape3.png') }}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="section-title white-title text-center mb-75">
                        <h6 class="mb-25">Notre Offre</h6>
                        <h2>Meilleure offre pour les solutions solaires renouvelables</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="promotion text-center pos-rel mb-30">
                        <div class="promotion__thumb mb-35">
                            <i class="flaticon-solar-panel"></i>
                        </div>
                        <div class="promotion__text">
                            <h6 class="mb-15">La qualité</h6>
                            <p class="mb-15">Une qualité d'exécution assurée par le professionnalisme, de nos installateurs.</p>
                            <a href="{{ url('/contact') }}" class="more_btn">Plus de détails <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="promotion text-center pos-rel mb-30">
                        <div class="promotion__thumb mb-35">
                            <i class="flaticon-solar-panel-1"></i>
                        </div>
                        <div class="promotion__text">
                            <h6 class="mb-15">Le service</h6>
                            <p class="mb-15">Un suivi continu de la conception au raccordement.</p>
                            <a href="{{ url('/contact') }}" class="more_btn">Plus de détails <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="promotion text-center pos-rel mb-30">
                        <div class="promotion__thumb mb-35">
                            <i class="flaticon-power"></i>
                        </div>
                        <div class="promotion__text">
                            <h6 class="mb-15">Les prix</h6>
                            <p class="mb-15">DES PRIX ATTRACTIFS ET COMPETITIFS.</p>
                            <a href="{{ url('/contact') }}" class="more_btn">Plus de détails <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="promotion text-center pos-rel mb-30">
                        <div class="promotion__thumb mb-35">
                            <i class="flaticon-plug"></i>
                        </div>
                        <div class="promotion__text">
                            <h6 class="mb-15">La garanti</h6>
                            <p class="mb-15">Du matériel haut de gamme, garanti pour son rendement et sa longévité exceptionnels</p>
                            <a href="{{ url('/contact') }}" class="more_btn">Plus de détails <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promotion-area end-->
    <!--statistics-area start-->
    <!--promotion-area start-->
    <section class="promotion-area promotion-area-02 pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="section-title text-center mb-75">
                        <h6 class="mb-25">Notre Service</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div style="height: 95vh;" class="promotion3 text-center pos-rel mb-30">
                        <div class="promotion3__box pos-rel mb-85">
                            <div class="promotion3__box--thumb">
                                <img style="height: 40vh; object-fit: cover;" class="img-fluid" src="{{ asset('frontend/images/service/service12.jpg') }}" alt="">
                            </div>
                            
                            <div class="promotion3__box--icon">
                                <i class="flaticon-power"></i>
                            </div>
                        </div>
                        <div class="promotion3__text">
                            <h6 class="mb-15"><a href="{{ url('/contact') }}">Photovoltaïque</a></h6>
                            <p style="height: 25vh;">Le développement durable est un axe majeur de SwisSysteme. Elle sait donc répondre aux exigences de ses clients dans le domaine du photovoltaique.</p>
                            <a href="{{ url('/contact') }}" class="more_btn2"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div style="height: 95vh;" class="promotion3 text-center pos-rel mb-30">
                        <div class="promotion3__box pos-rel mb-85">
                            <div class="promotion3__box--thumb">
                                <img style="height: 40vh; object-fit: cover;" class="img-fluid" src="{{ asset('frontend/images/promotion-shape/3.jpg') }}" alt="">
                            </div>
                            
                            <div class="promotion3__box--icon">
                                <i class="flaticon-plug"></i>
                            </div>
                        </div>
                        <div class="promotion3__text">
                            <h6 class="mb-15"><a href="{{ url('/contact') }}">Electricité</a></h6>
                            <p style="height: 25vh;">Swissysteme propose une gamme complète de solutions moyenne et basse tension pour installer, connecter, protéger, contrôler et mesurer de nombreuses installations électriques, tableaux, appareils électroniques et électromécaniques.</p>
                            <a href="{{ url('/contact') }}" class="more_btn2"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div style="height: 95vh;" class="promotion3 text-center pos-rel mb-30">
                        <div class="promotion3__box pos-rel mb-85">
                            <div class="promotion3__box--thumb">
                                <img style="height: 40vh; object-fit: cover;" class="img-fluid" src="{{ asset('frontend/images/promotion-shape/5.jpg') }}" alt="">
                            </div>
                            
                            <div class="promotion3__box--icon">
                                <i class="flaticon-helmet"></i>
                            </div>
                        </div>
                        <div class="promotion3__text">
                            <h6 class="mb-15"><a href="{{ url('/contact') }}">Climatisation</a></h6>
                            <p style="height: 25vh;">Spécialiste du froid, SwisSysteme assure l'installation, la mise en service et la maintenance d'installations frigorifiques (froid commercial, froid industriel,...) ou d'équipements de conditionnement d'air et de climatisation.</p>
                            <a href="{{ url('/contact') }}" class="more_btn2"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--statistics-area end-->
    <!--chose-us-area start-->
    <section class="chose-us-area pos-rel pb-100">
        <div class="chose-shape pos-abl d-none d-md-block"><img src="{{ asset('frontend/images/shape/round01.png') }}" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="chose-wrapper pr-35">
                        <div class="skill d-sm-flex align-items-center mb-35">
                            <div class="chart2 pos-rel mr-35" data-percent="80" aria-valuemin="70" data-scale-color="#ffb400">
                                <div class="chart__number number2 pos-abl"><i class="flaticon-clock"></i></div> 
                            </div>
                            <div class="skill__text">
                                <h5 class="semi-title">Répondre à vos besoins</h5>
                            </div>
                        </div>
                        <div class="skill d-sm-flex align-items-center mb-35">
                            <div class="chart3 pos-rel mr-35" data-percent="80" aria-valuemin="70" data-scale-color="#ffb400">
                                <div class="chart__number number3 pos-abl"><i class="flaticon-chat"></i></div> 
                            </div>
                            <div class="skill__text">
                                <h5 class="semi-title">S'adapter à vos plannings</h5>
                            </div>
                        </div>
                        <div class="skill d-sm-flex align-items-center mb-35">
                            <div class="chart2 pos-rel mr-35" data-percent="80" aria-valuemin="70" data-scale-color="#ffb400">
                                <div class="chart__number number2 pos-abl"><i class="flaticon-drill"></i></div> 
                            </div>
                            <div class="skill__text">
                                <h5 class="semi-title">Accompagner vos projets</h5>
                            </div>
                        </div>
                        <div class="skill d-sm-flex align-items-center mb-35">
                            <div class="chart3 pos-rel mr-35" data-percent="80" aria-valuemin="70" data-scale-color="#ffb400">
                                <div class="chart__number number3 pos-abl"><i class="flaticon-quote"></i></div> 
                            </div>
                            <div class="skill__text">
                                <h5 class="semi-title">Être proches de vous</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="chose mb-30">
                        <div class="chose__img__one text-right  mb-30">
                            <img src="{{ asset('frontend/images/chose/gallery-img02.jpg') }}" alt="">
                        </div>
                        <div class="chose__img__two pos-rel text-center mb-30">
                            <img src="{{ asset('frontend/images/chose/chose2.jpg') }}" style="width: 100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--chose-us-area end-->
    
</main>
@endsection