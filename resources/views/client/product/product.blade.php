@extends('client.layout.master')
@section('main-content')
@section('content-title', 'Products')
<div class="row">
    <div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
        <div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
        <div class="sidebar_tags">
            <!--Categories-->
            <div class="sidebar_widget categories filter-widget">
                <div class="widget-title">
                    <h2>Categories</h2>
                </div>
                <div class="widget-content">
                    <ul class="sidebar_categories">
                        @foreach (isset($categories) ? $categories : $category as $item)
                            <li class="lvl-1"><a
                                    href="{{ Route('products.productsCategory', [$item->id, $item->slug]) }}"
                                    class="site-nav">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--Categories-->
            <!--Price Filter-->
            <!--End Price Filter-->
            <!--Size Swatches-->
            <div class="sidebar_widget filterBox filter-widget size-swacthes">
                <div class="widget-title">
                    <h2>Size</h2>
                </div>
                <div class="filter-color swacth-list">
                    <ul>
                        @foreach ($sizes as $item)
                            <li><a href="{{ Route('products.productsSize',[$item->name,$item->id]) }}"
                                    class="swacth-btn" style="text-decoration:none;">{{ $item->name }}</a></li>
                        @endforeach


                    </ul>
                </div>
            </div>
            <!--End Size Swatches-->
            <!--Color Swatches-->

            <!--End Color Swatches-->
            <!--Brand-->
            <!--End Brand-->
            <!--Popular Products-->

            <!--End Popular Products-->
            <!--Banner-->
            <div class="sidebar_widget static-banner">
                <img src="assets/images/side-banner-2.jpg" alt="" />
            </div>
            <!--Banner-->
            <!--Information-->

            <!--end Information-->
            <!--Product Tags-->
            <!--end Product Tags-->
        </div>
    </div>
    <!--End Sidebar-->
    <!--Main Content-->
    <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
        <div class="productList">
            <!--Toolbar-->
            <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
            <div class="toolbar">
                <div class="filters-toolbar-wrapper">
                    <div class="row">

                        <div
                            class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                            <span class="filters-toolbar__product-count">Showing:
                                {{ isset($TotalProduct) ? $TotalProduct : $TotalProductCategory }}</span>
                        </div>
                        <div class="col-4 col-md-4 col-lg-4 text-right">
                            <div class="filters-toolbar__item">
                                <label for="SortBy" class="hidden">Sort</label>
                                <select name="SortBy" id="SortBy"
                                    class="filters-toolbar__input filters-toolbar__input--sort">
                                    <option value="title-ascending" selected="selected">Sort</option>
                                    <option>Best Selling</option>
                                    <option>Alphabetically, A-Z</option>
                                    <option>Alphabetically, Z-A</option>
                                    <option>Price, low to high</option>
                                    <option>Price, high to low</option>
                                    <option>Date, new to old</option>
                                    <option>Date, old to new</option>
                                </select>
                                <input class="collection-header__default-sort" type="hidden" value="manual">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--End Toolbar-->
            <div class="grid-products grid--view-items">
                <div class="row">
                    @foreach (isset($products) ? $products : $productsCategory as $item)
                    @if($item->status == 1 && $item->category_id !=0 && $item->size_id !=0)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                            <div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-accordion.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload"
                                        data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}"
                                        alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload"
                                        data-src="{{ asset($item->image) }}" src="{{ asset($item->image) }}"
                                        alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->

                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="#">{{ $item->name }}</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">{{ number_format($item->price) }}</span>
                                    </div>
                                    <!-- End product price -->
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="{{ Route('productDetail', [$item->category->slug, $item->id, $item->slug]) }}"
                                            title="Quick View" class="quick-view-popup quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form action="#" method="post">
                                            <button class="btn btn--secondary cartIcon btn-addto-cart" type="button"><i
                                                    class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="#" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    @endif
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!--End Main Content-->
</div>
</div>
</div>
@endsection
