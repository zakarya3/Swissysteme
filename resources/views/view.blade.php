@extends('layouts.header')
@section('content')
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="{{ url('/') }}"><i class="ci-home"></i>Accueil</a></li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Ma Commande</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 text-light mb-0">Ma commande</h1>
      </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
      <!-- List of items-->
      <section class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="">Nom & Prénom</label>
                        <div class="form-control">{{ $user->name }}</div>
                        <label class="form-label" for="">Email</label>
                        <div class="form-control">{{ $user->email }}</div>
                        <label class="form-label" for="">Téléphone</label>
                        <div class="form-control">{{ $user->phone }}</div>
                        <label class="form-label" for="">Adresse</label>
                        <div class="form-control">{{ $user->address }}</div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive" style="color: black !important">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Produit</th>
                                  <th>Quantité</th>
                                  <th>Prix</th>
                                  <th>Image</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($orders as $item)
                                  <tr>
                                    <td>{{ $item->product->product_name }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>
                                       <img src="{{ asset('assets/uploads/products/images/'.$item->product->image) }}" style="width: 50px" alt="">
                                    </td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                            <h6>Prix Total : {{ $order->total_price }} MAD</h6>
                            <a class="btn btn-outline-primary btn-sm ps-2" href="{{ url('myorders') }}"><i class='bx bx-chevron-left'></i>Mes commandes</a>
                          </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
    </div>
  </div>
@endsection