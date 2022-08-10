@extends('client.layout.master')
@section('category-img')
@endsection
@section('main-content')
@section('content-title', isset($ProductsSearch) ? "Results for keyword : $keywords" : 'Products')
<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="grid-products">
            <div class="row">

                @foreach (isset($products) ? $products : $ProductsSearch as $item)
                @if($item->status == 1)

                <div class="col-6 col-sm-6 col-md-3 col-lg-3 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="{{Route('productDetail',[$item->category->slug,$item->id,$item->slug])}}" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src=""
                                src="{{ asset($item->image) }}"
                                alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload"
                                data-src="{{ asset($item->image) }}"
                                src="{{ asset($item->image) }}"
                                alt="image" title="product">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->

                        <!-- Start product button -->
                        <form class="variants add" action="#"
                            onclick="window.location.href='cart.html'"method="post">
                            <button class="btn btn-addto-cart" type="button" tabindex="0">Add
                                To Cart</button>
                        </form>
                        <div class="button-set">
                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view"
                                data-toggle="modal" data-target="#content_quickview">
                                <i class="icon anm anm-search-plus-r"></i>
                            </a>
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <div class="compare-btn">
                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                    <i class="icon anm anm-random-r"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="">{{ $item->name }}</a>
                        </div>
                        <!-- End product name -->
                        <!-- product price -->
                        <div class="product-price">
                            <span class="price">{{number_format($item->price)}} đ</span>
                        </div>
                        <!-- End product price -->
                    </div>
                    <!-- End product details -->
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
