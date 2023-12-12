@extends('frontend.app')

@section('frontend')
@if(Auth::check())
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                    <p class="mb-4">

                        Please search for the product category you like. </p>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">
            @foreach ($produk as $product)
            <!-- Start Column 1 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="{{ route('add.to.cart', $product->id) }}">
                    @empty($product->foto)
                    <img src="{{url('admin/img/nofoto.jpg')}}" class="img-fluid product-thumbnail img-responsive" style="width: 100%; height: 250px; object-fit: cover;">
                    @else
                    <img src="{{url('admin/img')}}/{{$product->foto}}" class="img-fluid product-thumbnail img-responsive" style="width: 100%; height: 250px; object-fit: cover;">
                    @endempty
                    <h3 class="product-title">{{$product->nama_produk}}</h3>
                    <strong class="product-price">Rp. {{number_format($product->harga,0,',','.')}}</strong>

                    <span class="icon-cross">
                        <img src="{{asset('frontend/images/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 1 -->
            @endforeach

        </div>
    </div>
</div>

@else
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

            <a href="{{route('login')}}" class="btn btn-primary">Silahkan Login Terlebih Dahulu</a>

        </div>
    </div>
</div>

@endif
@endsection