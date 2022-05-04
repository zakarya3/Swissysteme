@extends('layouts.header')
@section('content')
<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url({{ asset('frontend/images/chose/page-title-bg1.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="shadow-text3 page-shadow">{{ $name->name }}</div>
                <div class="col-xl-8 offset-xl-2">
                    <div class="page-title">
                        <h1>Notre articles</h1>
                        <div class="breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}">Accueil</a></li>
                                <li>{{ $name->name }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <section class="shop-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="shop-catagory-area">
                        <div class="catagory-search mb-40">
                            <form action="{{ url('search') }}" method="post">
                                {{ csrf_field() }}
                                <input class="form-control" name="item" list="datalistOptions" placeholder="Search Keywords">
                                <datalist id="datalistOptions">
                                    @foreach ($product as $item)
                                        <option value="{{ $item->product_name }}">
                                    @endforeach
                                  </datalist>
                                <span><button class="btn btn-danger" type="submit">
                                    <i class="far fa-search"></i>
                                </button></span>
                            </form>
                        </div>
                        <div class="shop-widget mb-40">
                            <h6 class="shop-title pb-20 mb-25">Categories</h6>
                            <div class="cat-list-desc">
                                <ul class="cat-list">
                                    @foreach ($getType as $item)
                                        <li><a href="{{ url('products-items/'.$item->name) }}">{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12">
                    <div class="product-list">
                        <div class="row">
                            @foreach ($product as $item)
                                <div class="col-xl-4 col-lg-4 col-md-4">
                                    <div class="product text-center mb-50" >
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
                        <div class="col-lg-12 pt-10">
                            <div class="pagination-wrap">
                                <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
                                    <ul class="pagination">
                                      <li class="page-item"></li>
                                    </ul>
                                    <ul class="pagination-bolock">
                                      {{ $product->links('layouts.paginationlinks') }}
                                    </ul> 
                                    <ul class="pagination">
                                      <li class="page-item"></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection