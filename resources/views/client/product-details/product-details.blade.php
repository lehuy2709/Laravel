@extends('client.layout.master')
@section('main-content')
@section('content-title', 'Products Details')
<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content" role="main">
        <!--Breadcrumb-->
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="{{ Route('home') }}" title="Back to the home page">Home</a><span
                    aria-hidden="true">›</span><span>{{ $productDetail->category->name }}</span><span
                    aria-hidden="true">›</span><span>{{ $productDetail->name }}</span>
            </div>
        </div>
        <!--End Breadcrumb-->

        <div id="ProductSection-product-template" class="product-template__container prstyle2 container">
            <!--#ProductSection-product-template-->
            <div class="product-single product-single-1">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img product-single__photos bottom">
                            <div class="zoompro-wrap product-zoom-right pl-20">
                                <div class="zoompro-span">
                                    <img class="blur-up lazyload zoompro"
                                        data-zoom-image="{{ asset($productDetail->image) }}" alt=""
                                        src="{{ asset($productDetail->image) }}" />
                                </div>
                                <div class="product-labels"><span class="lbl on-sale">Sale</span><span
                                        class="lbl pr-label1">new</span></div>
                                <div class="product-buttons">
                                    <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video"
                                        title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                    <a href="#" class="btn prlightbox" title="Zoom"><i
                                            class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                </div>
                            </div>



                        </div>
                        <!--Product Feature-->

                        <!--End Product Feature-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-single__meta">
                            <h1 class="product-single__title">{{ $productDetail->name }}</h1>
                            <div class="product-nav clearfix">
                                <a href="#" class="next" title="Next"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a>
                            </div>
                            <div class="prInfoRow">
                                <div class="product-stock"> <span
                                        class="instock ">{{ $productDetail->status == 1 ? 'Active' : '' }}</span> <span
                                        class="outstock hide">Unavailable</span> </div>
                                {{-- <div class="product-review"><a class="reviewLink" href="#tab2"><i
                                            class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i
                                            class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i
                                            class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6
                                            reviews</span></a></div> --}}
                            </div>
                            <p class="product-single__price product-single__price-product-template">
                                <span
                                    class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                    <span id="ProductPrice-product-template"><span
                                            class="money">{{ number_format($productDetail->price) }}</span></span>
                                </span>
                            </p>
                            <div class="product-single__description rte">
                                <p>{{ $productDetail->description }}
                                </p>
                            </div>
                            <form method="post" action="{{Route('products.addCart',$productDetail)}}" id="product_form_10508262282" accept-charset="UTF-8"
                                class="product-form product-form-product-template hidedropdown"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                        <label class="header">Size: <span class="slVariant"></span></label>
                                        <div data-value="{{ $productDetail->size->name }}"
                                            class="swatch-element xs available">
                                            <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1"
                                                value="{{ $productDetail->size->name }}">
                                            <label class="swatchLbl small" for="swatch-1-xs"
                                                title="XS">{{ $productDetail->size->name }}</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                        class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1"
                                                    class="product-form__input qty">
                                                <input type="hidden"  name="productId_hidden" value="{{$productDetail->id}}"
                                                    class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                        class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-form__item--submit">
                                        <button type="sumbit" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                        </div>
                        <!--Product Tabs-->
                        <div class="tabs-listing">
                            <div class="tab-container">
                                <h3 class="acor-ttl" rel="tab2">Product Reviews</h3>
                                <div id="tab2" class="tab-content">
                                    <div id="shopify-product-reviews">
                                        <div class="spr-container">

                                            {{-- comment --}}
                                            <div class="spr-content">
                                                <div class="spr-form clearfix">
                                                    @if (Auth::check())
                                                        <form method="post"
                                                            action="{{ Route('products.postComment', $productDetail->id) }}"
                                                            id="new-review-form" class="new-review-form">
                                                            @csrf
                                                            <h3 class="spr-form-title">Write a Comment</h3>
                                                            <fieldset class="spr-form-contact">
                                                            </fieldset>
                                                            <fieldset class="spr-form-review">

                                                                <div class="spr-form-review-body">
                                                                    <label class="spr-form-label"
                                                                        for="review_body_10508262282">Body of Review
                                                                        <span
                                                                            class="spr-form-review-body-charactersremaining">(1500)</span></label>
                                                                    <div class="spr-form-input">
                                                                        <textarea class="spr-form-input spr-form-input-textarea " id="review_body_10508262282" data-product-id="10508262282"
                                                                            name="content" rows="10" placeholder="Write your comments here"></textarea>
                                                                    </div>
                                                                </div>
                                                                @error('content')
                                                                    <div class="text-danger">
                                                                        <h3 class="text-danger">
                                                                            {{ $message }}
                                                                        </h3>

                                                                    </div>
                                                                @enderror

                                                            </fieldset>
                                                            <fieldset class="spr-form-actions">
                                                                <input type="submit"
                                                                    class="spr-button spr-button-primary button button-primary btn btn-primary"
                                                                    value="Submit Comment">
                                                            </fieldset>
                                                        </form>
                                                    @else
                                                        <div class="login-comment">
                                                            <p>Bạn cần <a href="{{ Route('auth.getLogin') }}"
                                                                    class="text-danger">Đăng Nhập</a> để bình Luận</p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="spr-reviews">
                                                    @foreach ($comments as $item)
                                                        <div class="spr-review">
                                                            <div class="spr-review-header">
                                                                <img src="{{ asset($item->avatar) }}" alt=""
                                                                    width="50px">
                                                                <h3 class="spr-review-header-title">
                                                                    {{ $item->name }}</h3>
                                                                <span
                                                                    class="spr-review-header-byline"><strong>Post</strong>
                                                                    on <strong>{{ $item->created_at }}</strong></span>
                                                            </div>
                                                            <div class="spr-review-content">
                                                                <p class="spr-review-content-body">
                                                                    {{ $item->content }}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                {{-- // form cmt --}}

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!--End Product Tabs-->
                    </div>
                </div>
                <!--End-product-single-->

                <!--Related Product Slider-->
                <div class="related-product grid-products">
                    <header class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Related products</span></h2>
                        <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of
                            grid to show and products from store admin.</p>
                    </header>
                    {{-- sp liên quan --}}
                    <div class="productPageSlider">
                        @foreach ($relatedProduct as $item)
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="#">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{ asset($item->image) }}"
                                            src="{{ asset($item->image) }}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{ asset($item->image) }}"
                                            src="{{ asset($item->image) }}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                            <span class="lbl pr-label1">new</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="#"
                                        onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Select
                                            Options</button>
                                    </form>
                                    <div class="button-set">
                                        <a href="{{ Route('productDetail', [$item->category->slug, $item->id, $item->slug]) }}"
                                            title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
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
                                        <a href="#">{{ $item->name }}</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">{{ number_format($item->price) }}đ</span>
                                    </div>
                                    <!-- End product price -->

                                    <!-- Variant -->
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        @endforeach

                    </div>
                </div>
                <!--End Related Product Slider-->

                <!--Recently Product Slider-->

                <!--End Recently Product Slider-->

            </div>
            <!--#ProductSection-product-template-->
        </div>
        <!--MainContent-->
    </div>
    <!--End Body Content-->
</div>
@endsection
