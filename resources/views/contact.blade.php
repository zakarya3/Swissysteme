@extends('layouts.header')
@section('content')
<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url({{ asset('frontend/images/chose/page-title-bg1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="shadow-text3 page-shadow">Conatct</div>
                <div class="col-xl-8 offset-xl-2">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Accueil</a></li>
                                <li>Conatct Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--contact-map-area start-->
    <section class="contact-map-area">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13763.54788193011!2d-9.5655388!3d30.4109486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a8156d5f5dd3e7b!2sSB-TECH!5e0!3m2!1sen!2sma!4v1651770566479!5m2!1sen!2sma" style="width: 100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-map-area end-->
    <!--contact-area start-->
    <section class="contact-area pos-rel">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="contact-box c-box mb-30">
                        <span class="shadow-icon"><i class="far fa-phone-office"></i></span>
                        <a class="mb-25" href="tel:+212528232329"><i class="far fa-phone"></i></a>
                        <p class="mb-15">Phone Number</p>
                        <h5 class="semi-title">+212 528 23 23 29</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="contact-box theme-bg">
                        <span class="shadow-icon"><i class="fal fa-envelope"></i></span>
                        <a class="mb-25" href="mail:info@swissysteme.ma"><i class="fal fa-envelope-open"></i></a>
                        <p class="mb-15">Email Adress</p>
                        <h5 class="semi-title">info@swissysteme.ma</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="contact-box theme-bg2 mb-30">
                        <span class="shadow-icon"><i class="fal fa-map-marked-alt"></i></span>
                        <a class="mb-25" href="#"><i class="far fa-map-marker-alt"></i></a>
                        <p class="mb-15">Office Adress</p>
                        <h5 class="semi-title">N°78 Av el Amir Abd Elkader El Massira - Agadir</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-area end-->
    </section>
    <!--contact-form start-->
    <section class="contact-form-area pt-70 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="section-title text-center mb-55 pl-50 pr-50">
                        <h6 class="mb-25">Envoyez-nous un message</h6>
                        <h2 class="mb-25">N'hésitez pas à nous envoyer un message</h2>
                    </div>
                </div>
            </div>
            <div class="form-area contact-form">
                <form method="POST" action="{{ url('contact-message') }}">
                    @csrf
					@method('PUT')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-input mb-30">
                                <input type="text" name="name" class="form-control" placeholder="Nom & Prénom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input input-mail mb-30">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-input input-number mb-30">
                                <input type="text" name="phone" class="form-control" placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-input input-subject mb-30">
                                <input type="text" name="subject" class="form-control" placeholder="Sujet *">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-input input-mail mb-30">
                                <textarea name="Comments" name="message"  id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="cintact-form-btn text-center">
                                <button type="submit" class="btn btn-success">Envoyer <i class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--contact-form end-->
</main>
@endsection