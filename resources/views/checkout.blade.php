@extends('layouts.header')
@section('content')
<div class="page-title-overlap bg-dark pt-4">
  <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
          <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="ci-home"></i>Accueil</a></li>
          <li class="breadcrumb-item text-nowrap"><a href="{{ url('cart') }}">Panier</a>
          </li>
          <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
        </ol>
      </nav>
    </div>
    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
      <h1 class="h3 text-light mb-0">Checkout</h1>
    </div>
  </div>
</div>
<!-- =======================
Banner innerpage -->

<div class="container pb-5 mb-2 mb-md-4">
  <div class="row">
      <!-- List of items-->
        <section class="col-lg-8">
          <form action="{{ url('payment') }}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_token" value="3r2BsNcJtyRfjStGB4IHk8ky1EsoApGD64jBfxfV">
              <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Adresse de livraison</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-fn">Nom &amp; Prénom</label>
                            <input class="form-control" required="" name="userName" value="@if ($user!=NULL){{ $user->name }}@endif" type="text"
                                id="checkout-fn">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-phone">Numéro de téléphone</label>
                            <input class="form-control" required="" name="phone" value="@if ($user!=NULL){{ $user->phone }}@endif" type="text"
                                id="checkout-phone">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-address-1">Adresse</label>
                            <input class="form-control" required="" name="address" value="@if ($user!=NULL){{ $user->address }}@endif" type="text"
                                id="checkout-address-1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="checkout-email">Adresse e-mail</label>
                            <input class="form-control" required="" name="email" value="@if ($user!=NULL){{ $user->email }}@endif" type="email"
                                id="checkout-email">
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex pt-4 mt-3">
                    <ul class="btn-list">
                        <li><button type="submit" class="theme_btn" data-animation="fadeInUp"
                                data-delay=".7s">Confirmer <i class="far fa-long-arrow-right"></i></button>
                        </li>
                    </ul>
                </div>
        </section>
              <!-- Sidebar-->
              <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5" style="margin-top: 1.5em">
                  <div class="card">
                  <div class="card-body">
                      <h6>Détails</h6>
                      <hr>
                      <div class="table-responsive" style="color: black !important">
                          <table class="table">
                          <thead>
                              <tr>
                              <th>Produit</th>
                              <th>Qty</th>
                              <th>Prix</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                              $total = 0;
                              @endphp
                              @foreach ($cartItems as $item)
                              <tr>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->quantity }}</td>
                                  <td>{{ $item->price }} <small>MAD</small></td>
                              </tr>
                              @php
                                  $total += $item->price * $item->quantity
                              @endphp
                              @endforeach
                              <tr>
                              <th>Total TTC</th>
                              <td>{{ $total }}</td>
                              <input type="hidden" name="total" value="{{ $total }}">
                              <td>MAD</td>
                              </tr>
                          </tbody>
                          </table>
                      </div>
                  </div>
                  </div>
              </aside>
              <div class="row d-lg-none">
                  <div class="col-lg-8">
                  <div class="d-flex pt-4 mt-3">
                    <ul class="btn-list">
                        <li><button class="theme_btn" type="submit" data-animation="fadeInUp"
                                data-delay=".7s">Get Started <i class="far fa-long-arrow-right"></i></button></li>
                    </ul>            </div>
                  </div>

              </div>
          </form>
  </div>
</div>
@endsection