<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VH Furniture</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('client.layout.css')

</head>

<body class="template-index home15-funiture-template belle">

    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="{{Route('search')}}">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="keyword"
                        placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        @include('client.layout.topheader')
        <!--End Top Header-->
        <!--Header-->
        @include('client.layout.header')
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="index.html" class="site-nav">Home 1 - Classic</a></li>
                                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                                <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                                <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                                <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                                <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                                <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                                <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                                <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                                <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                                <li><a href="#" class="site-nav">Age Varification </a></li>
                                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                                <li><a href="#" class="site-nav last">Auto Currency</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                                <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                                <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                                <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                                <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                                <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                                <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="product-layout-1.html" class="site-nav">Product Page<i
                                    class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left
                                        Thumbs</a></li>
                                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right
                                        Thumbs</a></li>
                                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With
                                        Bottom Thumbs</a></li>
                            </ul>
                        </li>
                        <li><a href="short-description.html" class="site-nav">Product Features<i
                                    class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity
                                        Message</a></li>
                                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold
                                        Count </a></li>
                                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox
                                    </a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant
                                        Image</a></li>
                                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color
                                        Swatch</a></li>
                                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image
                                        Swatch</a></li>
                                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a>
                                </li>
                                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded
                                        Square</a></li>
                                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping
                                        Message</a></li>
                                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="cart-variant1.html" class="site-nav">Cart Page <i
                                    class="anm anm-plus-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="compare-variant1.html" class="site-nav">Compare Product <i
                                    class="anm anm-plus-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                                <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                        <li><a href="about-us.html" class="site-nav">About Us<span
                                    class="lbl nm_label1">New</span></a></li>
                        <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                        <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                        <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html" class="site-nav">404</a></li>
                        <li><a href="coming-soon.html" class="site-nav">Coming soon<span
                                    class="lbl nm_label1">New</span></a></li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                        <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                        <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                        <li><a href="blog-article.html" class="site-nav">Article</a></li>
                    </ul>
                </li>
                <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Image Banners-->

            @yield('category-img')
            <!--End Image Banners-->

            <!--Custom Image Banner-->
            <div class="section imgBanners">
                <div class="container-fluid">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <a href="#">
                            <img src="{{ asset('dist/client/images/collection/image-banner-home15-5.jpg') }}"
                                alt="Save Big On Popular Designs" title="Save Big On Popular Designs"
                                class="blur-up lazyload" />
                        </a>
                    </div>
                </div>
            </div>
            <!--Custom Image Banner-->

            <!--Hand-picked Items-->
            <div class="section">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">@yield('content-title')</h2>
                                <p>Furniture should always be comfortable.<br>And always have a piece of art that you
                                    made somewhere in the home.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    @yield('main-content')
                </div>
            </div>
            <!--End Hand-picked Items-->

            <!--Home LookBook Section-->
            <div class="section home-lookbook">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
                            <img src="{{ asset('dist/client/images/collection/home15-lookbook1.jpg') }}"
                                alt="" title="" />
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 text-center mb-5">
                            <img src="{{ asset('dist/client/images/collection/home15-lookbook2.jpg') }}"
                                alt="" title="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center custom-text">
                            <p class="mb-4">Your home should be a story of who you are, and be a collection of what
                                you love. A table, a chair, a bowl of fruit and a violin; what else does a man need to
                                be happy?</p>
                            <a class="btn" href="#">View Lookbook</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Home LookBook Section-->

            <!--Store Information-->
            <div class="section store-information">
                <div class="container-fluid">
                    <div class="row">
                        <ul class="display-table store-info">
                            <li class="display-table-cell"> <i class="anm anm-truck-l" aria-hidden="true"></i>
                                <h5>Free Shipping</h5>
                                <span class="sub-text">
                                    Free shipping on all US order
                                </span>
                            </li>
                            <li class="display-table-cell"> <i class="anm anm-phone-l" aria-hidden="true"></i>
                                <h5>Online Support 24/7</h5>
                                <span class="sub-text">
                                    Support online 24 hours a day
                                </span>
                            </li>
                            <li class="display-table-cell"> <i class="anm anm-money-bill-ar" aria-hidden="true"></i>
                                <h5>Money Return</h5>
                                <span class="sub-text">
                                    Back guarantee under 7 days
                                </span>
                            </li>
                            <li class="display-table-cell"> <i class="anm anm-gift-l" aria-hidden="true"></i>
                                <h5>Member Discount</h5>
                                <span class="sub-text">
                                    On every order over $100.00
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Store Information-->
        </div>
        <!--End Body Content-->

        @include('client.layout.footer')
        @include('client.layout.script')
        @include('client.layout.alert')



    </div>
</body>



</html>
