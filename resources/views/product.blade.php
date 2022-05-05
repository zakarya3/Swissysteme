@extends('layouts.header')
@section('content')
<style>
    table, th, td {
        width: 100% !important;
      border: 1px solid;
    }
    </style>
<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url({{ asset('frontend/images/chose/page-title-bg1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="shadow-text3 page-shadow">{{ $name }}</div>
                <div class="col-xl-8 offset-xl-2">
                    <div class="page-title">
                        <h1>Details</h1>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Accueil</a></li>
                                <li>{{ $name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--product-details-area start-->
    <section class="product-dertails-area pt-130 pb-115 product_data">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="shop-thumb-tab mb-30">
                        <ul class="nav" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-selected="true"><img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="">
                                </a>
                            </li>
                            @if ($product->image1 != null)
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-selected="false"><img src="{{ asset('assets/uploads/products/images/'.$product->image1) }}"
                                        alt=""></a>
                            </li>
                            @endif
                            @if ($product->image2 != null)
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile1" role="tab"
                                    aria-selected="false"><img src="{{ asset('assets/uploads/products/images/'.$product->image2) }}"
                                        alt=""></a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="product-details-img mb-30">
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ asset('assets/uploads/products/images/'.$product->image) }}" alt="">
                                </div>
                            </div>
                            @if ($product->image1 != null)
                            <div class="tab-pane fade" id="profile" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ asset('assets/uploads/products/images/'.$product->image1) }}" alt="">
                                </div>
                            </div>
                            @endif
                            @if ($product->image2 != null)
                            <div class="tab-pane fade" id="profile1" role="tabpanel">
                                <div class="product-large-img">
                                    <img src="{{ asset('assets/uploads/products/images/'.$product->image2) }}" alt="">
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="product-details ml-50">
                        <div class="product-title">
                            <h3>{{ $product->product_name }}</h3>
                            <div class="product__text--icon mb-10">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            @if ($product->price != null)
                            <span class="new-price mb-30">{{ $product->price }} <small>MAD</small></span><br>
                            @else
                            <span class="new-price mb-30"><a href="{{ url('/contact') }}">Conatcez-nous!</a></span><br>
                            @endif
                            @if ($product->qty !== null && $product->qty > 0)
                            <span class="stock pb-2">Stock: <strong class="text-primary">In Stock</strong></span>
                            @endif
                            <p class="mb-15 ">@php
                                echo $product->product_description;
                            @endphp
                            </p>
                            @if ($product->product_reference !== null)
                            <p class="sku"> Ref: {{ $product->product_reference }}</p>
                            @endif
                        </div>
                        <div class="product-details-action mb-40">
                            <div class="plus-minus" style="margin: 20px 0">
                                @if ($product->qty !== null)
                                    <input type="hidden" value="{{ $product->id }}" class="prod_id">
                                    <div class="quantity">
                                        <label>Quantité:</label>
                                        <div class="cart-plus-minus">
                                           
                                            <div class="cart-plus-minus mr-30">
                                                <input class="qty-input" type="text" value="1">
                                                <div style="cursor: pointer" class="dec qtybutton decrement-btn">-</div>
                                                <div style="cursor: pointer" class="inc qtybutton increment-btn">+</div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <form action="{{ route('cart.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{ $product->id }}" name="id">
                                <input type="hidden" value="{{ $product->product_name }}" name="name">
                                <input type="hidden" value="{{ $product->price }}" name="price">
                                <input type="hidden" value="{{ $product->image }}"  name="image">
                                <input type="hidden" class="qty-input form-control" name="quantity">
                                <input type="hidden" value="{{ $product->qty }}"  name="qty">
                                <div class="plus-minus">
                                    
                                    @if ($product->price != NULL)
                                    <button class="cart_btn" type="submit">Add To Cart</button>
                                    @else
                                    <a href="{{ url('/contact') }}" class="cart_btn">Contactez-nous!</a>
                                    @endif
                                </div>
                            </form>
                        </div>
                        @if ($product->fiche != null)
                            <div class="product-social">
                                <span class="share mr-20">Fiche Technique:</span>
                                <a href="{{ asset('assets/uploads/products/ficheTechnique/'.$product->fiche) }}" download="">
                                    <i class="fas fa-file-download"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product-details-area end-->
    <!--shop-area star-->
    <section class="shop-area pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="section-title text-center mb-80">
                        <h6 class="mb-25">Related Products</h6>
                        <h2 class="mb-25">Upcoming Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($other_prd as $item)
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="product text-center mb-50">
                        <div class="product__img grey-bg mb-30" style="height: 45vh">
                            <a href="{{ url('product/'.$item->product_name) }}"><img src="{{ asset('assets/uploads/products/images/'.$item->image) }}" alt=""></a>
                        </div>
                        <div class="product__text">
                            <div class="product__text--icon">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <h6><a href="{{ url('product/'.$item->product_name) }}">{{ $item->product_name }}</a></h6>
                            @if ($item->price != null)
                                <span class="product-price">{{ $item->price }} MAD</span>
                            @else
                                <span class="product-price">conatctez-nous!</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--shop-area end-->
</main>
@endsection