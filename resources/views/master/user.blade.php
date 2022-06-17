<!DOCTYPE html>
<html xml:lang="en" lang="en">

<!-- Mirrored from demo.7uptheme.com/html/mello/home-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Jul 2015 06:56:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('public/usercss')}}/style/css/style-main.css" />
    <link rel="stylesheet" href="{{url('public/css_detal')}}/style.css">
    <link rel="stylesheet" href="{{url('public/css_detal')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/css_detal')}}/css/css.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" media="all" />
    <title>@yield('title')</title>
</head>

<body class="home">
    <!--begin header-->
    <div id="box-header">
        <div class="header-container">
            <div class="header">
                <div class="box-header-01">
                    <div class="container">
                        <div class="row">
                            <div class="logo">
                                <a href="#"><img src="{{url('public/usercss')}}/images/logodefault.png" alt="" /></a>
                            </div>
                            <div class="menu">
                                <div class="box-main-menu">
                                    <div class="main-menu">
                                        <ul>
                                            <li class="item1 first"><a href="{{route('user')}}">Trang Chủ</a></li>
                                            <li class="item2 megamenu-parent"><a href="#">Danh Mục</a>
                                                <div class="vt_megamenu_content">
                                                    <div class="mega-menu-01">
                                                        <div class="menu-01 menu-01-cate">
                                                            <ul class="content-col">
                                                                @foreach($categories as $category)
                                                                <li class=""><a
                                                                        href="{{route('user.category',['category'=>$category->id,'slug'=>Str::slug($category->name)])}}"><span>{{$category->name}}</span></a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item2 megamenu-parent"><a href="{{route('user.shop')}}">Sản
                                                    Phẩm</a>
                                            <li class="item2 megamenu-parent"><a href="grid.html">Tin Tức</a>
                                            <li class="item2 megamenu-parent"><a href="grid.html">Hệ thống bảo hành &
                                                    đổi trả</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="account-and-cart">
                                <div class="my-account">
                                    <div class="content">
                                        @if(auth()->guard('customer')->check())
                                        <ul class="left">
                                            <li><a class="top-link-myaccount" href="#">{{auth()->guard('customer')->user()->name}}</a></li>
                                            <li><a class="top-link-wishlist" href="{{route('user.product_favorite')}}">Yêu Thích</a></li>
                                            <li><a class="top-link-wishlist" href="{{route('customer.order')}}">Lịch sử </a></li>
                                            <li><a class="top-link-login" href="{{route('user.logout')}}">Thoát</a></li>
                                        </ul>
                                        <ul class="right">
                                            <li class="language">
                                                <a href="#" class="selected" ><img
                                                        src="{{url('public/usercss')}}/images/flags/vietnam-flag-xs.jpg" width= "16px"
                                                        alt="" />VNA</a>
                                                <ul>
                                                    <li>
                                                        <a href="home-01.html"><img
                                                                src="{{url('public/usercss')}}/images/flags/flag-default.jpg"
                                                                alt="" />English</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-02.html"><img
                                                                src="{{url('public/usercss')}}/images/flags/vietnam-flag-xs.jpg" width= "16px"
                                                                alt="" />VNA</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="monney last"><a href="#" class="selected">VNĐ</a>
                                                <ul>
                                                    <li><a href="#"><span>₫</span> VNĐ</a></li>
                                                    <li><a href="#"><span>$</span> USD</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        @else
                                        <ul class="left">
                                            <li><a class="top-link-checkout" href="{{route('user.login')}}">Đăng
                                                    Nhập</a></li>
                                        </ul>
                                        <ul class="right">
                                            <li class="language">
                                                <a href="#" class="selected"><img width = "16px"
                                                        src="{{url('public/usercss')}}/images/flags/vietnam-flag-xs.jpg"
                                                        alt="" />VNA</a>
                                                <ul>
                                                    <li>
                                                        <a href="home-01.html"><img
                                                                src="{{url('public/usercss')}}/images/flags/flag-default.jpg"
                                                                alt="" />English</a>
                                                    </li>
                                                    <li>
                                                        <a href="home-02.html"><img width = "16px"
                                                                src="{{url('public/usercss')}}/images/flags/vietnam-flag-xs.jpg"
                                                                alt="" />VNA</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="monney last"><a href="#" class="selected">VNĐ</a>
                                                <ul>
                                                    <li><a href="#"><span>$</span> USD</a></li>
                                                    <li><a href="#"><span>₫</span> VNĐ</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                                <div class="box-cart">
                                    <div class="cart-mini">
                                        @if (count($cart->items))
                                        <div class="title">
                                            <span class="item" style="color:yellow">{{$cart->totalQuantity}}</span>
                                        </div>
                                        <div class="block-content">
                                            <div class="inner">
                                                <p class="block-subtitle">Giỏ Hàng</p>
                                                <ol id="cart-sidebar" class="mini-products-list">
                                                    <li class="item">
                                                        @foreach($cart->items as $item)
                                                        <a href="#" title="Fashion Product 09" class="product-image"
                                                            width="20px">
                                                            <img src="{{url('public/uploads')}}/{{$item->image}}"
                                                                alt="Fashion Product 09" />
                                                        </a>
                                                        <div class="product-details">
                                                            <p class="product-name"><a title="Fashion Product 09"
                                                                    href="#">{{$item->name}}</a></p>
                                                            <span class="price">{{$item->price}}</span>
                                                            <div class="qty-abc">
                                                                <a title="Decrement" class="qty-change-left"
                                                                    href="#">down</a>
                                                                <input class="input-text qty" type="text" value="1" />
                                                                <a title="Increment" class="qty-change-right"
                                                                    href="#">up</a>
                                                                <a href="#" class="btn-remove"></a>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </li>
                                                </ol>
                                                <div class="summary">
                                                    <p class="subtotal">
                                                        <span class="label">Tông Tiền:
                                                            {{number_format ($cart->totalAmount)}} đ</span> <span
                                                            class="price"></span>
                                                    </p>
                                                </div>
                                                <div class="actions">
                                                    <div class="a-inner">
                                                        <a class="btn-mycart" href="{{route('cart.view')}}"
                                                            title="View my cart">Chi tiết</a>
                                                        <a href="#" title="Checkout" class="btn-checkout">Thanh Toán</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="title">
                                            <span class="item" style="color:yellow">0</span>
                                        </div>
                                        <div class="block-content">
                                            <div class="inner">
                                                <div class="alert alert-danger mt">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">&times;</button>
                                                    <strong>Giỏ hàng</strong> Không có dữ liệu nào...
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bgr-menu">
                    </div>
                </div>
                <div class="box-header-03">
                    <div class="container">
                        <div class="row">
                            <span class="shipping"><a href="#">Giao hàng miễn phí-Trả hàng miễn phí</a></span>
                            <span class="gift"><a href="#">Quà tặng hấp dẫn </a></span>
                            <span class="customer"><a href="#">Hỗ trợ 24/7</a></span>
                            <div class="box-search">
                                <form action="{{route('user.search')}}" method="GET">
                                    <button type="submit"><span>search</span></button>
                                    <input  type="text" name="key" value="" placeholder="Tìm kiếm sản phẩm " />
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    @if(Session::has('ok'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('ok')}}
                    </div>
                    @endif
                    @if(Session::has('no'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('no')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--end header-->
    <!--begin content-->
    @yield('main')
    <!--end content-->
    <!--begin footer-->
    <div id="box-footer">
        <div class="box-footer-top">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="box-connect col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="block-title"><span>Kết Nối</span></div>
                            <a href="#" class="face-book">face book</a>
                            <a href="#" class="tweeter">tweeter</a>
                            <a href="#" class="no-name">no-name</a>
                            <a href="#" class="pinseter">pinseter</a>
                            <a href="#" class="google">google+</a>
                            <a href="#" class="init">init</a>
                        </div>
                        <div class="box-tweeter col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="block-title"><span>tweeter</span></div>
                            <div class="content">
                                Leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque tincidunt.
                                Vestibulum finibus ceo aliquet, dictum orci at, varius ligula. Duis aliquet
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer-middle">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="block block-info col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="block-title"><span>Danh Mục</span></div>
                            <div class="block-content">
                                <ul>
                                    @foreach($categories as $category)
                                    <li><a
                                            href="{{route('user.category',['category'=>$category->id,'slug'=>Str::slug($category->name)])}}">{{$category->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="block block-customer col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="block-title"><span>Khách Hàng</span></div>
                            @if(auth()->guard('customer')->check())
                            <div class="block-content">
                                <ul>
                                    <li><a href="#">Tài Khoản </a></li>
                                    <li><a href="{{route('cart.view')}}">Giỏ hàng</a></li>
                                    <li><a href="{{route('customer.order')}}">Lịch sử mua hàng</a></li>
                                </ul>
                            </div>
                            @else
                            <div class="block-content">
                                <ul>
                                    <li><a href="{{route('user.login')}}">Đăng Nhập</a></li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="block block-cu col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="block-title"><span>Chăm sóc khách hàng</span></div>
                            <div class="block-content">
                                <ul>
                                    <li class="item2"><span>+ 020.566.6666</span></li>
                                    <li class="item3"><a href="mailto:support@7-Up.com">chamsockh1997@gmail.com</a></li>
                                </ul>
                                <div class="phone-nb"><a href="tel:0906868757">0385.201.482</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="box-left">
                        <ul>
                            <li class="home"><a>MELLO</a></li>
                            <li><a href="#">Chăm sóc khách hàng </a><span>|</span></li>
                            <li><a href="#">Giao hàng & Trả hàng</a><span>|</span></li>
                            <li><a href="#">Điều khoản và điều kiện</a><span>|</span></li>
                            <li><a href="#">Liên hệ </a></li>
                        </ul>
                        <h6>Mello &copy; 2015 Magento Demo Store. All Rights Reserved. Designed by <a
                                title="Visit VnThemePro.Com!" href="7uptheme.html">7-Up</a></h6>
                    </div>
                    <div class="box-right">
                        <ul>
                            <li><img src="{{url('public/usercss')}}/images/p1.png" alt="" /></li>
                            <li><img src="{{url('public/usercss')}}/images/p2.png" alt="" /></li>
                            <li><img src="{{url('public/usercss')}}/images/p3.png" alt="" /></li>
                            <li><img src="{{url('public/usercss')}}/images/p4.png" alt="" /></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a id="gototop">Top</a>
        <!--js-->
       
        <script type="text/javascript" src="{{url('public/usercss')}}/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="{{url('public/usercss')}}/style/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('public/usercss')}}/js/galary-image/js/jquery.blueimp-gallery.min.js"></script>
        <script src="{{url('public/usercss')}}/js/galary-image/js/bootstrap-image-gallery.js"></script>
        <script type="text/javascript" src="{{url('public/usercss')}}/js/owl-carousel/owl.carousel.js"></script>
        <script type="text/javascript" src="{{url('public/usercss')}}/js/slideshow/jquery.themepunch.revolution.js">
        </script>
        <script type="text/javascript" src="{{url('public/usercss')}}/js/slideshow/jquery.themepunch.plugins.min.js">
        </script>
        <script type="text/javascript" src="{{url('public/usercss')}}/js/theme.js"></script>
        @yield('js')
    </div>
    <!--end footer-->
</body>

</html>