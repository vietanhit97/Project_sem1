<?php $px=852; ?>
@extends('master.user')
@section('title','Trang Chủ')
<!-- @section('content')
 @foreach($categories as $cat)
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">{{ $cat->name}} Mới</h2>
                <div class="latest-product">
                    <div class="product-carousel">
                        @foreach($cat->products as $pro)
                        <div class="single-product text-center">
                            <div class="product-f-image">
                                <img src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
                                <div class="product-hover">
                                    <a href="{{route('cart.add',$pro->id)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Giỏ
                                        Hàng </a>
                                    <a href="{{route('user.productSingle',['product'=>$pro->id,'slug'=>Str::slug($pro->name)])}}"
                                        class="view-details-link"><i class="fa fa-link"></i> Chi Tiết </a>
                                </div>
                            </div>
                            <h2><a href="single-product.html">{{$pro->name}}</a></h2>
                            <div class="product-carousel-price text-center">
                                @if($pro->sale_price >0)
                                <ins>{{ number_format($pro->sale_price)}}đ</ins> <del>{{number_format($pro->price)}}
                                    đ</del>
                                @else
                                <ins>{{number_format($pro->price)}}đ</ins>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
<!-- @endforeach
@stop -->
@section('main')
<div id="box-content">
    <div class="container">
        <div class="row">
            <div class="slide-show">
                <div class="vt-slideshow">
                    <ul>
                        <li class="slide1" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s2.png" alt="" /></li>
                        <li class="slide2" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s1.png" alt="" /></li>
                        <li class="slide3" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s3.png" alt="" /></li>
                        <li class="slide3" data-transition="random"><img
                                src="{{url('public/usercss')}}/images/slide/bg-s4.png" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="position-03">
        <div class="container">
            <div class="row">
                <div class="box-1">
                    <h2>featured</h2>
                    <ul class="control">
                        <li data-rel="0px" class="ct1 active">Smart Phone</li>
                        <li data-rel="-852px" class="ct2">Tablets</li>
                        <li data-rel="-1704px" class="ct3">Laptops</li>
                        <li data-rel="-2556px" class="ct4">Computer Accessories</li>
                        <li data-rel="-4408px" class="last ct5">Cameras & Photo</li>
                    </ul>
                </div>
                <div class="box-2">
                    <div class="slide">
                        <div class="item">
                            <div class="box-image">
                                <a href="#"><img src="{{url('public/usercss')}}/images/product/larg/air-a4.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="product-shop">
                                <div class="pro-info">
                                    <div class="pro-inner">
                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="wrap-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount"><a href="#">1(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="std">
                                    Cras id leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque
                                    tincidunt. Vestibulum finibus augue sit amet ex elementum, non consequat libero
                                    mattis.
                                </div>
                                <div class="item-btn">
                                    <div class="box-inner">
                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                        <span class="qview">
                                            <a class="vt_quickview_handler" data-original-title="Quick View"
                                                data-placement="left" data-toggle="tooltip" href="#"><span>Quick
                                                    View</span></a>
                                        </span>
                                        <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-image">
                                <a href="#"><img src="{{url('public/usercss')}}/images/product/larg/demo11.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="product-shop">
                                <div class="pro-info">
                                    <div class="pro-inner">
                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="wrap-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                    <p class="special-price">
                                                        <span class="price">$1.459.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount"><a href="#">1(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="std">
                                    Cras id leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque
                                    tincidunt. Vestibulum finibus augue sit amet ex elementum, non consequat libero
                                    mattis.
                                </div>
                                <div class="item-btn">
                                    <div class="box-inner">
                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                        <span class="qview">
                                            <a class="vt_quickview_handler" data-original-title="Quick View"
                                                data-placement="left" data-toggle="tooltip" href="#"><span>Quick
                                                    View</span></a>
                                        </span>
                                        <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-image">
                                <a href="#"><img src="{{url('public/usercss')}}/images/product/larg/laptop.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="product-shop">
                                <div class="pro-info">
                                    <div class="pro-inner">
                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="wrap-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                    <p class="special-price">
                                                        <span class="price">$1.459.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount"><a href="#">1(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="std">
                                    Cras id leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque
                                    tincidunt. Vestibulum finibus augue sit amet ex elementum, non consequat libero
                                    mattis.
                                </div>
                                <div class="item-btn">
                                    <div class="box-inner">
                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                        <span class="qview">
                                            <a class="vt_quickview_handler" data-original-title="Quick View"
                                                data-placement="left" data-toggle="tooltip" href="#"><span>Quick
                                                    View</span></a>
                                        </span>
                                        <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-image">
                                <a href="#"><img src="{{url('public/usercss')}}/images/product/larg/desktop.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="product-shop">
                                <div class="pro-info">
                                    <div class="pro-inner">
                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="wrap-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                    <p class="special-price">
                                                        <span class="price">$1.459.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount"><a href="#">1(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="std">
                                    Cras id leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque
                                    tincidunt. Vestibulum finibus augue sit amet ex elementum, non consequat libero
                                    mattis.
                                </div>
                                <div class="item-btn">
                                    <div class="box-inner">
                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                        <span class="qview">
                                            <a class="vt_quickview_handler" data-original-title="Quick View"
                                                data-placement="left" data-toggle="tooltip" href="#"><span>Quick
                                                    View</span></a>
                                        </span>
                                        <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-image">
                                <a href="#"><img src="{{url('public/usercss')}}/images/product/larg/camera.jpg"
                                        alt="" /></a>
                            </div>
                            <div class="product-shop">
                                <div class="pro-info">
                                    <div class="pro-inner">
                                        <div class="pro-title product-name"><a href="detail.html">Ipad Air and iOS7</a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="wrap-price">
                                                <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$800.00</span></span>
                                                    <p class="special-price">
                                                        <span class="price">$1.459.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:80%"></div>
                                                </div>
                                                <span class="amount"><a href="#">1(s)</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="std">
                                    Cras id leo aliquet, dictum orci at, varius ligula. Duis aliquet pellentesque
                                    tincidunt. Vestibulum finibus augue sit amet ex elementum, non consequat libero
                                    mattis.
                                </div>
                                <div class="item-btn">
                                    <div class="box-inner">
                                        <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                        <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                        <span class="qview">
                                            <a class="vt_quickview_handler" data-original-title="Quick View"
                                                data-placement="left" data-toggle="tooltip" href="#"><span>Quick
                                                    View</span></a>
                                        </span>
                                        <a title="Add to cart" class="btn-cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-02">
        <div class="container">
            <div class="row">
                <div class="title-sp">
                    Khuyễn Mãi
                    <div class="std">
                        Giảm giá sốc nhanh tay mua ngay
                    </div>
                </div>
                <div class="block vt-slider vt-slider3">
                    <div class="slider-inner">
                        <div class="container-slider">
                            <div class="products-grid">
                                @foreach($productSale as $pro)
                                <div class="item">
                                    <div class="item-wrap">
                                        <div class="item-image">
                                            <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image" src="{{url('public/uploads')}}/{{$pro->image}}"
                                                    alt="Product demo" />
                                            </a>
                                            <div class="item-btn">
                                                <div class="box-inner">
                                                    <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                    <span class="qview">
                                                        <a class="vt_quickview_handler" data-original-title="Quick View"
                                                            data-placement="left" data-toggle="tooltip"
                                                            href="#"><span>Quick View</span></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                        </div>
                                        <div class="pro-info">
                                            <div class="pro-inner">
                                                <div class="pro-title product-name"><a
                                                        href="detail.html">{{$pro->name}}</a></div>
                                                <div class="pro-content">
                                                    <div class="wrap-price">
                                                        <div class="price-box">
                                                            <span class="regular-price">
                                                                <span class="price">{{number_format($pro->sale_price)}}
                                                                    đ</span></span>
                                                            <p class="special-price">
                                                                <span class="price">{{number_format($pro->price)}}
                                                                    đ</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <span class="amount"><a href="#">1(s)</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="navslider">
                            <a class="prev" href="#">Prev</a>
                            <a class="next" href="#">Next</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="position-04">
        <div class="container">
            <div class="row">
                <div class="title-sp">
                    Mới nhất 
                    <div class="std">
                        Sản phẩm mới ra mắt hiện tại
                    </div>
                    <ul class="view-more">
                        <li><a href="#">View more Laptops</a></li>
                        <li><a href="#">View more Desktops</a></li>
                    </ul>
                </div>
                <div class="block vt-slider vt-slider4">
                    <div class="slider-inner">
                        <div class="container-slider">
                            <div class="products-grid">
                                <div class="item">    
                                    @foreach($productHot as $proHot)
                                    <div class="item-wrap">
                                        <div class="item-image">
                                            <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                <img class="first_image"
                                                    src="{{url('public/uploads')}}/{{$proHot->image}}"
                                                    alt="Product demo" />
                                            </a>
                                        </div>
                                        <div class="product-shop">
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">
                                                    {{$proHot->name}}</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                @if($proHot->sale_price > 0)
                                                                <span class="regular-price">
                                                                <span class="price">{{number_format($proHot->sale_price)}}
                                                                    đ</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">{{number_format($proHot->price)}} đ</span>
                                                                </p>
                                                                @else
                                                                <span class="regular-price">
                                                                <span class="price">{{number_format($proHot->sale_price)}}
                                                                    đ</span></span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-btn">
                                                <div class="box-inner">
                                                    <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                                                    <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                                                    <span class="qview">
                                                        <a class="vt_quickview_handler" data-original-title="Quick View"
                                                            data-placement="left" data-toggle="tooltip"
                                                            href="#"><span>Quick View</span></a>
                                                    </span>
                                                    <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!--end item wrap -->
                            </div>
                        </div>
                    </div>
                    <div class="navslider">
                        <a class="prev" href="#">Prev</a>
                        <a class="next" href="#">Next</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="position-06">
        <div class="container">
            <div class="row">
                <div class="box-newletter">
                    <div class="title">
                        <span>Tin Tức </span>
                    </div>
                    <form action="#" method="post">
                        <input type="text" name="newletter" placeholder="Nhập địa chỉ Gmail " />
                        <button><span>Đăng ký </span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="position-08">
        <div class="container">
            <div class="title-sp">
                <h2>Shop</h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab1">New arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab2">POPULAR PRODUCTS</a></li>
                    <li><a data-toggle="tab" href="#tab3">Specail products</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                    <div class="block vt-slider vt-slider7">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo1.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo2.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo3.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo4.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo5.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                                <p class="special-price">
                                                                    <span class="price">$1.459.00</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="ratings">
												  <div class="rating-box">
													 <div class="rating" style="width:80%"></div>
												  </div>
												  <span class="amount"><a href="#">1(s)</a></span>
											   </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                </div>
                            </div>
                            <div class="navslider">
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="tab2" class="tab-pane fade">
                    <div class="block vt-slider vt-slider5">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo6.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo7.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo8.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo9.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo10.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                </div>
                            </div>
                            <div class="navslider">
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                            </div>

                        </div>

                    </div>
                </div>
                <div id="tab3" class="tab-pane fade">
                    <div class="block vt-slider vt-slider6">
                        <div class="slider-inner">
                            <div class="container-slider">
                                <div class="products-grid">
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo11.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo12.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo8.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo1.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                    <div class="item">
                                        <div class="item-wrap">
                                            <div class="item-image">
                                                <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                                                    <img class="first_image"
                                                        src="{{url('public/usercss')}}/images/product/larg/demo2.jpg"
                                                        alt="Product demo" />
                                                </a>
                                                <div class="item-btn">
                                                    <div class="box-inner">
                                                        <a title="Add to wishlist" href="#"
                                                            class="link-wishlist">&nbsp;</a>
                                                        <a title="Add to compare" href="#"
                                                            class="link-compare">&nbsp;</a>
                                                        <span class="qview">
                                                            <a class="vt_quickview_handler"
                                                                data-original-title="Quick View" data-placement="left"
                                                                data-toggle="tooltip" href="#"><span>Quick
                                                                    View</span></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a title="Add to cart" class="btn-cart" href="#">&nbsp;</a>
                                            </div>
                                            <div class="pro-info">
                                                <div class="pro-inner">
                                                    <div class="pro-title product-name"><a href="detail.html">Ipad Air
                                                            and iOS7</a></div>
                                                    <div class="pro-content">
                                                        <div class="wrap-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">$800.00</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1(s)</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end item wrap -->
                                    </div>
                                </div>
                            </div>
                            <div class="navslider">
                                <a class="prev" href="#">Prev</a>
                                <a class="next" href="#">Next</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-->

@stop